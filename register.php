<?php
$data = $_POST;

if (!empty($_POST)) {
    $curl = curl_init(); //инициализация сеанса
    curl_setopt($curl, CURLOPT_URL, 'http://localhost/api.lemon/users'); //урл сайта к которому обращаемся
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt ($curl, CURLOPT_CAINFO, dirname(__FILE__)."/cacert.pem");
    curl_setopt($curl, CURLOPT_HEADER, 0); //выводим заголовки
    curl_setopt($curl, CURLOPT_POST, 1); //передача данных методом POST
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //теперь curl вернет нам ответ, а не выведет
    curl_setopt($curl, CURLOPT_POSTFIELDS, //тут переменные которые будут переданы методом POST
      array (
        'login'=>@$_POST['reg-login'],
        'password'=>@$_POST['reg-password'],
          'searchButton'=>'get' //это на случай если на сайте, к которому обращаемся проверяется была ли нажата кнопка submit, а не была ли оправлена форма
          ));
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'); //эта строчка как-бы говорит: "я не скрипт, я огнелис" :)
    curl_setopt ($curl, CURLOPT_REFERER, "https://"); //а вдруг там проверяют наличие рефера
    $res = curl_exec($curl);
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
    <form  action="" method="POST">
    <input type="text" name="reg-login" placeholder="Login">
    <input type="password" name="reg-password" id="pass" placeholder="Password">
    <input type="submit" value="Регистрация" id="send" name="send">
    </form>
    <script src="script.js"></script>
</body>
</html>