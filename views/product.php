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
            /* background-color: gray; */
        }

        header {
            background-color: #555;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin: 0px auto 0px auto;
            text-align: center;
            display: -moz-groupbox;
            /* grid-template-columns: 30% 30% 30%; */
            /* column-gap: 20px; */
            /* row-gap: 10px; */
            padding: 5px;
            margin-left: 5px;
            /* width: 400px; */
            /* align-items: space-between; */
        }


        .product-card {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border: 1px solid #ccc;
            padding: 10px;
            width: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 60px;
        }

        .product-image {
            width: 20%;
            height: 200px;
            margin-bottom: 10px;
            text-align: center;

        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            background-color: #fff;
        }

        .product-title {
            font-size: 20px;
            margin: 0;
            text-align: center;
        }

        .product-price {
            font-size: 16px;
            margin: 0;
            text-align: center;
            color: lightseagreen;
        }

        .add-to-cart-btn {
            background-color: cornflowerblue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: all 0.25s ease;
        }

        .add-to-cart-btn:hover {
            background-color: red;
        }

        .flex-container {
            display: flex;
            /* flex-direction: wrap; */
        }

        .nav ul li {
            display: inline;
            padding: 10px;
            /* padding-left: 300px; */
            padding-top: 10px;
            padding: 20px;
            background-color: white;
            margin: 10px;
            /* margin-top: 10px; */
            border-radius: 3px;
            height: 5px;
            width: 30px;
            margin-top: 3px;
            font-size: larger;
            text-decoration-line: none;
            color: white;
        }

        a {
            text-decoration-line: none;
            color: #fff;
        }

        ul {
            padding-left: 80%
        }
    </style>
</head>

<body>
    <header>
        <h1>Welcome to My Shop</h1>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="../views/login.php">Login</a></li>
                    <li><a href="../views/signup.php">Signup</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <!-- Navigation -->

        <div class="flex-container">
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="../images/1.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">I-phon10</h2>
                    <h4 class="product-price">40000 /-</h4>
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
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
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET['product'])) {
        // session_start();
        $item = $_GET['item'];
        $price = $_GET['price'];
        $description = $_GET['description'];

        // connect to db:
        include_once 'db-connect.php';

        //sql query:
        $sql = "INSERT INTO product (item,price,description) VALUES('$item', '$price', '$description')";
    }

    ?>
</body>

</html>