<?php
    include("sessionchecker.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\landing_page.css">
    <script defer src="js\bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="navi-bar">

        <div class="navi-items">
            <div class="logo_search">
                <div class="logo"><a href="admin.php"><img src="LOGO.png"></a></div>

                <!-- <div class="search">
    
                    <i class='bx bx-search-alt'></i>
                    <input type="text" placeholder="Search">
                </div> -->
                

            </div>
          
            <div class="navi-btn">

            <div class="buttons active"><i class='bx bx-home-alt'></i><a href="#">Home</a></div>
            <div class="buttons"><i class='bx bx-shopping-bag' ></i><a href="admin-products.php">Products</a></div>
            <div class="buttons"><i class='bx bx-cart' ></i><a href="user_table.php">Users</a></div>
            
            </div>
            <!-- Large button groups (default and split) -->
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
                <li><a href="user_setting.html">Account</a></li>

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
<div class="grade">
  <div class="intro">
    <h1>Introduction</h1>
    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus eveniet dolore excepturi incidunt, amet quasi fugit animi perspiciatis quisquam molestias.</h3>
  </div>
  <div class="btn">
    <button><a href="">Order Now</a></button>
  </div>
  
</div>
<div class="main-body">
  <div class="home_photo">
   
    <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel" >
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img\homepic1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img\homepic2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\homepic3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img\homepic4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>
</div>



        </div>

        <div class="hot-product"></div>

    </div>
            

        </div>
    </div>

   


</body>
</html>