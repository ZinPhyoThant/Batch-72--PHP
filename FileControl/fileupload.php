<form action="" method="POST" enctype="multipart/form-data">
    File Upload : <input type="file" name="img" id="">
    <input type="submit" value="UPLOAD" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        if(isset($_FILES['img'])){
            $error =array();
            $filename = $_FILES['img']['name']; // logo.jpg
            $filesize = $_FILES['img']['size']; // byte 1234567
            $filetype = $_FILES['img']['type']; // logo/jpg  //after [logo] [jpg]
            $filetmp = $_FILES['img']['tmp_name']; //tempory name

            //$file_ex = explode($delimiter, $string)
            $file_ex = explode("/", $filetype);
            $filex   = strtolower(end($file_ex));

            $extension = array("jpg","png","jpeg","gif","jif","webp");

            if (in_array($filex, $extension)==FALSE){
                $error[] = "FILE Type Myrr Ny tal";
            }
            elseif ($filesize>2097152){
                $error[] = "Larger file";
            }
            elseif(empty($error)==TRUE){
                move_uploaded_file($filetmp,"images/".$filename);
            }
        }
    }