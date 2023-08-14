<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post" autocomplete="off">
        <input type="hidden" id="action" value="register">
        <label for="">Name</label>
        <input type="text" id="name" value=""><br>
        <label for="">Username</label>
        <input type="text" id="username" value=""><br>
        <label for="">Password</label>
        <input type="password" id="password" value=""><br>
        <button type="button" onclick="submitData();">Register</button>
    </form>
    <br>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php';?>
</body>
</html>