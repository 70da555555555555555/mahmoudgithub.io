<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eloctronic wheel chair</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 1rem;
        }
        .product {
            border: 1px solid #ddd;
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #fff;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h2 {
            margin: 0;
        }
        .product p {
            color: #555;
        }
        .product button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .product button:hover {
            background-color: #218838;
        }
        .checkout-form {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .checkout-form label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .checkout-form input,
        .checkout-form select {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
        }
        .checkout-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .checkout-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Awesome Products</h1>
    </header>
    <div class="container">
        <div class="product">
            <img src="https://image.made-in-china.com/201f0j00KyEkzOFswqoW/Yveelt-Wholesale-Comfortable-Folding-Power-Wheel-Chair-Portable-Foldable-Mobility-Motorized-Electric-Wheelchair.webp" alt="Product 1">
           <h2>   Product 1 </h2>
            <p> electronic wheel chair (v.1)</p>
            <p>price=1000$</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="https://image.made-in-china.com/201f0j00ANWVeinhpkcq/High-Quality-Lithium-Battery-Electric-Wheelchair-Lightweight-Foldable-for-Disabled.webp" alt="Product 2">
            <h2>Product 2</h2>
            <p>electronic wheel chair (v.2)</p>
            <p>price=1500$</p>
            <button>Add to Cart</button>
        </div>

        <!-- Checkout Form -->
        <div class="checkout-form">
            <h2>Checkout</h2>
            <form action="decumentation.php" method="post">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Shipping Address</label>
                <input type="text" id="address" name="address" required>

                <label for="product">Select Product</label>
                <select id="product" name="product" required>
                    <option value="product1">Product 1</option>
                    <option value="product2">Product 2</option>
                </select>

                <button type="submit">Place Order</button>
            </form>
        </div>
    </div>
</body>
</html>