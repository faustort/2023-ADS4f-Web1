<?php
// define o cabeçalho da resposta do servidor como Json
header('Content-Type: application/json');
// inclui o arquivo de conexão com o banco de dados
include __DIR__ . './../config/connection.php';
// faz a consulta no banco de dados
$consulta = $pdo->query("SELECT * from noticias");
// cria um array vazio
$json = [];
// percorre os resultados da consulta e adiciona no array
while ($noticia = $consulta->fetch(PDO::FETCH_ASSOC)) {
    // adiciona a notícia no array
    $json[] = $noticia;
}
// retorna o array como Json
echo json_encode($json);
