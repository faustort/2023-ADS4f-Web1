<?php
/*
 CREATE TABLE IF NOT EXISTS  `noticias` (
  `idNot` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `noticias` (`idNot`, `titulo`, `descricao`) VALUES
(1, 'Notícia Teste', 'Descrição da notícia');
 
*/


$host = 'localhost';
$username = 'senac';
$password = 'senac';
$database = 'aula';

// crio a conexação com o banco de dados 
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// realizo um select básico para testar a conexão
$sql = "SELECT * FROM noticias";

// executando o sql dentro do banco baseado nas informações de conexão
$resultado = $pdo->query($sql);

if ($resultado) {
    echo 'Conexão realizada com sucesso!';
}
