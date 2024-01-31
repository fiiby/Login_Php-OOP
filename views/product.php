<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: lightseagreen;
        }

        .container {
            margin: 0px auto 0px auto;
            text-align: center;
        }


        .product-card {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 60px;
        }

        .product-image {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
        }

        .product-title {
            font-size: 24px;
            margin: 0;
            text-align: center;
        }

        .product-price {
            font-size: 20px;
            margin: 0;
            text-align: center;
        }

        .add-to-cart-btn,
        .view-btn {
            background-color: grey;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: all 0.25s ease;
        }

        .add-to-cart-btn:hover,
        .view-btn:hover {
            color: lightseagreen
        }

        .flex-container {
            display: flex;
        }

        .nav ul li {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navigation -->
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="../views/login.php">Login</a></li>
                    <li><a href="../views/signup.php">Signup</a></li>
                </ul>
            </div>
        </nav>
        <div class="flex-container">
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/1.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">I-phon10</h2>
                    <h4 class="product-price">40000 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/3.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Headphones</h2>
                    <h4 class="product-price">2000 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/2.png" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Laptop </h2>
                    <h4 class="product-price">30000 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/4.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Digital Camera</h2>
                    <h4 class="product-price">45000 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/5.jpg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Denim Jacket</h2>
                    <h4 class="product-price">3000 -/</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/6.webp" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Hat</h2>
                    <h4 class="product-price">500 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/7.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Water Bottle</h2>
                    <h4 class="product-price">300 /-</h4>
                    <button class="add-to-cart-btn">Add to Cart</button>
                    <button class="view-btn">View</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>