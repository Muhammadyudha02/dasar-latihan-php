
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php method post</title>
</head>
<body>
    <h1>login form</h1>
    <form method="post">
        <label for="username">ussername :</label>
        <input type="text" id="username" name="username"> <br>
        <label for="password">password :</label>
        <input type="text" id="password" name="pasword"> <br>
        <button type="submit" name="submit" >submit</button>
</form>
<?php if (isset($_POST["nama"])):?>
<h1>Hallo,<?php echo $_POST["nama"]?></h1>
<?php endif?>
</body>
</html>
