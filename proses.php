<?php
session_start();


// Misal kamu memiliki array pengguna untuk simulasi database
if (!isset($_SESSION['pengguna'])) {
    $_SESSION['pengguna'] = []; //kalo belum ada session, inisialisasi dengan array kosong
}

// Menangani penambahan username
if (isset($_POST['addUser']) && !empty($_POST['addUser'])) {
    // Simpan username dan password kosong ke dalam array pengguna
    $_SESSION['pengguna'][] = ['username' => $_POST['addUser'], 'password' => '']; 
    $_SESSION['message_username'] = "Username " . $_POST['addUser'] . " berhasil ditambahkan!";
    header("Location: login.php");
    exit();
}

// Menangani penambahan password
if (isset($_POST['addPass']) && !empty($_POST['addPass'])) {
    
    // Cek jika ada pengguna yang sudah ditambahkan, lalu simpan password ke pengguna terakhir
    if (!empty($_SESSION['pengguna'])) {
        $last_index = count($_SESSION['pengguna']) - 1;
        $_SESSION['pengguna'][$last_index]['password'] = $_POST['addPass']; // Set password untuk pengguna terakhir
        $_SESSION['message_password'] = "Password berhasil ditambahkan!";
    }
    header("Location: login.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user_valid = in_array(['username' => $username, 'password' => $password], $_SESSION['pengguna']);
    // Mengecek apakah input dari user cocok dengan data pengguna
    if ($user_valid) {
        // Membuat session pengguna
        $_SESSION['username'] = $username;
        header("Location: beranda.php");
        exit();
    } else {
        echo "Username atau Password salah!";
    }
}
?>