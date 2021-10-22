<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title class="title">Книжный червь | Книжный онлайн-магазин</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <script src="../js/index.js"></script>
    
</head>

<body>
<div id="forms">
    <h2 id="write">Авторизация</h2>
    <p> Вы еще не зарегестрированы в нашем магазине?  <a href="../signup.php">Зарегистрироваться</a></p>
    <form name='form' onsubmit='return validate()'>
        <input type='text' name='name' placeholder="Введите имя"> <span style='color:red' id='namef'></span><br />
        <div class="password">
            <input type="password" id="password-input" placeholder="Введите пароль" name="password"><span style='color:red' id='passwordf'></span><br />
            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
        </div>

        <input class="submit" type='submit' value='Войти'  onclick=" location.href='index.php'  ">
    </form>

</div>

</body>

</html>
