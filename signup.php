<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Mahesh institude</title>
</head>
<style>
.k1 {
    margin-left:40%;
    margin-right:20%;
    margin-top:5%;
    background-color: beige;
}
</style>
<body>
    <div class="k1">
    <h2>Register Account</h2>
<form method="POST" action="register_ajax.php">
<label for="name">Name</label><br>
    <input type="text" id="name" name="Name"> <br>
    <label for="email">Email</label><br>
    <input type="email" id="email" name="dluser_email"><br>
    <label for="password">Password<br>
    <input type="Password" id="Password" name="dluser_password"><br>
    <!-- <label for="password">Confirm Password<br>
    <input type="Password" id="Password" name="dluser_conpassword">-->
    <br><br> 
    <!-- <input type="submit" button="Register Account"> -->
    <button type="submit">Sign up</button><br><br>
    <p>Already have an account signin <p>
</form><br><br>
<div class="container">
    
</div>
</div>
</body>
</html>