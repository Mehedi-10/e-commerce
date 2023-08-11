<!DOCTYPE html>
<html>

<head>
  <title>My E-commerce Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <header>

    <a>
    </a>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="">Account</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <?php

    $s_name = "localhost";
    $user_name = "root";
    $pass = "";
    $db_name = "online_shop";

    $conn = new mysqli($s_name, $user_name, $pass, $db_name);

    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    } else {
      $sql = "SELECT * FROM products";
      $result = $conn->query($sql);
    }

    ?>

    <section class="banner">
      <h2>Welcome to My E-commerce Store</h2>
      <p>Discover our latest products and deals!</p>
    </section>
    <h2>Featured Products</h2>
    <?php

    while ($row = $result->fetch_assoc()) {
      $product_name = $row['product_name'];
      $url = $row['image_url'];
      echo '
      <div class="product">
        <img src="' . $url . '" alt="' . $product_name . '">
        <h3>' . $product_name . '</h3>
      </div>
          ';
    }
    ?>
    </section>
    <section class="newsletter">
      <h2>Subscribe to our Newsletter</h2>
      <form>
        <input type="email" placeholder="Enter your email">
        <button type="submit">Subscribe</button>
      </form>
    </section>
  </main>
  <script src="script.js"></script>
</body>

</html>