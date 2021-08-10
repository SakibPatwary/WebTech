<?php
include "includes/db_connect.inc.php";
session_start();
$uPass = $uName = $message = "";

/* mysqli_real_escape_string() helps prevent sql injection */
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['lusername'])){

        $uName = mysqli_real_escape_string($conn, $_POST['lusername']);
    }
    
    if(!empty($_POST['lpassword'])){
        $uPass = mysqli_real_escape_string($conn, $_POST['lpassword']);
    }
    // echo $uPass;
    // exit();
    $sqlUserCheck = "SELECT username, passwored FROM user WHERE username = '$uName'";
    $result = mysqli_query($conn, $sqlUserCheck);
    $rowCount = mysqli_num_rows($result);

    if($rowCount < 1){
        $message = "User does not exist!";
    }
    else{
        while($row = mysqli_fetch_assoc($result)){
            $uPassInDB = $row['passwored'];

            $uNameInDB= $row['username'];

            if($uPassInDB== $uPass){
                $_SESSION['username'] = $uName;
                header("Location: dashboard.php");
            }
            else{
                $message = "Wrong Password!";
            }
        }
    }
  }

  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Design/login.css">
  <title>
  </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="login-page">
  <div class="form">
    <img src="../img/logo.png" class="logo"> <br>
    <form class="register-form">
      <br>
      <input type="text" placeholder="name" id="name"/>
      <input type="text" placeholder="user name" id="username" />
      <input type="text" placeholder="phone" id="phone"/>
      <input type="text" placeholder="email address" id="email"/>p
      <input type="password" placeholder="password" id="password"/>
      <input type="text" placeholder="confirm password" id="confirmpassword" />
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="index.php" method="post">
      <input type="text" placeholder="username" name="lusername" id="lusername"/>
      <input type="password" placeholder="password" name="lpassword" id="lpassword"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>

</body>
</html>

  <script src="../JavaScript/index.js"></script>