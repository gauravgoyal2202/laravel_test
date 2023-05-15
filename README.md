# Laravel Project Setup Instructions

This guide provides instructions to set up this Laravel project on your local machine.

## Prerequisites

1. PHP >= 7.3 (or the version specified in the `composer.json` file)
2. Composer (Dependency Manager for PHP)
3. MySQL (or your preferred database system)
4. Node.js and NPM
5. Laravel CLI (optional, but it can simplify many tasks)

## Setup Instructions

### 1. Clone the Repository

Clone the repository using the command:

`git clone https://github.com/gauravgoyal2202/laravel_test.git`

Replace the repository URL with the actual URL.

### 2. Navigate to Project Directory

Change your current directory to the project directory:

Replace `repository-name` with the actual directory name.
`cd laravel_test`
### 3. Install PHP Dependencies

Run composer to install the necessary PHP dependencies:
`composer install`


### 4. Create a copy of your `.env` file

Laravel uses a `.env` file for environment-specific settings. Copy the `.env.example` file to create your own `.env` file:

`cp .env.example .env`


### 5. Generate an Application Key

Generate a key for the Laravel application:

`php artisan key:generate`


### 6. Set up a Database

Create a new database on your local machine and add the connection details to your `.env` file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Replace the placeholders with your actual database details.

### 7. Run the Database Migrations

Run the migrations with:

`php artisan migrate`

`php artisan db:seed --class=TenantsTableSeeder`
`php artisan db:seed --class=SettingsTableSeeder`


### 8. Start the Local Development Server

Start the Laravel development server with:
`php artisan serve`


Now, open your project in a web browser at `http://localhost:8000`.

---

If you face any issues during setup, please check the Laravel documentation or raise an issue in the repository.







