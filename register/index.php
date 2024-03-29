<?php

require '../myfun.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
                alert('Anda berhasil melakukan registrasi!');
        </script>";
    } else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            border: none;
            text-decoration: none;
        }
        body {
            font-family: sans-serif;
            background-color: #081c2b;
            color: #fff;
        }
        .container {
            max-width: 350px;
            margin: 50px auto;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            color: #010101;
            border-radius: 5px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }
        .container img{
            height: 150px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="text"],
        input[type="password"] {
            padding: 7px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            width: 350px;
        }
        .info p{
            text-align: center;
            font-size: 12px;
            margin: 10px 0 15px 0;
        }
        button[type="submit"] {
            width: 350px;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .konten{
            margin: 21px 0 10px 0;
        }
        .konten p{
            font-weight: 600;
        }
        .konten a{
            color: #0091FF;
        }
        .konten a:hover{
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
    <div class="container">
        <img src="../img/astonservelogo.png" alt="logo">
        <form action="" method="post">
            <label for="mail">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <label for="konfirmasipw">Konfirmasi Password</label>
            <input type="password" name="konfirmasipw" id="konfirmasipw" required>

            <div class="info">
                <p>By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .</p>
            </div>
            <button type="submit" name="register">Sign up</button>
        </form>
        <div class="konten">
            <p>Have an account? <a href="../index.php">Log in</a></p>
        </div>
    </div>

    <footer>
      <div class="credit">
        <p>&copy; Copyright 2024 by <a href="#">Jhon V Nababan</a></p>
      </div>
    </footer>
</body>
</html>
