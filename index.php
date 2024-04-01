<?php
session_start();

if(isset($_SESSION["login"])){
  header("Location: ./home/");
  exit;
}

require './myfun.php';

if(isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $hasil = mysqli_query($conn, "SELECT *FROM users WHERE username = '$username'");

  // cek username terdaftar
  if(mysqli_num_rows($hasil) == 1){
    // cek password terdaftar
    $row = mysqli_fetch_assoc($hasil);
    if(password_verify($password, $row["password"])){
    // if($password == $row['password']){
      // Set Session
      $_SESSION["login"] = true;
      header("Location: ./home/");
      exit;
    }
  }
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aston Serve</title>
    <link rel="Icon" href="/img/astonservelogo.png" type="image/x-icon" />
    <style>
      * {
        padding: 0;
        margin: 0;
        border: none;
        text-decoration: none;
      }
      body {
        background-color: #081c2b;
        color: #fff;
      }
      .container1 {
        display: flex;
        margin: 50px auto;
        align-items: center;
        padding: 100px 100px 85px 100px;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url(./img/logbg.jpg);
        width: 1000px;
        border-radius: 10px;
        box-shadow: 5px 5px 50px -10px #0091FF;
      }
      .konten1 img {
        height: 300px;
        width: 500px;
        border-radius: 10px;
        box-shadow: 5px 5px 50px -10px #fff;
      }
      .konten2 {
        background-color: #fff;
        border-radius: 10px;
        margin: 0 0 0 50px;
        box-shadow: 5px 5px 50px -10px #fff;
        /* height: 500px; */
      }
      .isikonten2 {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .isikonten2 img {
        height: 150px;
        margin: 10px auto;
      }
      .login li {
        list-style-type: none;
        margin: 10px 5px;
      }
      .login input {
        padding: 7px 0;
        border-radius: 3px;
        background-color: #eee;
      }
      .login input[type="text"],
      .login input[type="password"] {
        padding: 10px;
      }
      .login button{
        padding: 9px 0;
        margin: 10px 5px;
        width: 315px;
        border-radius: 3px;
        background-color: #081c2b;
      }
      .login button[type="submit"]{
        color: #fff;
        font-weight: 600;
        cursor: pointer;
      }
      .login button[type="submit"]:hover{
        background-color: #14466C;
      }
      .login .data1 p{
        color: #010101;
        margin: 25px 0 10px 0;
        text-align: center;
      }
      .login .data1 a{
        color: #0091FF;
        font-weight: 500;
      }
      .login .data1 a:hover{
        color: #14466C;
      }
      .credit p{
        color: #ccc;
        font-size: 10px;
        text-align: center;
        margin-bottom: 5px;
      }
      .credit a{
        color: #fff;
      }
      .credit a:hover{
        color: #0091FF;
      }

    </style>
  </head>
  <body>

    <?php 
      if(isset($error)){
        echo "<script>
                alert('Terjadi Kesalahan saat login');
        </script>";
      }
    ?>
          
    <section class="container">
      <div class="container1">
        <div class="konten1">
          <img src="./img/logbg.jpg" alt="img1" />
        </div>
        <div class="konten2">
          <div class="isikonten2">
            <img src="./img/astonservelogo.png" alt="img1" />
            <div class="login">
              <form action="" method="post">
                <ul>
                  <li>
                    <input
                      type="text"
                      placeholder="Username"
                      name="username"
                      id="username"
                      size="40"
                      required
                    />
                  </li>
                  <li>
                    <input
                      type="password"
                      placeholder="Password"
                      name="password"
                      id="password"
                      size="40"
                      required
                    />
                  </li>
                  <button type="submit" name="login">Log in</button>
                </ul>
              </form>
              <div class="data1">
                <p>Don't have an Account? <a href="./register/">Sign Up</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="credit">
        <p>&copy; Copyright 2024 by <a href="#">Jhon V Nababan</a></p>
      </div>
    </footer>
  </body>
</html>
