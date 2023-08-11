<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
  <header>
    <a > </a>
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
    <h1>Shopping Cart</h1>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Product 1</td>
          <td>$19.99</td>
          <td><input type="number" value="1"></td>
          <td>$19.99</td>
        </tr>
        <tr>
          <td>Product 2</td>
          <td>$29.99</td>
          <td><input type="number" value="2"></td>
          <td>$59.98</td>
        </tr>
        <tr>
          <td>Product 3</td>
          <td>$39.99</td>
          <td><input type="number" value="1"></td>
          <td>$39.99</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3">Subtotal:</td>
          <td>$119.96</td>
        </tr>
        <tr>
          <td colspan="3">Tax:</td>
          <td>$10.80</td>
        </tr>
        <tr>
          <td colspan="3">Total:</td>
          <td>$130.76</td>
        </tr>
      </tfoot>
    </table>
    <button>Checkout</button>
  </main>
<script src="script.js"></script>

</body>
</html>
