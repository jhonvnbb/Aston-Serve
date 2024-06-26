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

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <title>AstonServe Home</title>

    <!-- CSS -->
    <style>
      /* Navbar Start */
      .navbar-lg {
        padding: 10px;
        font-size: 20px;
        font-weight: 700;
        border-bottom: 2px solid #ededed;
      }
      .navbar-nav .nav-link:hover {
        color: #ededed;
        background-color: rgb(255, 255, 255, 0.1);
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }
      /* Navbar End */

      /* Carousel Start */
      .carousel-caption {
        background-color: rgb(0, 0, 0, 0.4);
      }
      /* Carousel End */

      /* Main Start */
      .container a {
        color: #ededed;
        text-decoration: none;
        align-items: center;
        justify-content: center;
        display: flex;
        margin: 50px;
        font-size: 30px;
        font-weight: 700;
      }
      /* Main End */

      /* Footer Start */
      footer {
        padding: 0 5px;
        text-align: center;
      }
      footer .credit {
        font-size: 10px;
        color: #ccc;
      }

      footer .credit a {
        text-decoration: none;
        margin: 5px;
        color: #ededed;
      }
      /* Footer End */
    </style>
  </head>
  <body style="background-color: #081c2b">
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg navbar-dark sticky-top navbar-lg"
      style="background-color: #081c2b"
    >
      <div class="container-fluid">
        <a class="navbar-brand" href="../home/">AstonServe✤</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../home/"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="nav-item">
                  <a class="dropdown-item" href="../profil/">My Account</a>
                </li>
                <li class="nav-item">
                  <a
                    class="dropdown-item"
                    style="color: red"
                    href="../logout.php"
                    onclick="return confirm('Apakah anda yakin ingin keluar?');"
                    ><i data-feather="log-out"></i> Log out</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                ShowRoom
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#suiterooms">Suite Rooms</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#deluxerooms">Deluxe Rooms</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#presidentialsuites"
                    >Presidential Suites</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#singlerooms">Single Rooms</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#twinrooms">Twin Rooms</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#juniorsuites"
                    >Junior Suites</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div
      id="carouselExampleCaptions"
      class="carousel slide bg-dark"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="4"
          aria-label="Slide 5"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="5"
          aria-label="Slide 6"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../img/b1.jpg"
            class="d-block w-100"
            alt="IMG-1"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>🍀🌼Suite Rooms</h5>
            <p>"Harga Terbaik untuk Kamar Berkelas🥀🥀🥀"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/b2.webp"
            class="d-block w-100"
            alt="IMG-2"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>Deluxe Rooms🍀🌼</h5>
            <p>"Hemat Besar, Nikmati Kemewahan🥀🥀🥀"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/b3.jpg"
            class="d-block w-100"
            alt="IMG-3"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>🍀🌼Presidential Suites</h5>
            <p>"Biaya Terjangkau untuk Kamar Berkualitas Tinggi🥀🥀🥀"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/b4.webp"
            class="d-block w-100"
            alt="IMG-4"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>Single Rooms🍀🌼</h5>
            <p>"Harga Spesial untuk Kenyamanan Tak Tertandingi🥀🥀🥀"</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/b5.jpg"
            class="d-block w-100"
            alt="IMG-5"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>🍀🌼Twin Rooms</h5>
            <p>
              "Hemat Lebih, Nikmati Pengalaman Hotel yang Tak Tergantikan🥀🥀🥀"
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="../img/b6.jpg"
            class="d-block w-100"
            alt="IMG-6"
            style="height: 500px"
          />
          <div class="carousel-caption">
            <h5>Junior Suites🍀🌼</h5>
            <p>"Tarif Istimewa untuk Kamar Eksklusif🥀🥀🥀"</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Carousel End -->

    <!-- Deskripsi Start -->
    <div class="col-12">
      <div
        class="card"
        style="display: flex; flex-direction: row; align-items: center"
      >
        <img
          src="../img/astonservelogo.png"
          alt="Room1"
          style="
            width: 250px;
            height: 160px;
            padding-left: 50px;
            border-left: 5px solid #12785d;
            margin: 0 20px 0 50px;
          "
        />
        <div style="max-width: 750px">
          <h2>Inspirasi, inovasi, integritas - Aston Serve✤</h2>
          <h6>
            📍Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Kec.
            Rajabasa, Kota Bandar Lampung, Lampung 35141
          </h6>
        </div>
      </div>
    </div>
    <!-- Deskripsi End -->

    <!-- Main Start -->
    <div class="container mt-4">
      <a href="#Room" id="Room">Daftar Kamar</a>

      <!-- Main Start 1 & 2 -->
      <div class="row align-items-center">
        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            id="suiterooms"
            style="width: 500px; max-height: 100%; margin-left: 50px"
          >
            <img
              src="../img/b1.jpg"
              class="card-img-top"
              alt="Room1"
              style="width: 100%; height: 100%; object-fit: cover"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Suite Rooms</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Bagi mereka yang bepergian dalam kelompok besar, akan merepotkan
                untuk mencari kamar dan memesan semuanya secara terpisah,
                terutama jika mereka ingin tinggal berdekatan. Sebuah suite
                terdiri dari beberapa kamar yang semuanya dihubungkan oleh ruang
                tamu bersama. Hal ini memungkinkan sekelompok orang untuk
                memiliki ruang pribadi dan tempat tinggal terpisah tanpa harus
                melintasi hotel ke beberapa kamar untuk merencanakan sesuatu
                atau bahkan sekadar nongkrong. Selain semua fasilitas dasar,
                suite sering kali juga mencakup dapur kecil, meja makan, tempat
                tidur sofa, TV, dan kamar mandi pribadi untuk setiap tamu.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">5 Kamar Tidur</li>
                <li class="list-group-item">Ruang Tamu</li>
                <li class="list-group-item">Balkon</li>
                <li class="list-group-item">Ruang Makan</li>
                <li class="list-group-item">Dapur</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p class="card-text">2.000.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            style="
              width: 500px;
              max-height: 100%;
              object-fit: cover;
              margin-right: 50px;
            "
            id="deluxerooms"
          >
            <img
              src="../img/b2.webp"
              class="card-img-top"
              alt="Room2"
              style="width: 100%; height: 100%"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Deluxe Rooms</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Kamar deluxe adalah salah satu pilihan paling populer bagi tamu
                yang menginap di hotel bintang 5 karena menawarkan kenyamanan
                dan fasilitas tanpa terlalu berlebihan atau mahal. Tempat ini
                memiliki setidaknya dua tempat tidur yang dapat menampung hingga
                empat orang sehingga sangat cocok untuk mereka yang bepergian
                dalam kelompok atau keluarga kecil. Ruang tamu juga disediakan
                yang mencakup meja dan kursi serta pembuat teh dan kopi dengan
                perlengkapan yang cukup. Minibar juga dapat disertakan. Kamar
                Deluxe mirip dengan kamar double tetapi lebih luas dan umumnya
                memiliki lebih banyak fasilitas dan furnitur berkualitas lebih
                tinggi.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Best View</li>
                <li class="list-group-item">Ruang Tamu</li>
                <li class="list-group-item">Layanan Kamar 24 jam</li>
                <li class="list-group-item">Minibar</li>
                <li class="list-group-item">Area Kerja</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p>1.750.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Main End 1 & 2 -->

      <!-- Main Start 3 & 4 -->
      <div class="row align-items-center" style="margin: 75px 0">
        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            id="presidentialsuites"
            style="max-width: 500px; max-height: 100%; margin-left: 50px"
          >
            <img
              src="../img/b3.jpg"
              class="card-img-top"
              alt="Room1"
              style="width: 100%; height: 280px; object-fit: cover"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Presidential Suites</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Kamar presidensial atau eksekutif menekankan kenyamanan dan
                kemewahan di atas segalanya dan sering kali merupakan kamar
                termahal di hotel bintang 5. Kamar memiliki lebih banyak ruang,
                dekorasi yang lebih bagus, serta fasilitas dan layanan yang
                lebih banyak dibandingkan suite biasa. Selain itu, ini mencakup
                fasilitas dan layanan tambahan yang memberikan pengalaman lebih
                baik dan nyaman, seperti meja kerja besar, bak mandi air panas,
                perapian, dapur persiapan, ruang kebugaran, kolam renang
                pribadi, dan layanan 24/7. Keamanan di dalam dan sekitar ruangan
                ini seringkali ditingkatkan karena tamu yang memesannya mungkin
                adalah tokoh masyarakat terkemuka.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Interior Mewah</li>
                <li class="list-group-item">Layanan Butler</li>
                <li class="list-group-item">Fasilitas Eksklusif</li>
                <li class="list-group-item">Ruang Tamu</li>
                <li class="list-group-item">Best View</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p class="card-text">3.050.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            style="
              width: 500px;
              max-height: 100%;
              object-fit: cover;
              margin-right: 50px;
            "
            id="singlerooms"
          >
            <img
              src="../img/b4.webp"
              class="card-img-top"
              alt="Room2"
              style="width: 100%; height: 100%"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Single Rooms</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Salah satu jenis kamar yang paling umum di hotel mana pun.
                Biasanya, ini berarti ruangan tersebut memiliki satu tempat
                tidur yang diperuntukkan bagi satu orang atau pasangan, namun
                tidak berarti ruangan tersebut kecil. Faktanya, beberapa hotel
                mungkin menawarkan kamar yang lebih besar dibandingkan hotel
                lainnya, bergantung pada ukuran hotel itu sendiri. Tamu yang
                bepergian sendiri atau untuk urusan bisnis biasanya menempati
                kamar single jika mereka memerlukan akomodasi jangka pendek dan
                tidak membutuhkan banyak ruang tambahan. Mereka biasanya
                sendirian di dalam kamar dan menggunakan ruang tersebut terutama
                untuk tujuan tidur dan bersiap-siap untuk pergi keluar.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">TV - Internet Access</li>
                <li class="list-group-item">Kamar Mandi</li>
                <li class="list-group-item">Mini Bar</li>
                <li class="list-group-item">Area Duduk</li>
                <li class="list-group-item">Tempat Tidur</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p>1.000.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Main End 3 & 4 -->

      <!-- Main Start 5 & 6 -->
      <div class="row align-items-center" style="margin: 75px 0">
        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            id="twinrooms"
            style="width: 500px; max-height: 100%; margin-left: 50px"
          >
            <img
              src="../img/b5.jpg"
              class="card-img-top"
              alt="Room1"
              style="width: 100%; height: 281px; object-fit: cover"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Twin Rooms</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Kamar twin berisi dua tempat tidur dalam satu ruangan,
                perbedaannya berkaitan dengan ukuran tempat tidur dan jumlah
                tamu yang dapat menginap di kamar tersebut. Kamar twin berisi
                dua tempat tidur single, sehingga diperuntukkan bagi maksimal
                dua tamu. Namun, kamar double dapat menampung hingga empat orang
                karena berisi dua tempat tidur berukuran double. Keduanya berisi
                semua akomodasi dasar yang Anda harapkan temukan di kamar hotel.
                Kamar seringkali lebih baik bagi mereka yang bepergian dengan
                teman atau mitra bisnis, dan kamar twin lebih baik untuk
                keluarga dengan satu atau dua anak kecil atau kelompok lain
                dengan 3-4 orang yang bepergian bersama.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">2 Kamar Tidur</li>
                <li class="list-group-item">Area Duduk</li>
                <li class="list-group-item">Akses Fasilitas Hotel</li>
                <li class="list-group-item">Fasilitas Tambahan</li>
                <li class="list-group-item">Mini Bar</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p class="card-text">1.850.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>

        <div
          class="col-6"
          style="align-items: center; justify-content: center; display: flex"
        >
          <div
            class="card"
            style="
              width: 500px;
              max-height: 100%;
              object-fit: cover;
              margin-right: 50px;
            "
            id="juniorsuites"
          >
            <img
              src="../img/b6.jpg"
              class="card-img-top"
              alt="Room2"
              style="width: 100%; height: 100%"
            />
            <div class="card-body text-center">
              <h5 class="card-title">Junior Suites</h5>
              <h6>Deskripsi</h6>
              <p class="card-text" style="text-align: justify">
                Junior suite berukuran lebih kecil dari suite biasa karena tidak
                memiliki pemisah yang kokoh antara kamar tidur dan ruang tamu,
                seperti setengah dinding. Suite ini memiliki ruang tamu kecil
                yang memanjang dari ruang kamar tidur. Selain itu, kamar-kamar
                ini biasanya menawarkan sofa dan bathtub yang lebih besar di
                kamar mandi. Junior suites adalah kamar hotel yang biasanya
                lebih besar daripada kamar standar, tetapi lebih kecil daripada
                suite yang lebih besar seperti Presidential Suite. Junior suites
                biasanya dirancang untuk memberikan lebih banyak ruang dan
                kenyamanan kepada tamu daripada kamar standar, tetapi dengan
                harga yang lebih terjangkau daripada suite yang lebih besar.
              </p>
              <h6>Fasilitas</h6>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Fasilitas Tambahan</li>
                <li class="list-group-item">Ruangan Lebih Besar</li>
                <li class="list-group-item">Tempat Tidur</li>
                <li class="list-group-item">Area Duduk</li>
                <li class="list-group-item">Kamar Mandi Lebih Besar</li>
              </ul>
              <h6 class="mt-3">Harga</h6>
              <p>2.050.000 IDR/malam</p>
              <a href="../payment/" class="btn btn-primary">Pesan Sekarang</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Main End 5 & 6 -->
    </div>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer>
      <div class="credit">
        <p>
          Created by
          <a href="https://github.com/jhonvnbb"><i>Jhon V Nababan</i></a> |
          &copy;2024.
        </p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Feater Icon -->
    <script>
      feather.replace();
    </script>

    <!-- Bootstrap JavaScript -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
