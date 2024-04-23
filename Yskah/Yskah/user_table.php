<?php 
include_once "connection.php";
$result = mysqli_query($conn, "SELECT * from user_table");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Table</title>
    <link rel="stylesheet" href="user_table.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
<?php
          if (mysqli_num_rows($result) > 0) {
    ?>


    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Sex</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
        </tr>

        <?php
            $i=0;   
            while ($row = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row["first_name"]; ?> </td>
            <td><?php echo $row["last_name"]; ?>  </td>
            <td> <?php echo $row['sex']; ?> </td>
            <td> <?php echo $row["phone"]; ?> </td>
            <td><?php echo $row["address"]; ?>  </td>
            <td><?php echo $row["username"]; ?>  </td>
            <td><?php echo $row["password"]; ?>  </td>
            <td><a href='update.php?id=<?php echo $row['id']; ?> '>Update</a> 
            <a href='delete.php?id=<?php echo $row['id']; ?> '>Delete</a></td>
        </tr>

        <?php
            $i++;
                }
        ?>
    </thead>
  </table>
  <?php
    } else {
        echo 'No result found';
    }
    ?>   
</body>
</html>

