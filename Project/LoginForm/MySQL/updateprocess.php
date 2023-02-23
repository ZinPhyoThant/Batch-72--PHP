<?php
include 'connection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$cat = $_POST['cat'];
$price = $_POST['price'];
$des = $_POST['des'];
$oldimg = $_POST['oldimg'];
$newimg = $_FILES['newimg']['name'];

if ($newimg != "") {
    $updatephoto = $newimg;
    move_uploaded_file($_FILES['newimg']['tmp_name'], "images/" . $newimg);
} else {
    $updatephoto = $oldimg;
}

$sql = $db->prepare("UPDATE item SET IID='$id', name='$name', category='$cat', price='$price', description='$des', image='$updatephoto' WHERE IID ='$id'");

$sql->execute();

header('Location: view1.php');
