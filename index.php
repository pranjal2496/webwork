<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "tutor";

session_start();

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
  die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];


  $sql = "select * from users where username='" . $username . "' AND password='" . $password . "'";

  $result = mysqli_query($data, $sql);

  $row = mysqli_fetch_array($result);

  if ($row["usertype"] == "user") {
    $_SESSION["username"] = $username;
    header("location:queenzend.php");
  } elseif ($row["usertype"] == "superadmin") {
    $_SESSION["username"] = $username;
    header("location:coderlab.php");
  } elseif ($row["usertype"] == "admin") {
    $_SESSION["username"] = $username;
    header("location:ring.php");
  } else {
    echo "username or password incorrect";
  }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Redirecting using location methods</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="r5https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

  <div class="container-fluid" style="overflow: hidden;">
    <div class="row">
      <div class="col-sm-6 " style="margin-top: 15%;">
        <center>


          <div style="width: 75%;">
            <h1 class="text-center"><b>LOGIN</b></h1>
            <div style="margin-top: 10%;"></div>

            <form action="#" method="POST">

              <div class="p-2 g-col-6">
                <div class="col-sm-10 input-group flex-nowrap" style="width: 45vh;">
                  <span class="input-group-text" id="error" style="color: rgb(9, 8, 8);"><i
                      class="bi bi-person material-icon white" style="color:white;"></i></span>
                  <input style="width: 100%;" placeholder="Username" type="text" id="username"
                    class="form-control form-control-lg" name="username" aria-label="Username" required>
                </div>
              </div>


              <div class="p-2 g-col-6">
                <div class="col-sm-10 input-group flex-nowrap" style="width: 45vh;">
                  <span class="input-group-text" id="error1" style="color: rgb(11, 10, 10);"><i
                      class="bi bi-lock material-icon white" style="color:white;"></i></span>
                  <input placeholder="Password" type="password" id="password" class="form-control form-control-lg"
                    name="password" aria-label="Password" aria-describedby="addon-wrapping" required>
                </div>
              </div>


              <div class="row button-wrapper p-1 g-col-12" style="width: 380px; margin-top: 5%;">
                <button type="submit" value="Login" style="height: 30px;"
                  class="btn btn-primary form-control form-control-lg">Login Now</button>
              </div>

              <div class="grid gap-0 row-gap-3" style="margin-left: 5%; margin-top: 8%;">
                <p class="">
                <h6><a class="link-secondary link-underline-opacity-0">Don't have an account?</a><a
                    class=" link-underline-opacity-0"> Sign up</a></h6>
                </p>
              </div>

            </form>


          </div>


        </center>
      </div>


      <div class="col-sm-6">
        <div class="container">
          <img src="Image/bgImg.png" style="width: 100%;height: 100vh;">
          <div class="centered">
            <h1><b>Hi,</b></h1>
            <div>
              <h1 class="b"><b>WELCOME!</b></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@Login.com</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script scr="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>

<script src="script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


</html>