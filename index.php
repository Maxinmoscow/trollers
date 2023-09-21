<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel ="stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel ="stylesheet" href = "css/style.css">
</head>
<body>
<div class="container mt-4">
<h1>Форма регистрации</h1>  
<form action = "check.php" method = "post">
<br>
<input type="text" class="form-control"  name = "login" id = "login" placeholder="Введите логин">
<br>
<input type="text" class="form-control"  name = "name" id = "name" placeholder="Введите имя">
<br>
<input type="password" class="form-control"  name = "password" id = "password" placeholder="Введите пароль">
<br>
<button class = "btn btn-success"  type = "submit">зарегистрировать</button>
</form>
</div>  
<?php
/*
$TABLE_2 ="persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
) ";
*/
$table_1 = array(
    'table_name' => 'account',
    'id' => 'INT NOT NULL PRIMARY KEY AUTO_INCREMENT',
    'first_name' => 'VARCHAR(30) NOT NULL',
    'last_name' => 'VARCHAR(30) NOT NULL',
    'email' => 'VARCHAR(70) NOT NULL UNIQUE');
   
  $table = $table_1;
    while ($tab = current($table)) {
            if ( key($table) == array_key_first($table)) echo $tab."( ";
            else {
                echo key($table)." ".$tab;
                if (key($table) != array_key_last($table)) echo ", ";
                else echo " )";
            }
        next($table);
    }
?>




</body>
</html>