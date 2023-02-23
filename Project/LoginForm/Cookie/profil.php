<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <style>
        div{
            align-items: center;
        }
        .submit{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <form action="cookies_redirect.php" method="POST">
            <table>
            <tr>
                   <td><label for="">Enter Your Name:</label></td>
                    <td><input type="text" name=""></td>
                   <tr/>
                    <tr>
                        <td><label for="">City</label></td>
                       <td><input type="text" name=""></td> 
                    </tr>
                    <tr>
                        <td><label for="">State</label></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr>
                        <td><label for="">Zip</label></td>
                        <td><input type="text" name=""></td>
                    </tr>
                    <tr name="submit">
                        <td><input type="submit" value="Submit"></td>
                    </tr>

                    <tr><td>
                        <a href="./check_cookies.php">Check Cookies</a>
                        <a href="./delete_cookies.php">Delete Cookies</a>
                        <a href="./cookies_redirect.php">Go to Form</a>
                    </td></tr>
            </table>
           
        </form>
    </div>
</body>
</html>