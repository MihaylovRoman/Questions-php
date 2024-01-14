<?php

require_once '../db.php';
$error = $_GET['error'];

if ($error) {
    echo '<script> alert(\"Укажите оценку"\)</script>';
}
$stmt = $pdo->query('select * from Review');
$count = $stmt->rowCount();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/review.css">
    <title>Оставить отзыв</title>
    <script src="https://kit.fontawesome.com/63e77993b0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <form class="form" method="post">
            <a class="fa-solid fa-arrow-left" style="text-decoration: none; color: #A1375C;" href="../index.php"></a>
            <div class="review">
                <h3>Отзыв о товаре</h3>
                <p>Отзывы (<?= $count ?>)</p>
            </div>
            <p><i>Все поля обязательны для заполнения</i></p>
            <div class="review__block">
                <h4>Оцените товар</h4>
                <div class="rating-box">
                    <div class="rating">
                        <i class="fas fa-star star" data-rating='1'></i>
                        <i class="fas fa-star star" data-rating='2'></i>
                        <i class="fas fa-star star" data-rating='3'></i>
                        <i class="fas fa-star star" data-rating='4'></i>
                        <i class="fas fa-star star" data-rating='5'></i>
                        <input type="hidden" name='rating' id="rating" value="<?php echo $rating ?>" required>
                    </div>
                </div>

                <div class="info">
                    <div class="info__input">
                        <div class="info__item">
                            <p>Введите имя</p>
                            <input class="name" value="<?php echo $name ?>" type="text" name="name" maxlength="35"
                                required>
                        </div>

                        <div class="info__item">
                            <p>Email</p>
                            <input class="email" value="<?php echo $email ?>" name="email" type="text" maxlength="30"
                                required>
                        </div>
                    </div>
                    <p>Сообщение</p>
                    <textarea class="desc" name="description" value="<?php echo $description ?>" maxlength="300"
                        required></textarea>
                </div>
            </div>
            <button id="#submitBtn" formaction="../savedata.php" type="submit">Оставить отзыв</button>
        </form>
    </div>
    <script src='../script.js'></script>
</body>

</html>