#!/bin/sh

if [ "$1" = "travis" ]; then
    psql -U postgres -c "CREATE DATABASE BafaziSafari_test;"
    psql -U postgres -c "CREATE USER BafaziSafari PASSWORD 'BafaziSafari' SUPERUSER;"
else
    [ "$1" = "test" ] || sudo -u postgres dropdb --if-exists BafaziSafari
    sudo -u postgres dropdb --if-exists BafaziSafari_test
    [ "$1" = "test" ] || sudo -u postgres dropuser --if-exists BafaziSafari
    [ "$1" = "test" ] || sudo -u postgres psql -c "CREATE USER BafaziSafari PASSWORD 'BafaziSafari' SUPERUSER;"
    [ "$1" = "test" ] || sudo -u postgres createdb -O BafaziSafari BafaziSafari
    [ "$1" = "test" ] || sudo -u postgres psql -d BafaziSafari -c "CREATE EXTENSION pgcrypto;" 2>/dev/null
    sudo -u postgres createdb -O BafaziSafari BafaziSafari_test
    sudo -u postgres psql -d BafaziSafari_test -c "CREATE EXTENSION pgcrypto;" 2>/dev/null
    [ "$1" = "test" ] && exit
    LINE="localhost:5432:*:BafaziSafari:BafaziSafari"
    FILE=~/.pgpass
    if [ ! -f $FILE ]; then
        touch $FILE
        chmod 600 $FILE
    fi
    if ! grep -qsF "$LINE" $FILE; then
        echo "$LINE" >> $FILE
    fi
fi
