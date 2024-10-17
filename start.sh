#!/usr/bin/env bash
set -eo pipefail
printf "Starting vc docker-compose services\n"
./gen_ec_sign_key.sh
docker compose -f docker-compose.yaml up -d --remove-orphans
