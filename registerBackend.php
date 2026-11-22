<?php

include 'db.php';
if($conn) 
    {
        echo "Database Connected successfully!";
    }



if(isset($_POST['submit']))
    {
      
      $s_name = $_POST['S_name'];
      $d_date = $_POST['D_date'];

      $sql = "INSERT INTO table_a(S_NAME, J_date)
            VALUES ('$s_name', '$d_date')";

      $result = mysqli_query($conn, $sql);

    }

?>