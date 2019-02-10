<?php 
$host = "127.0.0.1";
$database = "soc";
$user = "nyamzas";
$password = "1234";
$db_table = "mail";
$link = mysqli_connect($host, $user, $password, $database);

if (!$link) {
     echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
     echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

if (isset($_POST['name']) && isset($_POST['text'])){

    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];
    



}







?>