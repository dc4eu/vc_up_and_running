# VC

This repo aims to get VC project up and running. The standard setup is docker and/or docker-compose, it's possible to run each service directly without docker. As of now, this project only support linux since no other use case has present it self yet. 

## what does VC stand for and what does it do?
VC stands for Verfifiable Credential, and is just a name for services that provide a `ApiGW`, `Issuer`, `Verifier` and `Registry`.


### ApiGW
ApiGW is the frontend of the backend, it's here every external connection is made. ApiGw is stateless witch means that it can be run in parallel over multiple server or even datacenters.
It distribute messages to other services within VC-service infrastructure.

### Datastore
Datastore acts as an integration point, since this should be as generic as possible and any specific integrations are not desirable. The Authentic-Source can upload its document (ie. PDA1, EHIC, etc..) along with metadata. 

### Issuer
Issuer issues a credential based on document in Datastore or Authentic-Source, focus right now is SDJWT (https://datatracker.ietf.org/doc/draft-ietf-oauth-selective-disclosure-jwt/).

### Persistent
Persistent service store persistent data, for example authentic source document into mongodb.

### Registry
Registry register credentials, not established functionality yet.

### Verifier
Verifier verify a given credential, not established functionality yet.

## What is Authentic-Source?
Authentic-Source is the source of the original document, for instance a national agency may have documents they want to issue to a digital wallet. Then the agency has two option;
    
    1. implement the datastore API
    2. send the documents to Datastore
    
the issuer can get the document from either implementation.

## Versions

file `.env` sets the version, for all VC containers.

VC is using semver with `latest` pointing to the latest number tag (ie. 0.5.4)

## Use it!

### Start
`make start` or `./start.sh` or `docker-compose -f docker-compose.yaml up -d --remove-orphans`

### Stop
`make stop` or `./stop` or `docker-compose -f docker-compose.yaml rm -s -f`

### Restart
`make restart`

## API 

### Swagger Specification
found under `./docs/` in this repo.

Notice, `dc4eu` tag in swagger is used by VC project since this project is shared to an extent with eduSeal/Ladok for the time being other tags can be present as well.

### Endpoints

The ports for both the API Gateway and Jaeger services are configured in the `.env` file. By default, the following ports are used, but they can be customized by modifying the `.env` file.

**API Gateway**:

The `APIGW_HOST_PORT` is set in the `.env` file. By default, it is set to `8080`.

Access the Swagger documentation:
- `http://127.0.0.1:8080/swagger/index.html`

**Jaeger Tracing**:

The `JAEGER_HOST_PORT` is also set in the `.env` file, defaulting to `16686`.
- `http://127.0.0.1:16686`

### Configuring Ports

To change the default port mappings, modify the corresponding variables in the `.env` file:
- `APIGW_HOST_PORT`: Sets the port for the API Gateway.
- `JAEGER_HOST_PORT`: Sets the port for the Jaeger Tracing UI.