#!/bin/sh

BASE_DIR=$(dirname "$(readlink -f "$0")")
if [ "$1" != "test" ]; then
    psql -h localhost -U BafaziSafari -d BafaziSafari < $BASE_DIR/BafaziSafari.sql
    if [ -f "$BASE_DIR/BafaziSafari_test.sql" ]; then
        psql -h localhost -U BafaziSafari -d BafaziSafari < $BASE_DIR/BafaziSafari_test.sql
    fi
    echo "DROP TABLE IF EXISTS migration CASCADE;" | psql -h localhost -U BafaziSafari -d BafaziSafari
fi
psql -h localhost -U BafaziSafari -d BafaziSafari_test < $BASE_DIR/BafaziSafari.sql
echo "DROP TABLE IF EXISTS migration CASCADE;" | psql -h localhost -U BafaziSafari -d BafaziSafari_test
