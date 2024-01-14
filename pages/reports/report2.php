<?php

require_once '../../db.php';
$stmt = $pdo->query('select * from Review');
$items = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/table.css">
    <script src="https://kit.fontawesome.com/63e77993b0.js" crossorigin="anonymous"></script>
    <title>Отчет №1</title>
</head>

<body>
    <div class="wrapper">
        <div class="form__quest">
            <a class="fa-solid fa-arrow-left" style="text-decoration: none; color: #A1375C;" href="../login.php"></a>
            <h3 style="text-align:center">Форма отчета №2</h3>
            <table class='table'>
                <tr>
                    <td>
                        <h4>Оценка товара</h4>
                    </td>
                    <td>
                        <h4>Сообщение</h4>
                    </td>
                    <td>
                        <h4>Дата отзыва</h4>
                    </td>
                </tr>
                <?php foreach ($items as $item): ?>
                    <?php if ($item['rating'] > 3): ?> <!-- Выводит комментарии только с оценкой больше 3 -->
                        <tr>
                            <td>
                                <?= $item['rating'] ?>
                            </td>
                            <td>
                                <?= $item['description'] ?>
                            </td>
                            <td>
                                <?= $item['date'] ?>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
</body>

</html>