#!/bin/bash
base=/var/www/html/trying/main/larasy.io
docs=${base}/resources/docs

cd ${docs}/5.3 && git pull origin 5.3
cd ${docs}/master && git pull origin master

cd $base && php artisan docs:clear-cache
