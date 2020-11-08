<?php

$host= "localhost";
$user= "root";
$password= "";
$db= "demo";

$conn= mysqli_connect ($host, $user, $password,);
$conn= mysqli_select_db($conn,$db);

        if (isset($_POST['username'])){
                
        $uname = $_POST['username'];
        $password = $_POST['password'];
        
 $sql = "SELECT * FROM login form WHERE User='".$uname."' AND Pass='".$password."' limit 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows ($result)){
			echo "You have successfull login";
			exit();
		}
			else{
			echo "You have entered incorrect password";
			exit();
		} 
		}
   ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" a href="style.css"/>

</head>
<body>
<div>
<h2><center></center></h2>

<form action="Reg.php" method="post">
  <div class="imgcontainer">
  <h2><center>St Agnes Registration System</center></h2>
    <img src="images/avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit" value="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
