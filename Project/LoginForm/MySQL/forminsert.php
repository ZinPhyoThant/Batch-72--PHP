<?php
include 'connection.php';

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];
$image = $_POST['image'];
try {
    $sql = "INSERT INTO item(name, category, price, description, image)
                VALUES('$name','$category','$price','$description','$image');
            ";

    $db->exec($sql);
    echo "data inserted";
} catch (PDOException $e) {
    echo $e->getMessage();
}
