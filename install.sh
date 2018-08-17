#!/bin/sh

npm install && composer install && touch storage/app/database.sqlite && cp .env.example .env && php artisan key:generate && php artisan migrate:fresh && php artisan db:seed
