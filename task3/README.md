# Laravel API Application

This is a Laravel application providing a RESTful API for managing products. The application includes endpoints to create, read, update, and delete products. Below are the details of the available API routes and the database schema used.

## Database Schema

The products table schema is defined as follows:

```php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->decimal('price', 8, 2);
    $table->integer('quantity');
    $table->string('image');
    $table->timestamps();
});
```

## API Endpoints

### Get All Products

**Endpoint:** `GET /api/products`

**Description:** Retrieves a list of all products.

**Response Example:**

```json
[
    {
        "id": 1,
        "name": "Product 1",
        "description": "Description of Product 1",
        "price": 10.00,
        "quantity": 100,
        "image": "image1.jpg",
        "created_at": "2024-01-01T00:00:00.000000Z",
        "updated_at": "2024-01-01T00:00:00.000000Z"
    },
    ...
]
```

### Get a Single Product

**Endpoint:** `GET /api/products/{product}`

**Description:** Retrieves details of a single product by its ID.

**Response Example:**

```json
{
    "id": 1,
    "name": "Product 1",
    "description": "Description of Product 1",
    "price": 10.0,
    "quantity": 100,
    "image": "image1.jpg",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

### Create a New Product

**Endpoint:** `POST /api/new-product`

**Description:** Creates a new product with the provided details.

**Request Body Example:**

```json
{
    "name": "New Product",
    "description": "Description of the new product",
    "price": 15.0,
    "quantity": 50,
    "image": "image2.jpg"
}
```

**Response Example:**

```json
{
    "id": 2,
    "name": "New Product",
    "description": "Description of the new product",
    "price": 15.0,
    "quantity": 50,
    "image": "image2.jpg",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

### Update an Existing Product

**Endpoint:** `PUT /api/update-product/{product}`

**Description:** Updates an existing product with the provided details.

**Request Body Example:**

```json
{
    "name": "Updated Product",
    "description": "Updated description",
    "price": 20.0,
    "quantity": 30,
    "image": "image3.jpg"
}
```

**Response Example:**

```json
{
    "id": 1,
    "name": "Updated Product",
    "description": "Updated description",
    "price": 20.0,
    "quantity": 30,
    "image": "image3.jpg",
    "created_at": "2024-01-01T00:00:00.000000Z",
    "updated_at": "2024-01-01T00:00:00.000000Z"
}
```

### Delete a Product

**Endpoint:** `DELETE /api/delete-product/{product}`

**Description:** Deletes a product by its ID.

**Response Example:**

```json
{
    "message": "Product deleted successfully"
}
```

## Running the Application

1. **Install dependencies:**

    ```sh
    cd task3
    composer install
    ```

2. **Configure the environment:**

    Copy the `.env.example` file to `.env` and configure your database settings.

    ```sh
    cp .env.example .env
    ```

3. **Generate an application key:**

    ```sh
    php artisan key:generate
    ```

4. **Run the database migrations:**

    ```sh
    php artisan migrate
    ```

5. **Add dummy data using seeding**

    ```sh
    php artisan db:seed
    ```

6. **Serve the application:**

    ```sh
    php artisan serve
    ```

The application should now be running at `http://localhost:8000`. You can use tools like Postman or cURL to interact with the API endpoints.

## Conclusion

This Laravel application provides a simple RESTful API for managing products. You can extend this application further by adding more features or integrating it with a frontend application.
