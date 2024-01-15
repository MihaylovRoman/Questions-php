<?php

require_once '../../db.php';

$stmt = $pdo->query('select * from review');
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {
    $total = $_POST['search'];
    $sql = "SELECT * FROM Review WHERE rating = :total";
    $query = $pdo->prepare($sql);
    $query->bindValue(':total', $total, PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
}

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
            <form method="post" style="text-align: center; margin-bottom: 10px">
                <input class="searchInp" style='padding: 10px;
                 color: #FA759E; border:none; border-radius: 15px;
                 width: 60px' placeholder="Поиск.." name='search' type="number" />
                <button class="searchBtn" style="padding:8px; border:none;
                border-radius: 25px; background: #A1375C" name='submit' type="submit">🔍</button>
                <button class="searchBtn" style="padding:8px; border:none;
                border-radius: 25px; background: #A1375C" name='submit' type="submit" formaction="../../refresh.php">♾️</button>
            </form>
            <?php if (!empty($results)): ?>
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
                    <?php foreach ($results as $item): ?>
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
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>