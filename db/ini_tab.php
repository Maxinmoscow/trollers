<?php
/* подключаем данные относительно корня каталога */
$DB_SERVER_DATA = $_SERVER['DOCUMENT_ROOT'].'/data/db_server.php';
$DB_TABLES_DATA = $_SERVER['DOCUMENT_ROOT'].'/data/db_tables.php';

include $DB_SERVER_DATA;
include $DB_TABLES_DATA;

/* Попытка подключения к серверу MySQL. */
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
 
// Проверка подключения
if($mysqli === false){
    die("ERROR: Ошибка подключения. " . $mysqli->connect_error);
}
 
// Попытка выполнить запрос на создание таблицы
$sql = "CREATE TABLE ".$TABLE_1;
if($mysqli->query($sql) === true){
    echo "Таблица успешно создана.";
} else{
    echo "ERROR: Не удалось выполнить $sql. " . $mysqli->error;
}
 
// Закрыть соединение
$mysqli->close();
?>