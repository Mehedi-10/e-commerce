<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <header>
    <a></a>
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
    <h1>Shop</h1>
    <form class="search-form">
      <label for="search">Search :</label>
      <input type="text" id="search" name="search">
      <button type="submit">Search</button>
    </form>
    <section class="products">
      <article class="product">
        <img src="image/watch.jpg" alt="White Watch">
        <h2>White Watch</h2>
        <p>A stylish white watch that complements your attire. Perfect for any occasion.</p>
        <p>Price: $19.99</p>
        <input type="number" name="quantity" value="1" min="1" max="10">
        <button>Add to Cart</button>
      </article>
      <article class="product">
        <img src="image/headphone.jpg" alt="Black Headphone">
        <h2>Black Headphone</h2>
        <p>Immerse yourself in high-quality sound with these sleek black headphones. Ideal for music lovers.</p>
        <p>Price: $29.99</p>
        <input type="number" name="quantity" value="1" min="1" max="10">
        <button>Add to Cart</button>
      </article>
      <article class="product">
        <img src="image/cube.jpg" alt="Rubik's Cube">
        <h2>Rubik's Cube</h2>
        <p>Challenge your problem-solving skills with this classic Rubik's Cube. Hours of fun and mental stimulation guaranteed.</p>
        <p>Price: $39.99</p>
        <input type="number" name="quantity" value="1" min="1" max="10">
        <button>Add to Cart</button>
      </article>
    </section>
  </main>
  <script src="script.js"></script>
</body>
</html>
