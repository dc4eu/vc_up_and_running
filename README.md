# VC

This repo is for deployment of VC services. The standard setup is docker and/or docker-compose, it's possible to run each service directly without docker. As of now, this project only support linux since no other use case has present it self yet. 


## Start, Stop & Restart

`make start` or `./start.sh` or `docker-compose -f docker-compose.yaml up -d --remove-orphans`

`make stop` or `./stop` or `docker-compose -f docker-compose.yaml rm -s -f`

`make restart`

## API 

### Swagger Specification
found under `./docs/apigw/` in this repo.

### Endpoint

`GET http://<apigw-url>/swagger/doc.json`

or with web browser: `http://<apigw-url>/swagger/index.html`

## Jaeger tracing

http://172.16.100.11:16686