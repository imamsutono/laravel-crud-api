# Laravel Backend CRUD User API

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Features
1. Get list of all users with pagination
3. Create a new user
4. Edit the user data
5. Delete user

## How to setup this application
1. Run `git clone https://github.com/imamsutono/laravel-crud-api.git` command.
2. Go to the project directory with `cd laravel-crud-api`.
3. Run `composer install` to install the dependencies.
4. Create the MySQL database.
5. Create `.env` file on the root of the project, copy the content from `.env.example` file.
6. Adjust the database configuration:
    - `DB_DATABASE`: fill with the database name.
    - `DB_USERNAME`: fill with the database username connection.
    - `DB_PASSWORD`: fill with the database user password.
8. Run `php artisan migrate` to create all database tables and columns.
9. Run `php artisan db:seed` to fill dummy data to the database.
10. Run `php artisan serve` to run the API application.
11. Hit the endpoints. e.g: http://localhost:8000/api/user
