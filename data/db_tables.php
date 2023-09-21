<?php
/*---------функция формирования запроса для создания таблицы -------------*/
    function creat_table_string($table){  
        while ($tab = current($table)) {
                if ( key($table) == array_key_first($table)) $out_string = $tab."( ";
                else {
                    $out_string = $out_string.=key($table)." ".$tab;
                    if (key($table) != array_key_last($table)) $out_string = $out_string.", ";
                    else $out_string = $out_string." )";
                }
             next($table);
        }
        return "CREATE TABLE ".$out_string;
    }
/*-------------------------------------------------------------------------*/


/*-------------- таблица регистрации пользователей ------------------------*/
    $table_1 = array(
        'table_name' => 'account3',                           // имя таблицы
        'id' => 'INT NOT NULL PRIMARY KEY AUTO_INCREMENT',    // инкремент
        'first_name' => 'VARCHAR(30) NOT NULL',               // имя пользователя
        'last_name' => 'VARCHAR(30) NOT NULL',                // отчество
        'email' => 'VARCHAR(70) NOT NULL UNIQUE');            // эл. почта
/*--------------------------------------------------------------------------/


/*-------------- таблица балансов пользователей ---------------------------*/
    $table_2 = array(
        'table_name' => 'balans',                             // имя таблицы
        'id' => 'INT NOT NULL PRIMARY KEY AUTO_INCREMENT',    // инкремент
        'ackey' => 'INT',                                       // ключ пользователя
        'transaction' => 'INT',                               // транзакция
        'sum' => 'INT');                                      // сумма
/*--------------------------------------------------------------------------*/


?>