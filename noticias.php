<?php
$titulo = "Notícias";
include __DIR__ . "/header.php";
include_once __DIR__ . "/config/connection.php";
?>

<main>
    <div class="container mt-5">
        <h1>Notícias do Senac</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM noticias";
            $resultado = $pdo->query($sql);
            if ($resultado) {
                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img class="card-img-top" src="//picsum.photos/500/200/?' . rand() . '" alt="Imagem de capa do card">';
                    echo '<div class="card-body">';
                    echo '    <h5 class="card-title">' . $linha['titulo'] . '</h5>';
                    echo '    <p class="card-text">' . $linha['descricao'] . '</p>';
                    echo '   <a href="#" class="btn btn-primary">Visitar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
</main>


<?php
include __DIR__ . "/footer.php";
?>