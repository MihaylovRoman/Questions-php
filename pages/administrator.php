<?php
$error = $_GET['error'];
if ($error) {
    echo '<script>alert("Неверный логин или пароль")</script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/63e77993b0.js" crossorigin="anonymous"></script>
    <title>Администратор</title>
</head>

<body>
    <div class="wrapper">
        <form method="post" class="form__quest" style="position: relative;" action="../checkAutoriz.php">
            <a href="../index.php" class="fa-solid fa-arrow-left"
                style="text-decoration: none; color: #A1375C; position: absolute; top:20px; left:20px;"></a>
            <h3>Администратор</h3>
            <input id="input" name="username" type="text" placeholder="Логин" required>
            <input id="input" name="password" type="password" placeholder="Пароль" required>
            
            <button class='form__button special-button' style="width: 220px;" type="submit">
                Вход
            </button>
        </form>
    </div>

</body>

</html>