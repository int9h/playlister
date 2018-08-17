# Playlister

> Simple web application for creating and sharing playlists.

## Build Setup

### run install.sh

```bash
sh install.sh
```

### or step by step

``` bash

# install npm dependencies
npm install

# install composer dependencies
composer install

# copy .env.example
cp .env.example .env

# generate app key
php artisan key:generate

# migrate database
php artisan migrate:fresh

# seed database
php artisan db:seed
```

## Run

```bash
php artisan serve
```

# Credits
@neculaesei [deprecated-Playlister](https://github.com/neculaesei/deprecated-Playlister)
