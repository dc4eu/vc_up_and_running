#!/usr/bin/env bash

printf "Starting vc docker-compose services\n"

docker-compose -f docker-compose.yaml up -d --remove-orphans