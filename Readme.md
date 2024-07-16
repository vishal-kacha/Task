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

   Open the `.env` file in a text editor and update the following variables:

   ```dotenv
   APP_NAME=Laravel
   APP_ENV=local
   APP_KEY=base64:GENERATED_APP_KEY
   APP_DEBUG=true
   APP_URL=http://localhost

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password

   BROADCAST_DRIVER=log
   CACHE_DRIVER=file
   FILESYSTEM_DRIVER=local
   QUEUE_CONNECTION=sync
   SESSION_DRIVER=file
   SESSION_LIFETIME=120
   ```

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
