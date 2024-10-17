#!/usr/bin/env bash

printf "Stopping vc docker-compose services\n"

docker compose -f docker-compose.yaml rm -s -f
