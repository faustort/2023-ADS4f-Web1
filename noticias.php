<?php
$titulo = "Notícias";
include __DIR__ . "/header.php";
include_once __DIR__ . "/config/connection.php";
?>

<main>
    <h1>Notícias do Senac</h1>
    <?php
    $sql = "SELECT * FROM noticias";
    $resultado = $pdo->query($sql);
    if ($resultado) {
        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo $linha['titulo'];
            echo $linha['descricao'];
        }
    }
    ?>
</main>


<?php
include "footer.php";
?>