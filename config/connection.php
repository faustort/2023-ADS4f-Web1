<?php
/*

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE IF NOT EXISTS `noticias` (
  `idNot` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `noticias` (`idNot`, `titulo`, `descricao`) VALUES
(1, 'Cientistas alertam sobre os perigos do uso excessivo de dispositivos eletrônicos', 'Um novo estudo destaca os riscos à saúde associados ao uso prolongado de dispositivos eletrônicos e oferece orientações para reduzir os impactos negativos.');
(2, 'Nova tecnologia de armazenamento promete revolucionar a indústria de eletrônicos', 'Uma empresa de tecnologia lançou um novo tipo de bateria de longa duração que poderia transformar a forma como usamos nossos dispositivos.'),
(3, 'Filme local ganha prêmio em festival internacional de cinema', 'Um filme independente produzido por cineastas locais conquistou um prêmio importante em um prestigioso festival de cinema.'),
(4, 'Cientistas encontram evidências de vida em Marte', 'Uma missão de exploração espacial revelou indícios promissores de organismos microscópicos nas amostras coletadas de solo marciano.'),
(5, 'Artista renomado revela nova série de pinturas abstratas', 'Um pintor famoso lançou uma série intrigante de obras abstratas que estão capturando a atenção da crítica de arte.'),
(6, 'Startup de alimentos sintéticos recebe investimento milionário', 'Uma startup inovadora que produz alimentos sintéticos nutritivos arrecadou um investimento significativo de capital de risco.'),
(7, 'Pesquisadores descobrem ligação entre o sono e a criatividade', 'Estudos recentes sugerem que uma boa noite de sono pode aumentar a capacidade criativa das pessoas, levando a insights mais profundos.'),
(8, 'Empresa automotiva revela protótipo de carro elétrico autônomo', 'Uma grande fabricante de automóveis revelou um conceito de veículo elétrico autônomo equipado com recursos avançados de direção autônoma.'),
(9, 'Conferência global debate os desafios das cidades inteligentes', 'Especialistas em urbanismo e tecnologia se reuniram para discutir como criar cidades mais eficientes e conectadas no futuro.'),

*/


$host = 'localhost';
$username = 'senac';
$password = 'senac';
$database = 'aula';

// crio a conexação com o banco de dados 
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// // realizo um select básico para testar a conexão
// $sql = "SELECT * FROM noticias";

// // executando o sql dentro do banco baseado nas informações de conexão
// $resultado = $pdo->query($sql);

// if ($resultado) {
//     echo 'Conexão realizada com sucesso!';
// }
