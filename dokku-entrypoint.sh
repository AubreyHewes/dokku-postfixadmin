#!/usr/bin/env bash

if [ -z "$DATABASE_URL" ]; then
  echo "FATAL: you have not set the DATABASE_URL environment variable!"
  exit 1
fi

/usr/local/bin/docker-entrypoint.sh $@