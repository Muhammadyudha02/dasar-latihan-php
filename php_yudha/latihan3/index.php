<?php
    if (isset($_POST["submit"])){
        if($_POST["username"]=="admin"
        && $_POST["password"]=="12345"){
            header("location: admin.php");
            exit;
        }else{
        $error=true;
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan method post</title>
</head>

<body>
    <h1>login form</h1>
<?php if(isset($error)):?>
    <p style="color: red;">username dan pasword salah,silahkan coba lagi
    <?php endif ?>

    <form method="post">
        <label for="username">username :</label>
        <input type="text" id="username" name="username"> <br>
        <label for="password">password :</label>
        <input type="text" id="password" name="password"> <br>
        <br>
        <button type="submit" name="submit" >login</button>
</form>

</body>
</html>