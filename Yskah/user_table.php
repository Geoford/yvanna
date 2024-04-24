<?php 
include_once "connection.php";
include("sessionchecker.php");
$result = mysqli_query($conn, "SELECT * from user_table");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="css\landing_page.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css\bootstrap.min.css">
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

        <div class="buttons"><i class='bx bx-home-alt'></i><a href="admin.php">Home</a></div>
    <div class="buttons"><i class='bx bx-shopping-bag' ></i><a href="admin-products.php">Products</a></div>
    <div class="buttons active"><i class='bx bx-cart' ></i><a href="user_table.php">Users</a></div>
    
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
    <?php
          if (mysqli_num_rows($result) > 0) {
    ?>
    <div class="d-flex align-items-center justify-content-center" style="height: 80dvh">
    <div class="table-responsive " style="width: 90%">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;   
                while ($row = mysqli_fetch_array($result)) {
                ?>
            
            <tr>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row["first_name"]; ?> </td>
                <td> <?php echo $row["last_name"]; ?> </td>
                <td> <?php echo $row["username"]; ?> </td>
                <td><?php echo $row["phone"]; ?>  </td>
                <td><?php echo $row["email"]; ?>  </td>
                <td><a href='update.php?id=<?php echo $row['id']; ?> '>Update</a> 
                <a href='delete.php?id=<?php echo $row['id']; ?> '>Delete</a></td>
            </tr>
                <?php
                $i++;
                    }
                ?>
                </tbody>
        </table>
    </div>
    </div>
    <?php
    } else {
        echo 'No result found';
    }
    ?>    
</body>
</html>