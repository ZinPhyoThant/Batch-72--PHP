<?php
include 'connection.php';
try {
    $sql = "CREATE TABLE item(
            IID INT NOT NULL AUTO_INCREMENT,
             PRIMARY KEY(IID),
            name VARCHAR(225),
            category VARCHAR(225),
            price INT(225),
            description VARCHAR(225),
            image VARCHAR(225)
        )";

    $db->exec($sql);
    echo "table created";
} catch (PDOException $e) {
    echo $e->getMessage();
}
