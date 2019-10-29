<?php 
    $data = $_POST;
    if (isset($data['send'])){
        $line = 1;
        while (($text = fgets('login.txt', 15)) !== false) {
            if ($text === $data['login']) {
                $search = !$search;
                return $line;
            }
            if ($search) return $line;
            $line++;
        }
    }
    echo $line
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
    <input type="submit" value="Вход" name="send">
    </form>
</body>
</html>