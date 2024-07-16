# Laravel Application

This README provides step-by-step instructions for setting up and running a Laravel application.

## Prerequisites

Before you begin, ensure you have the following software installed on your system:

- **PHP (>=8.1)**: Laravel requires PHP version 8.1 or higher.
- **Composer**: Dependency manager for PHP.
- **Node.js (>=14.x)** and **npm**: Required for managing JavaScript dependencies.
- **Database**: MySQL, PostgreSQL, SQLite, or any other database supported by Laravel.
- **Web Server**: Apache, Nginx, or the built-in PHP server.

## Installation

1. This projects have 3 different task all are in there seperate folder follow the below step by cd in the task you want to run.

2. **Install PHP dependencies:**

   ```bash
   composer install
   ```

3. **Install JavaScript dependencies:**

   ```bash
   npm install
   ```

4. **Copy the example environment file and set up your environment variables:**

   ```bash
   cp .env.example .env
   ```

   Now update the env based on your env variables

5. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

6. **Run database migrations:**

   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed the database with sample data:**

   ```bash
   php artisan db:seed
   ```

8. **Compile the assets:**

   ```bash
   npm run dev
   ```

## Running the Application

1. **Start the development server:**

   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://localhost:8000`.
