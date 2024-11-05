<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="proses.php" method="post">
        <h1>Tambahkan Username!</h1>
        <input type="text" name="addUser" id="addUser">
        <input type="submit" name="User" id="user" value="Tambah Username">
        <?php
        if(isset($_SESSION['message_username'])) {
            echo "<p>" . $_SESSION['message_username'] . "</p>";
            unset($_SESSION['message_username']);
        }
        ?>
        <h1>Tambahkan Password!</h1>
        <input type="password" name="addPass" id="addPass">
        <input type="submit" name="Pass" id="Pass" value="Tambah Password">
        <?php
        if(isset($_SESSION['message_password'])) {
            echo "<p>" . $_SESSION['message_password'] . "</p>";
            unset($_SESSION['message_password']);
        }
        ?>
        <h1>Silakan Login!</h1>
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login!"></td>
            </tr>
        </table>
    </form>
</body>
</html>