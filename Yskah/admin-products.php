<?php
    include("sessionchecker.php");
    include("connection.php");
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css\admin-products.css" />
    <link rel="stylesheet" href="css\bootstrap.min.css" />
    <script defer src="js\bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="navi-bar">
      <div class="navi-items">
        <div class="logo_search">
          <div class="logo">
            <a href="admin.php"><img src="LOGO.png" /></a>
          </div>
        </div>
        <div class="navi-btn">
          <div class="buttons">
            <i class="bx bx-home-alt"></i><a href="admin.php">Home</a>
          </div>
          <div class="buttons active">
            <i class="bx bx-shopping-bag"></i
            ><a href="admin-products.php">Products</a>
          </div>
          <div class="buttons">
            <i class='bx bx-cart' ></i><a href="user_table.php">Users</a>
          </div>
        </div>
        <div class="btn-group">
          <button
            class="btn btn-secondary btn-lg dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div class="user">
              <div class="name">
                <p><?php echo $_SESSION['username'] ?></p>
              </div>
              <div class="photo">
              <img src="img\default-profile.jpg" alt="">
              </div>
            </div>
          </button>
          <ul class="dropdown-menu">
            <li><a href="admin-user-setting.php">Account</a></li>

            <li>
              <div>
                <form action="logout.php" method="post">
                  <button type="submit" name="logout" class="btn btn-danger">
                    Log out
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="productlist">
      <?php 
        $res = mysqli_query($conn, "SELECT * FROM products");
        while($row = mysqli_fetch_assoc($res)){
    ?>
      <div class="card" style="width: 16.5rem">
        <img
          src="product-images/<?php echo $row['image_file']?>"
          class="card-img-top"
          alt="..."
        />
        <div class="remove_button">
        <form action="delete-product.php" method="POST" onsubmit="return confirm('Are you sure you want to remove this product?');" >
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <button type="submit" name="remove">Remove</button>
        </form>

        </div>

        <div class="card-body">
          <h5 class="card-title"><?php echo $row['product_name']?></h5>
          <p class="card-text"><p>Php <?php echo $row['price']?>.00</p></p>
          <a href="#" class="btn btn-primary">View more samples</a>
        </div>
      </div>
      <?php }?>
      <div class="card" style="width: 16.5rem">
      <div class="add_button">
      <a href="admin-adding-products-form.php"><img src="img\Add_Button.png" class="card-img-top" alt="..." />
      <h3>Add Product</h3></a>
      
      </div>
      </div>
    </div>
  </body>
</html>
