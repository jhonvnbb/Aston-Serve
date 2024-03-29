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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="Icon" href="/img/astonservelogo.png" type="image/x-icon" />

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS-5 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>User Profil</title>

    <!-- CSS -->
    <style>
      * {
        border: none;
        margin: 0;
        padding: 0;
        color: #ededed;
      }
      /* Navbar Start */
      .navbar {
        border-bottom: 1px solid #ededed;
        background-color: #081c2b;
        padding: 10px;
      }
      /* Navbar End */

      /* Section Start */
      .konten {
        margin: 15px 0 0 0;
      }
      .konten .konten1 h1 {
        font-size: 20px;
      }
      .konten .konten1 i {
        font-weight: 100;
        color: #aaa;
        font-size: 14px;
      }
      .konten .konten1 p {
        font-weight: 600;
      }
      .konten .konten2 li {
        color: #ccc;
        font-size: 12px;
      }
      /* Section End */
    </style>
  </head>
  <body style="background-color: #081c2b">
    <!-- Navbar Start -->
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-4" style="background-color: #ccc">
        <h5 class="text-dark h4">Hello jhonvnbb</h5>
        <span class="text-muted">&copy;2024 Aston-Serve, inc.</span><br />
        <a href="../home/" style="text-decoration: none; color: #081c2b"
          >Home</a
        >
      </div>
    </div>
    <nav class="navbar navbar-dark">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarToggleExternalContent"
          aria-controls="navbarToggleExternalContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Section Start -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-4">
          <div
            class="card"
            style="
              width: 250px;
              margin-top: 50px;
              background-color: rgba(0, 0, 0, 0);
              box-shadow: 5px 5px 50px -10px #ccc;
            "
          >
            <img
              src="../img/WhatsApp Image 2024-03-10 at 07.41.18_5a43802b.jpg"
              class="card-img-top"
              alt="pp"
              style="border-radius: 100%"
            />
            <div class="card-body">
              <p class="card-text" style="text-align: center; color: #fff">
                jhonvnbb
              </p>
            </div>
          </div>
          <div class="konten">
            <div class="konten1">
              <h1>JHON V NABABAN</h1>
              <i>tinonababan3@gmail.com</i>
              <ul class="konten2">
                <li>A Student .</li>
                <li>081375839812</li>
                <li>
                  Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng,
                  Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141
                </li>
              </ul>
            </div>
            <!-- <div class="konten2">
              <a href="#"><i data-feather="github"></i></a>
              <a href="#"><i data-feather="instagram"></i></a>
            </div> -->
          </div>
        </div>

        <div class="col-4" style="margin-top: 15px">
          <p>Riwayat Pemesanan</p>
          <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header" style="color: #010101">Suite Rooms</div>
            <div class="card-body text-primary">
              <h5 class="card-title" style="color: #010101">2.000.000 IDR</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias beatae nesciunt, ipsum atque sed nisi.
              </p>
            </div>
          </div>

          <!-- <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div> -->

          <!-- <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div> -->
        </div>

        <div class="col-4" style="margin-top: 15px">
          <!-- <p>Status Pemesanan</p>
          <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Suite Rooms</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div> -->

          <!-- <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div> -->

          <!-- <div
            class="card border-primary"
            style="max-width: 25rem; margin: 10px 0"
          >
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
              <h5 class="card-title">Primary card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- Section End -->
    <!-- JS-5 -->
    <script
      feather.replace();
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
