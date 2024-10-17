#!/usr/bin/env bash
set -eo pipefail

if [ ! -f private_ec256.pem ]; then
    printf "Create signing key\n"
    # generate a private key for a curve
    openssl ecparam -name prime256v1 -genkey -noout -out private_ec256.pem

    # generate corresponding public key
    openssl ec -in private_ec256.pem -pubout -out public_ec256.pem
fi

printf "Starting vc docker-compose services\n"
docker compose -f docker-compose.yaml up -d --remove-orphans
