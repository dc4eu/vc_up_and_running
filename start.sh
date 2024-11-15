#!/usr/bin/env bash
set -eo pipefail

if [ ! -f private_ec256.pem ]; then
    printf "Create signing key\n"
    # generate a private key for a curve
    openssl ecparam -name prime256v1 -genkey -noout -out private_ec256.pem

    # generate corresponding public key
    openssl ec -in private_ec256.pem -pubout -out public_ec256.pem
fi

if [ ! -f satosa/backend.key ]; then
    printf "Create satosa saml2 backend certificates.\n"
    openssl req -x509 -newkey rsa:4096 -keyout satosa/backend.key -out satosa/backend.crt -sha256 -days 3650 -nodes -subj "/CN=satosa-issuer" -addext "subjectAltName=DNS:satosa-issuer"
fi
if [ ! -f satosa/metadata.key ]; then
    printf "Create satosa saml2 metadata sign certificates.\n"
    openssl req -x509 -newkey rsa:4096 -keyout satosa/metadata.key -out satosa/metadata.crt -sha256 -days 3650 -nodes -subj "/CN=satosa-issuer" -addext "subjectAltName=DNS:satosa-issuer"
fi

if [ ! -f simplesamlphp/webcert/privkey.pem ]; then
    printf "Create simplesamlphp web certificates.\n"
    [ -d simplesamlphp/webcert ] || mkdir simplesamlphp/webcert
    openssl req -x509 -newkey rsa:4096 -keyout simplesamlphp/webcert/privkey.pem -out simplesamlphp/webcert/cert.pem -sha256 -days 3650 -nodes -subj "/CN=simplesamlphp" -addext "subjectAltName=DNS:simplesamlphp"
    cp simplesamlphp/samlcert/saml_metadata.pem satosa/metadata.crt
fi
if [ ! -f simplesamlphp/samlcert/saml_metadata.key ]; then
    printf "Create simplesamlphp saml certificates.\n"
    [ -d simplesamlphp/samlcert ] || mkdir simplesamlphp/samlcert
    openssl req -x509 -newkey rsa:4096 -keyout simplesamlphp/samlcert/saml_metadata.key -out simplesamlphp/samlcert/saml_metadata.pem -sha256 -days 3650 -nodes -subj "/CN=simplesamlphp" -addext "subjectAltName=DNS:simplesamlphp"
    cp simplesamlphp/webcert/cert.pem satosa/simplesaml_webcert.pem
fi

if [ ! -f satosa/metadata/backend.xml ]; then
    printf "Configuring satosa and simplesamlphp in the correct order.\n"
    docker compose -f bootstrap.yaml up -d --wait
    printf "Waiting for backend.xml to be generated."
    while [ ! -f satosa/metadata/backend.xml ]; do
        printf "."
        sleep 1
    done
    printf " Done\n"
    cp satosa/metadata/backend.xml simplesamlphp/satosa-issuer.xml
    docker compose -f bootstrap.yaml down
fi
printf "Starting vc docker-compose services\n"
docker compose -f docker-compose.yaml up -d --remove-orphans
