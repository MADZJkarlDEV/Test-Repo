<!DOCTYPE html>
<html>
<head>
<style>
    body {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        background-color: red;
        padding: 20px;
        margin-bottom: 20px;
        text-align: center;
    }

    .header-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    footer {
        background-color: red;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
    }

    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 20px;
    }

    .products ul {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 0;
    }

    .products li {
        flex-basis: calc(33.33% - 20px);
        margin-bottom: 20px;
        background-color: #f9f9f9;
        padding: 20px;
    }

    .product {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .product img {
        max-width: 100%;
        height: auto;
    }

    .scrollable-row {
        max-height: 200px;
        overflow: hidden;
        border: 1px solid red;
        transition: max-height 0.5s ease;
    }

    .scrollable-row:hover {
        max-height: 400px;
        overflow-y: auto;
    }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopee-like Store</title>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Welcome to Phil-tech-reatails</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="product-container">
            <div class="scrollable-row">
                <?php
                $productsRow1 = [
                    ['id' => 1, 'name' => 'Product 1', 'price' => 19.99, 'image' => 'product1.jpg'],
                    ['id' => 2, 'name' => 'Product 2', 'price' => 29.99, 'image' => 'product2.jpg'],
                    ['id' => 3, 'name' => 'Product 3', 'price' => 39.99, 'image' => 'product3.jpg'],
                ];

                foreach ($productsRow1 as $product) {
                    echo '<div class="product">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h2>' . $product['name'] . '</h2>';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '<a href="add_to_cart.php?id=' . $product['id'] . '">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="scrollable-row">
                <?php
                $productsRow2 = [
                    ['id' => 4, 'name' => 'Product 4', 'price' => 49.99, 'image' => 'product4.jpg'],
                    ['id' => 5, 'name' => 'Product 5', 'price' => 59.99, 'image' => 'product5.jpg'],
                    ['id' => 6, 'name' => 'Product 6', 'price' => 69.99, 'image' => 'product6.jpg'],
                ];

                foreach ($productsRow2 as $product) {
                    echo '<div class="product">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h2>' . $product['name'] . '</h2>';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '<a href="add_to_cart.php?id=' . $product['id'] . '">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="scrollable-row">
                <?php
                $productsRow3 = [
                    ['id' => 7, 'name' => 'Product 7', 'price' => 79.99, 'image' => 'product7.jpg'],
                    ['id' => 8, 'name' => 'Product 8', 'price' => 89.99, 'image' => 'product8.jpg'],
                    ['id' => 9, 'name' => 'Product 9', 'price' => 99.99, 'image' => 'product9.jpg'],
                ];

                foreach ($productsRow3 as $product) {
                    echo '<div class="product">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h2>' . $product['name'] . '</h2>';
                    echo '<p>Price: $' . $product['price'] . '</p>';
                    echo '<a href="add_to_cart.php?id=' . $product['id'] . '">Add to Cart</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Phil-Tech-Retails</p>
        </div>
    </footer>
</body>
</html>
