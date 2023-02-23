<?php
include 'connection.php';

try {
    $sql = "INSERT INTO item(name, category, price, description, image)
            VALUES('GRTEE','t-shirt','7000','alalalalal','blah.jpg')
        ";

    $db->exec($sql);
    echo "data inserted";
} catch (PDOException $e) {
    echo $e->getMessage();
}
