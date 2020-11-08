<?php
    $servername='localhost';
    $username='root';
    $dbname = "test";
    $conn=mysqli_connect("localhost","root","","test");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>