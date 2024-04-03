<?php
session_start();

if(!isset($_SESSION["login"])){
    echo "<script>
            alert('Silahkan login terlebih dahulu');
            window.location.href = '../';
    </script>";
    exit;
}

require '../myfun.php';

if(isset($_POST["paymentbutton"])){
  
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="Icon" href="/img/astonservelogo.png" type="image/x-icon" />

    <title>Payment AstonServe</title>

    <!-- CSS-5 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.css"
    />
    <style>
      body {
        background-color: #081c2b;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: #fff;
      }
      .container {
        max-width: 500px;
        margin: 35px auto;
        padding: 20px;
        background-color: #081c2b;
        border: 1px solid #ededed;
        border-radius: 8px;
      }
      h1 {
        text-align: center;
        color: #ededed;
      }
      .input-group {
        position: relative;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
      }
      .input-group i {
        position: absolute;
        left: 10px;
        color: #ccc;
      }
      .input-group input,
      .input-group select {
        width: calc(100% - 30px);
        padding: 10px;
        padding-left: 30px;
        border-radius: 5px;
        border: 1px solid #ccc;
        transition: border-color 0.3s ease;
        color: #333;
        margin-left: 20px;
      }
      .input-group input:focus,
      .input-group select:focus {
        border-color: #66afe9;
        outline: none;
      }
      .btn-primary {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
      }
      .btn-primary:hover {
        background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Payment AstonServe</h1>
      <form action="" method="post">
        <div class="input-group">
          <i data-feather="user"></i>
          <input
            type="text"
            placeholder="Username"
            id="Nama"
            name="Nama"
            required
          />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input
            type="email"
            placeholder="Email"
            id="Email"
            name="Email"
            required
          />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input
            type="tel"
            placeholder="No HP"
            id="No_HP"
            name="No_HP"
            required
          />
        </div>
        <div class="input-group">
          <i data-feather="lock"></i>
          <input
            type="password"
            placeholder="Password"
            id="password"
            name="password"
            required
          />
        </div>
        <div class="input-group">
          <i data-feather="calendar"></i>
          <input type="date" id="date" name="date" required />
        </div>
        <div class="input-group">
          <i data-feather="box"></i>
          <select id="daftarroom" name="daftarroom" onchange="checkValue()">
            <option value="0" selected disabled>Show Room</option>
            <option value="2000000">Suite Rooms - 2.000.000 IDR</option>
            <option value="1750000">Deluxe Rooms - 1.750.000 IDR</option>
            <option value="3050000">Presidential Suites - 3.050.000 IDR</option>
            <option value="1000000">Single Rooms - 1.000.000 IDR</option>
            <option value="1850000">Twin Rooms - 1.850.000 IDR</option>
            <option value="2050000">Junior Suites - 2.050.000 IDR</option>
          </select>
        </div>
        <p style="font-size: small">
          <strong>DANA : </strong>081375839812 <br />
          a.n
          <i style="color: #ccc; font-weight: 800">JHON VALENTINO NABABAN</i>
        </p>
        <div class="input-group">
          <i data-feather="file"></i>
          <input
            type="file"
            id="formFile"
            name="formFile"
            style="background-color: #fff"
            required
          />
        </div>
        <button type="submit" class="btn-primary" id="paymentbutton" name="paymentbutton" disabled>
          <span>Confirm Payment</span>
        </button>
      </form>
    </div>
    <p style="text-align: center; font-size: 12px; margin-top: 20px">
      ⚠️⚠️ Silahkan lakukan pembayaran sesuai nominal kamarnya dan silahkan
      upload bukti pembayaran
    </p>

    <!-- JS-5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script>
      feather.replace();
      // Javascript buat ngatur submit enable or disable
      function checkValue() {
        var selectValue = document.getElementById("daftarroom").value;
        var sendButton = document.getElementById("paymentbutton");
        if (selectValue != 0) {
          sendButton.removeAttribute("disabled");
        } else {
          sendButton.setAttribute("disabled", "disabled");
        }
      }
    </script>
  </body>
</html>
