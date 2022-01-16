<?php
	$email= filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	
	if(mb_strlen($email) < 5 || mb_strlen($email) > 90) {
		echo "Недопустимая длина почты";
		exit();
	} else if (mb_strlen($login) < 3 || mb_strlen($login) > 50) {
		echo "Недопустимая длина имени";
		exit();

	} else if (mb_strlen($pass) > 6) {
		echo "Недопустимая длина пароля (от 6 символов)";
		exit();

	}

	$pass= md5($pass."ghjkl12dsgfhd34");

	$mysql = new mysqli('localhost', 'root', '', 'library');
	$mysql->query("INSERT INTO `users` (`email`, `login`, `pass`) VALUES('$email', '$login', '$pass')");

	$mysql->close();
	header('Location: ../index.php');

?>