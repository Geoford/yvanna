<?php
    include("sessionchecker.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Setting</title>
    <link rel="stylesheet" href="css\user_setting.css" />
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <script defer src="js\bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="navi-bar">
      <div class="navi-items">
        <div class="logo_search">
          <div class="logo">
            <a href="landing_page.php"><img src="LOGO.png" /></a>
          </div>
        </div>

        <div class="navi-btn">
          <div class="buttons active">
            <i class="bx bx-home-alt"></i><a href="#">Home</a>
          </div>
          <div class="buttons">
            <i class="bx bx-shopping-bag"></i><a href="#">Products</a>
          </div>
          <div class="buttons">
            <i class="bx bx-cart"></i><a href="#">Cart</a>
          </div>
          <div class="buttons">
            <i class="bx bx-phone"></i><a href="#">About Us</a>
          </div>
        </div>

        <div class="user">
          <div class="name">
            <!-- <p></p>
          </div>

          <div class="photo">
            <img src="img\User.jpg" alt="" /> -->
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="profile-pic">
        <img src="img\User.jpg" alt="" />
      </div>
      <div class="user-info">
        <p>Name: <?php echo $_SESSION['username'] ?> </p>
        <p>Name: <?php echo $_SESSION['username'] ?> </p>
        <p>Name: <?php echo $_SESSION['username'] ?> </p>
      </div>
      <div class="customer-address"></div>
    </div>
  </body>
</html>
