<?php

include 'db.php';
if($conn) 
    {
        echo "Database Connected successfully!";
    }



if(isset($_POST['submit']))
    {
      
      $customerName = $_POST['customerName'];
      $userName = $_POST['userName'];
      $password = $_POST['password'];
      $d_date = $_POST['D_date'];

      //hasing password
      $password_hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO customer(userName, customer_name, date_of_brith, password_hash)
            VALUES (?, ?, ?, ?)";

      $stmt = mysqli_prepare($conn, $sql);

      mysqli_stmt_bind_param($stmt, "ssss", $userName, $customerName, $d_date, $password_hash);

      mysqli_stmt_execute($stmt);
    }

?>