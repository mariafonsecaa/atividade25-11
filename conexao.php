<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tabela";
$port = 3306;

//Conexao com a porta
$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);



