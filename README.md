# VC

This repo aims to get VC project up and running. The standard setup is docker and/or docker-compose, it's possible to run each service directly without docker. As of now, this project only support linux since no other use case has present it self yet. 

## what does VC stand for and what does it do?
VC stands for Verfifiable Credential, and is just a name for services that provide a `ApiGW`, `Datastore`, `Issuer`, `Verifier` and `Registry`.

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

VC is using semver with `latest` pointing to the latest number tag (ie. 0.3.1)

## Start, Stop & Restart

`make start` or `./start.sh` or `docker-compose -f docker-compose.yaml up -d --remove-orphans`

`make stop` or `./stop` or `docker-compose -f docker-compose.yaml rm -s -f`

`make restart`

## API 

### Swagger Specification
found under `./docs/` in this repo.

Notice, `dc4eu` tag in swagger is used by VC project since this project is shared to an extent with eduSeal/Ladok for the time being other tags can be present as well.

### Endpoints

`GET http://<apigw-url>/swagger/doc.json`

or with web browser: `http://<apigw-url>/swagger/index.html`

## Jaeger tracing

http://172.16.100.11:16686