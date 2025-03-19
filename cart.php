<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body
    style="
      background-image: url(./Resource/Images/logIn.png);
      background-repeat: no-repeat;
      height: 600px;
      background-position: center;
      background-size: cover;
    "
  >
    <!-- start include the header.php -->
    <?php include('header.php'); ?>
    <!-- end include the header.php -->
    <header class="page-header other-page-header">
      <h1>Your Cart</h1>
    </header>
    <main><p>Your selected items will appear here.</p>
      <div class="cart-items"></div>
    </main>
    <script src="./JS/script.js"></script>
  </body>
</html>
