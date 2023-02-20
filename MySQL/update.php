<?php
include 'connection.php';

$uid = $_GET['uid'];

$sql = $db->prepare("SELECT * FROM item WHERE IID=$uid");
$sql->execute();


$row = $sql->fetch(PDO::FETCH_ASSOC);
extract($row);
?>

<form method="POST" action="updateprocess.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $IID; ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
    Category: <input type="text" name="cat" value="<?php echo $category; ?>"><br>
    Price: <input type="text" name="price" value="<?php echo $price; ?>"><br>
    Description: <textarea name="des" cols="30" rows="10">
        <?php echo $description; ?>
    </textarea> <br>
    Image: <img src="images/<?php echo $image; ?>"> <br>
    Image: <input type="hidden" name="oldimg" value="<?php echo $image; ?>">

    <input type="file" name="newimg"><br><br>
    <input type="submit" name="update" value="UPDATE">


    <?php

    include 'connection.php';

    $sql = $db->prepare("SELECT * FROM item");
    $sql->execute();
    ?>
</form>