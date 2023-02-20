<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            align-items: center;
        }
    </style>
</head>
<body>

    <form action="checklogin.php" method="POST">
        <div>
            <div>
                <label for="">User ID</label>
                <input type="text" name="uid">
            </div>
            <div class="pwd">
                <label for="">Password</label>
                <input type="password" name="pwd"><br>
            </div>  
            <div class="pwd">
                 <input type="submit" value="LOGIN" name="login">
            </div>
        
        </div>
    
        <br>
    </form>
</body>
</html>