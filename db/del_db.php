<?php
include_once "define.php";

include_once DB_SERVER_DATA;


/* Попытка подключения к серверу MySQL.*/
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);
// Проверяем соединение
if($mysqli === false){
 die("ERROR: Ошибка подключения: " . $mysqli->connect_error);
}
// Создание базы данных
$sql = "DROP DATABASE ".$DB_NAME;
if($mysqli->query($sql) === true){
  echo "База данных успешно удалена";
} else {
  echo "Ошибка удаления базы данных $sql. " . $mysqli->error;
}
// закрываем соединение
$mysqli->close();
?>