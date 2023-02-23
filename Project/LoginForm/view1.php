<?php

include 'connection.php';

$sql = $db->prepare("SELECT * FROM item");
$sql->execute();
?>
<style>
    form {
        background-color: paleturquoise;
        width: 100vmax;
    }

    table {
        background-color: purple;
    }

    img {
        width: 100px;
        height: 100px;
    }

    tr {
        width: 200px;
    }

    th {
        width: 100px;
    }

    tr th,
    td {}
</style>
<form action="">
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
                <td> <a href="delete.php?did=<?php echo $IID; ?>"> DELETE </a> </td>


            </tr>
        <?php
        }
        // while ($row=$sql->fetch(PDO::FETCH_ASSOC)){
        //     extract($row);

        //     echo "$name $category $price $description $image<br>";
        // }
        ?>
    </table>
</form>