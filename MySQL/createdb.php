<?php

include 'connection.php'; //file connection


try {
    $sql = "CREATE DATABASE B727374unibc";
    $db->exec($sql);
    echo "database created";
} catch (PDOException $e) {
    echo $e->getMessage();
}
