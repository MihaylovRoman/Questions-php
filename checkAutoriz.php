<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        header('Location: ./pages/login.php');
        return;
    } else {
        $error = true;
        header("Location: ./pages/administrator.php?error=" . $error);
        return;
    }
}
?>