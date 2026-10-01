from flask import Flask, jsonify, request

app = Flask(__name__)

products = [
    {
        "id": 1,
        "name": "Laptop",
        "price": 45000
    },
    {
        "id": 2,
        "name": "Keyboard",
        "price": 2500
    }
]


@app.get("/api/products")
def get_products():
    return jsonify(products)


@app.get("/api/products/<int:product_id>")
def get_product(product_id):
    product = next(
        (product for product in products if product["id"] == product_id),
        None
    )

    if product is None:
        return jsonify({"error": "Product not found"}), 404

    return jsonify(product)


@app.post("/api/products")
def create_product():
    data = request.get_json()

    if not data or "name" not in data or "price" not in data:
        return jsonify({
            "error": "name and price are required"
        }), 400

    product = {
        "id": len(products) + 1,
        "name": data["name"],
        "price": data["price"]
    }

    products.append(product)

    return jsonify(product), 201


@app.put("/api/products/<int:product_id>")
def update_product(product_id):
    product = next(
        (product for product in products if product["id"] == product_id),
        None
    )

    if product is None:
        return jsonify({"error": "Product not found"}), 404

    data = request.get_json()

    if not data:
        return jsonify({"error": "Request body is required"}), 400

    product["name"] = data.get("name", product["name"])
    product["price"] = data.get("price", product["price"])

    return jsonify(product)


@app.delete("/api/products/<int:product_id>")
def delete_product(product_id):
    product = next(
        (product for product in products if product["id"] == product_id),
        None
    )

    if product is None:
        return jsonify({"error": "Product not found"}), 404

    products.remove(product)

    return jsonify({
        "message": "Product deleted successfully"
    })


if __name__ == "__main__":
    app.run(debug=True)