<?php
    // include("sessionchecker.php");
    include("connection.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\index-products.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script defer src="js\bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="navi-bar">
    <div class="navi-items">
        <div class="logo_search">
            <div class="logo"><a href="index.php"><img src="LOGO.png"></a></div>
        </div>
        <div class="navi-btn">
            <div class="buttons "><i class='bx bx-home-alt'></i><a href="index.php">Home</a></div>
            <div class="buttons active"><i class='bx bx-shopping-bag' ></i><a href="index-products.php">Products</a></div>
            <!-- <div class="buttons"><i class='bx bx-cart' ></i><a href="#">Cart</a></div> -->
            <div class="buttons"><i class='bx bx-phone'></i><a href="#">About Us</a></div>
        </div>
        <div class="user">
            <div class="name">
                <a href="login_form.php"><p>Log in</p></a>
            </div>
            <div class="photo">
                  <img src="img\default-profile.jpg" alt="">
            </div>
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
            <p class="card-text"><p>Php <?php echo $row['price']?>.00</p></p>
            <a href="#" class="btn btn-primary">View more samples</a>
        </div>
    </div>
    <?php }?>
</div>
</body>
</html>