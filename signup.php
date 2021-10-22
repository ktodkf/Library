<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title class="title">Книжный червь | Книжный онлайн-магазин</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">

    <script src="js/index.js"></script>
</head>

<body>
<div id="forms">
    <h2 class="write">Регистрация</h2>
    <p> Вы уже зарегестрированы в нашем магазине?  <a href="login/login.php">Авторизоваться</a></p>

    <form id='form' Method= POST onsubmit='return validate()'>
        <input type='text' name='login' placeholder='Введите имя'> <span style='color:red' id='namef'></span><br />
        <input type='text' name='email'  placeholder='Введите электронную почту'> <span style='color:red' id='emailf'></span><br />
        <div class="password">
           <input type='password' name='password' placeholder='Введите пароль' id="password-input"> <span style='color:red' id='passwordf'></span><br />
            <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
        </div>
        <input class="submit" type='submit' value='Зарегистрироваться' id="submit">
    </form>
  
    <?php 
            include "php/up.php";
            return signUp();
    ?>
</div>

</body>

</html>