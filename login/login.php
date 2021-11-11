<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title class="title">Книжный червь | Книжный онлайн-магазин</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="../js/index.js"></script>
    
</head>

<body>
<div id="forms">
<div class="container mt-4">
    <h1>Авторизоваться</h1>
    <p> Вы еще не зарегестрированы в нашем магазине?  <a href="../signup.php">Зарегистрироваться</a></p>
    <form method="post" action="../php/auth.php">
        <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Авторизоваться</button>
    </form>
</div> 


</div>

</body>

</html>
