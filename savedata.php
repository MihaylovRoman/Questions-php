<?php

require_once ("db.php");


$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];
$rating = $_POST['rating'];
$date = date('Y-m-d h:i:s');

if (!empty($name) && !empty($email) && !empty($description) && !empty($rating)) {
    $stmt = $pdo->prepare("insert into Review(name, email, description, rating, date) values(?,?,?,?,?)");
    $stmt->execute([
        $name,
        $email,
        $description,
        $rating,
        $date
    ]);
} else {
    $error = true;
    header('Location: pages/review.php?error=' . $error);
    return;
}

header("Location: index.php");



?>