# What Is a REST API and How Does It Work?

When you use a web application, the information you see often comes from a server. A frontend application needs a way to request data from that server, and an API provides a structured way for software systems to communicate. The frontend itself can also use responsive web design techniques to adapt its interface to different devices.

One commonly used approach is a REST API.

In this guide, we'll explain what a REST API is, how requests and responses work, what endpoints and HTTP methods are, and how JSON is commonly used to exchange data.

## What Is an API?

An API, or Application Programming Interface, provides a defined way for software systems to communicate.

For example, a frontend application may request product information from a backend server through an API.

The basic flow can be represented as:

```text
Client → API → Server → Database
```

The server processes the request and returns information that the client can use.

## What Does REST Mean?

REST stands for Representational State Transfer.

REST is an architectural style for designing networked applications. RESTful systems commonly use HTTP and represent resources through URLs.

A REST API can expose resources such as:

- users
- products
- orders
- articles
- transactions

## What Is a REST API?

A REST API is an API designed around REST principles.

A client can interact with resources using HTTP requests.

For example:

```http
GET /api/products
```

This request asks the server for product information.

The server might return:

```json
[
  {
    "id": 1,
    "name": "Laptop",
    "price": 45000
  }
]
```

## How Does a REST API Work?

### 1. The Client Sends a Request

A browser, mobile application, or frontend application sends an HTTP request to an API endpoint.

### 2. The Server Processes the Request

The server receives the request, validates it, performs the required operation, and may retrieve information from a database.

### 3. The Server Sends a Response

The server sends an HTTP response containing a status code and, when appropriate, response data.

### 4. The Client Uses the Response

The client processes the response and displays or uses the returned information.

## What Is a REST API Endpoint?

An endpoint is a URL through which a client can interact with a particular resource.

For example:

```http
GET /api/products
```

The `/api/products` path represents the products resource.

## Common HTTP Methods

| Method | Purpose |
|---|---|
| GET | Retrieve data |
| POST | Create data |
| PUT | Update or replace data |
| DELETE | Delete data |

## REST API Example

A product API might provide:

```http
GET /api/products
GET /api/products/1
POST /api/products
PUT /api/products/1
DELETE /api/products/1
```

Each endpoint can represent an operation involving the product resource.

## What Is JSON?

JSON stands for JavaScript Object Notation.

It is a commonly used format for exchanging structured data between applications.

Example:

```json
{
  "id": 1,
  "name": "Laptop",
  "price": 45000
}
```

## Common HTTP Status Codes

| Status Code | Meaning |
|---|---|
| 200 | Request successful |
| 201 | Resource created |
| 400 | Bad request |
| 401 | Authentication required |
| 404 | Resource not found |
| 500 | Server error |

## REST API Authentication

Some APIs require clients to authenticate before accessing protected resources.

Common approaches include API keys, session-based authentication, and token-based authentication.

Authentication and authorization should be implemented according to the requirements and security model of the API.

## REST API vs. Traditional Web Pages

A traditional web request may return an HTML document that the browser renders as a page. A REST API commonly returns structured data that a frontend application can process.

These technologies can be combined with other website features to create useful business websites. For example, a small business website may use a frontend interface, forms, APIs, and other features to support customer interactions.

For example:

```text
Browser → Web server → HTML page
```

versus:

```text
Frontend application → REST API → JSON data
```

## Common REST API Mistakes

Beginners often make mistakes such as:

- confusing an API with an endpoint
- using HTTP methods inconsistently
- returning unclear error responses
- ignoring HTTP status codes
- exposing sensitive information
- failing to validate input
- not documenting endpoints

## Frequently Asked Questions

### Is REST API the same as API?

No. API is a broader term for an interface that allows software systems to communicate. REST is one architectural style that can be used when designing APIs.

### What is an API endpoint?

An endpoint is a URL through which a client can interact with a particular resource or API operation.

### Does REST API always use JSON?

No. JSON is commonly used with REST APIs, but REST itself does not require JSON as the only representation format.

### Is REST API frontend or backend?

REST APIs are commonly implemented on the backend, while frontend applications act as clients that send requests to those APIs.

## Conclusion

REST APIs provide a structured way for applications to communicate over a network. Understanding clients, servers, endpoints, HTTP methods, requests, responses, and data formats such as JSON provides a foundation for working with modern web applications.