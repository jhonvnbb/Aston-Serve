<?php

// koneksi database
$conn = mysqli_connect("localhost", "jhonvnababan", "jaqsibala19", "astonserve");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// fungsi registrasi
function registrasi($data){
    global $conn;
    $email = $data["email"];
    $username = stripslashes($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $konfirmasipw = mysqli_real_escape_string($conn, $data["konfirmasipw"]);

    // Cek Username
    $hasil =  mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_row($hasil)){
        echo "<script>
                alert('Username yang dimasukkan tidak tersedia, silahkan ganti');
        </script>";
        return false;
    }
    
    // Cek kesamaan pw
    if($password != $konfirmasipw){
        echo "<script>
                alert('Password yang dimasukkan tidak sesuai');
        </script>";
        return false;
    }

    // Enkripsi pw
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;

    // Insert ke database
    mysqli_query($conn, "INSERT INTO users  VALUES('', '$email', '$username', '$password')");
    return mysqli_affected_rows($conn);

}

// Fungsi Log out
function logout() {
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: ./");
    exit;
}

?>