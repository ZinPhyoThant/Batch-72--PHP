<?php
include 'connection.php';

$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
?>

<table border="l">
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Image</th>
    <?php
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        // $row|'name|
    }
    ?>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $category; ?></td>
        <td><?php echo $price; ?></td>
        <td><?php echo $description; ?></td>
        <td><img src="../a.jpg" alt=""><?php echo $image; ?></td>
    </tr>
    <?php
    ?>
</table>