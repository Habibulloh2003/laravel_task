## Installation

Php 8.1.

Clone project & install packages.

```sh
git clone "https://github.com/Habibulloh2003/laravel_task.git"
```
```sh
cd laravel_task
```
```sh
composer install
```

Change .env file

```sh
DB_DATABASE=laravel_task
DB_USERNAME=root
DB_PASSWORD=root
```

Migrate & seed database

```sh
php artisan migrate
```
```sh
php artisan db:seed
```

## Run

```sh
php artisan serve
```
