<?php


$host = 'localhost';
$username = 'root';
$password = '';
$database = 'aulaweb';
 
$image_folder = 'assets/images/';

// crio a conexação com o banco de dados 
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// // realizo um select básico para testar a conexão
// $sql = "SELECT * FROM noticias";

// // executando o sql dentro do banco baseado nas informações de conexão
// $resultado = $pdo->query($sql);

// if ($resultado) {
//     echo 'Conexão realizada com sucesso!';
// }
