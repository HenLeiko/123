<?php
$data = $_POST;

if (isset($data['send'])){
    $oal = fopen('login.txt', 'a');
    $addlogin = fwrite($oal, $data['login'].PHP_EOL);
    fclose($oal);
    $oap = fopen('password.txt', 'a');
    $addpassword = fwrite($oap, $data['password'].PHP_EOL);
    fclose($oap);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <input type="text" name="login" placeholder="Login">
    <input type="password" name="password" id="pass" placeholder="Password">
    <input type="submit" value="Регистрация" name="send">
    </form>
</body>
</html>