<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
</head>
<body>
    <h1>Halaman Index</h1>
    <?php
    echo "Selamat datang <b>" . $_SESSION['username'] . "</b>, Anda berhasil login!";
    echo "<br><a href='logout.php'>Logout</a>";
    ?>
    <p><span id="counter">10</span></p>
    <script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=0) {
            location.href = 'login.php';
        }
        if (parseInt(i.innerHTML)!=0) {
            i.innerHTML = parseInt(i.innerHTML)-1;
        }
    }
    setInterval(function(){ countdown(); },1000);
    </script>
</body>
</html>