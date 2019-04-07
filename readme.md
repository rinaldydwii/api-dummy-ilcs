# Assesment API

by Rinaldy Dwi Istanto

## Introduction

This API is serve for [Assesment App](https://github.com/rinaldydwii/assesment-app-icls).

## Installation

Installation require composer and then run

```bash
composer install
```

## Configuration

Make sure you are running Postgresql Database.

Copy `.env.example` and rename into `.env`.

Edit `.env`, change `DB_CONNECTION` into `pgsql`, fill `DB_HOST`,`DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.

And then run
```bash
php artisan migrate
```
To run with seeder
```bash
php artisan migrate:refresh --seed
```
## Run Server
To run application in app folder
```bash
php -S localhost:8000 -t public
```
Change `localhost:8000` with url and port you want.

\
End