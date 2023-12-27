# Laravel Product API Project

This project is a Laravel-based REST API for managing a product catalog. It includes features such as CRUD operations for products, category filtering, sorting, and authentication using Laravel Sanctum.

## Setup

### Prerequisites

- PHP (>= 7.4)
- Composer
- MySQL or another database supported by Laravel

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/yourusername/your-laravel-product-api.git
    ```

2. Navigate to the project directory:

    ```bash
    cd your-laravel-product-api
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Create a copy of the `.env.example` file and rename it to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Configure your database connection in the `.env` file:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. Generate the application key:

    ```bash
    php artisan key:generate
    ```

7. Run database migrations:

    ```bash
    php artisan migrate
    ```

8. (Optional) Seed the database with a default user:

    ```bash
    php artisan db:seed --class=UserSeeder
    ```

### API Documentation

#### Swagger

The API is documented using Swagger. To view the Swagger documentation, follow these steps:

1. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

2. Open your browser and go to [http://127.0.0.1:8000/api/documentation](http://127.0.0.1:8000/api/documentation).

3. Explore and test the API using the Swagger UI.

#### Postman

You can also import the API collection in Postman for testing:

- [Download Postman Collection](https://github.com/ziaurrehmanjutt/task-app/blob/main/postman/collections/Task%20Apis.json)

## Usage

To use the API, you need to authenticate. You can do this by making a `POST` request to `/api/login` with valid credentials. Once authenticated, use the generated token in the Swagger UI or Postman for authorized requests.

