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
      $password_hash = $_POST['password_hash'];
      $d_date = $_POST['D_date'];

      $sql = "INSERT INTO customer(userName, customer_name, date_of_brith, password_hash)
            VALUES ('$userName', '$customerName', '$d_date', '$password_hash')";

      $result = mysqli_query($conn, $sql);

    }

?>