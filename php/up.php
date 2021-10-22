<?php
	function signUp()
	{
		$db_host = "localhost"; 
		$db_user = "root"; // Логин БД
		$db_password = ""; // Пароль БД
		$db_base = 'library'; // Имя БД
		$db_table = "users"; // Имя Таблицы БД
		
		$login = $_POST['login'] ?? '';
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		
		$check = true;
		try {
			// Подключение к базе данных
			$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
			// Устанавливаем корректную кодировку
			$db->exec("set names utf8");
			// Собираем данные для запроса
			$data = array( 'login' => $login, 'email' => $email, 'password' => $password); 
			// Подготавливаем SQL-запрос
			$query = $db->prepare("INSERT INTO $db_table (login, email, pass) values (:login, :email, :password)");
			$query->execute($data);
			
		} catch (PDOException $e) {
			// Если есть ошибка соединения или выполнения запроса, выводим её
			print "Ошибка!: " . $e->getMessage() . "<br/>";
			$check = false;
		}
		
		return ($check);
	}
	
	function signIn()
	{
		$db_host = "localhost"; 
		$db_user = "root"; // Логин БД
		$db_password = ""; // Пароль БД
		$db_base = 'library'; // Имя БД
		$db_table = "users"; // Имя Таблицы БД
		
		$login = $_POST['login'] ?? '';
		$email = $_POST['email'] ?? '';
		$password = $_POST['password'] ?? '';
		
		$check = true;
		$passCheck = false;
		$emailCheck = false;
		$loginCheck = false;
		try {
			// Подключение к базе данных
			$db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
			// Устанавливаем корректную кодировку
			$db->exec("set names utf8");
			// Собираем данные для запроса
			$data = array( 'login' => $login, 'email' => $email, 'password' => $password); 
			// Подготавливаем SQL-запрос
			$query = $db->prepare("SELECT * FROM `users`");
			$query->execute();
			$i = 0;
			$row = $query->fetchAll(PDO::FETCH_COLUMN, 0);
			print_r ($row);
			$test = $row(2);
			echo $test;
		} catch (PDOException $e) {
			// Если есть ошибка соединения или выполнения запроса, выводим её
			print "Ошибка!: " . $e->getMessage() . "<br/>";
			$check = false;
		}
		return ($check);		
	}	
?>

$row = $query->fetchAll();