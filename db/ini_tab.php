<?php
include_once "define.php";

include_once DB_SERVER_DATA;
include_once DB_TABLES_DATA;

/* Попытка подключения к серверу MySQL. */
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
// Проверка подключения
if($mysqli === false) die("ERROR: Ошибка подключения. " . $mysqli->connect_error);
 
// Попытка выполнить запрос на создание таблицы 1
if($mysqli->query(creat_table_string($table_1)) === true) echo " Таблица успешно создана.";
else  echo " ERROR: Не удалось выполнить. " . $mysqli->error;

// Попытка выполнить запрос на создание таблицы 2
if($mysqli->query(creat_table_string($table_2)) === true) echo " Таблица успешно создана.";
else  echo " ERROR: Не удалось выполнить. " . $mysqli->error;

// Закрыть соединение
$mysqli->close();
?>