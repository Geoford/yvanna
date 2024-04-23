<?php
    include("sessionchecker.php");
    include("connection.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\products.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script defer src="js\bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="navi-bar">
    <div class="navi-items">
        <div class="logo_search">
            <div class="logo"><a href="landing_page.php"><img src="LOGO.png"></a></div>
        </div>
        <div class="navi-btn">
            <div class="buttons active"><i class='bx bx-home-alt'></i><a href="#">Home</a></div>
            <div class="buttons"><i class='bx bx-shopping-bag' ></i><a href="products.php">Products</a></div>
            <div class="buttons"><i class='bx bx-cart' ></i><a href="#">Cart</a></div>
            <div class="buttons"><i class='bx bx-phone'></i><a href="#">About Us</a></div>
        </div>
        <div class="btn-group">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="user">
                <div class="name">
                <p><?php echo $_SESSION['username'] ?></p>
                </div>
                <div class="photo">
                <img src="img\User.jpg" alt="">
                </div>
            </div>
            </button>
            <ul class="dropdown-menu">
                <li><a href="user_setting.php">Account</a></li>
                <li> 
                    <div>
                        <form action="logout.php" method="post">
                            <button type="submit" name="logout" class="btn btn-danger">Log out</button>
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
    <div class="card" style="width: 18rem;">
        
        <img src="product-images/<?php echo $row['image_file']?>" class="card-img-top" alt="...">

        
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['product_name']?></h5>
            <p class="card-text"><?php echo $row['price']?></p>
            <a href="#" class="btn btn-primary">View more samples</a>
        </div>
    </div>
    <?php }?>
</div>
</body>
</html>