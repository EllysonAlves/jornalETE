<?php

define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'jornalete');

$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possivel conectar ao banco de dados!');