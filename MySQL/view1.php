<?php

include 'connection.php';

$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
?>
<style>
    table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 60%;
    }

    img {
        width: 100px;
    }

    tr {
        text-align: center;

    }

    th {
        background-color: rgb(74, 74, 74);
        color: white;
    }

    tr th,
    td {
        padding: 10px;
    }
</style>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Description</th>
        <th>Image</th>
        <th>Something</th>
        <th>Something1</th>
    </tr>
    <?php
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
    ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $category; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $description; ?></td>
            <td> <img src="images/<?php echo $image; ?>"></td>
            <td> <a href="update.php?uid=<?php echo $IID; ?>"> UPDATE </a> </td>
            <td> <a href="delete.php?uid=<?php echo $IID; ?>"> DELETE </a> </td>


        </tr>
    <?php
    }
    // while ($row=$sql->fetch(PDO::FETCH_ASSOC)){
    //     extract($row);

    //     echo "$name $category $price $description $image<br>";
    // }
    ?>
</table>