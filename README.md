# Tasks for Today Management System

The Tasks for Today Management System is a Laravel 12 application developed for IT0049 Technical Summative Assessment 3. It rebuilds the original CodeIgniter task-management application using Laravel migrations, seeders, Eloquent models, controllers, and Blade templates.

## Developer

MC Kenrick Cafugauan

## Features

- Welcome page displaying only tasks scheduled for today
- Complete task list ordered by task date
- Profile page displaying one user record
- Static About page identifying the developer
- Eight sample tasks across four different dates
- MySQL database managed through Laravel migrations
- Sample records generated through a Laravel seeder
- Database records retrieved using Eloquent ORM
- Shared Blade layout and navigation

## Application Routes

| Page | URL |
|---|---|
| Welcome | `/` |
| Task List | `/tasks` |
| Profile | `/profile` |
| About | `/about` |

## Requirements

- PHP 8.2 or later
- Composer
- MySQL or MariaDB
- XAMPP
- Git

## Installation

1. Clone the repository and switch to the TSA3 branch.

```bash
git clone https://github.com/Squire282/Laravel_Technicals.git
cd Laravel_Technicals
git switch tsa3

composer install
copy .env.example .env
php artisan key:generate
laravel_tasks_tsa3

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_tasks_tsa3
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate --seed
php artisan serve
http://127.0.0.1:8000


Save the file.
