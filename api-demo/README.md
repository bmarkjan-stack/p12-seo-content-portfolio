# REST API Demonstration

This small Flask application demonstrates the REST API concepts discussed in Sample 3 of the SEO Content & Web Development Portfolio.

## Technologies

- Python
- Flask
- HTTP
- JSON

## Purpose

The application provides a simple product API that demonstrates common REST API operations.

It is an educational demonstration and is not intended for production use.

## Endpoints

### Get All Products

```http
GET /api/products
```

Returns all available products.

### Get One Product

```http
GET /api/products/1
```

Returns a specific product.

### Create a Product

```http
POST /api/products
```

Example request body:

```json
{
  "name": "Monitor",
  "price": 12000
}
```

### Update a Product

```http
PUT /api/products/1
```

Example request body:

```json
{
  "name": "Updated Laptop",
  "price": 47000
}
```

### Delete a Product

```http
DELETE /api/products/1
```

Deletes the specified product.

## HTTP Status Codes Demonstrated

- 200 — Successful request
- 201 — Resource created
- 400 — Invalid request
- 404 — Resource not found

## Relationship to Sample 3

The API provides practical examples of:

- HTTP methods
- API endpoints
- requests
- responses
- JSON
- HTTP status codes
- basic input validation

These concepts are explained in the WordPress article:

**What Is a REST API and How Does It Work?**