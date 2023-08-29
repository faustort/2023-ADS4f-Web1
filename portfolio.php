<?php
$titulo = "Meu portfólio";
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php'; // once: se eu já inclui em algum lugar não dará erro


if (isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_FILES['imagem'])) {
    $diretorio = __DIR__ . '/' . $image_folder; // para onde ela vai

    // create an unique file name
    $nomeArquivo = uniqid() . '-' . $_FILES['imagem']['name']; // nome do arquivo
    $arquivo = $diretorio . $nomeArquivo; // caminho completo do arquivo

    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo)) {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $pdo->query("INSERT INTO portfolio (titulo, descricao, imagem) VALUES ('$titulo', '$descricao', '$nomeArquivo')");

        echo 'Arquivo salvo com sucesso!';
    } else {
        echo 'Erro ao salvar o arquivo!';
    }
}


?>
<!-- Conteúdo principal do site -->
<main class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Sobre a minha pessoa</h1>
                <p>Veja meu currículo</p>
                <div class="row">
                    <?php

                    $resultado = $pdo->query("SELECT * FROM portfolio");
                    if ($resultado) {
                        while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>

                            <div class="col-md-2">
                                <div class="card mr-2 mb-4">
                                    <img class="card-img-top" src="<?php echo $image_folder . $linha['imagem']; ?>" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo  $linha['titulo'] ?></h5>
                                        <p class="card-text"><?php echo $linha['descricao']; ?></p>
                                        <a href="#" class="btn btn-primary">Visitar</a>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }

                    ?>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label class="form-label" for="titulo">Título do Portfólio</label>
                        <input class="form-control" type="text" name="titulo" id="titulo">
                    </div>
                    <div>
                        <label class="form-label" for="descricao">Descrição</label>
                        <textarea class="form-control" name="descricao" rows="4"></textarea>
                    </div>
                    <div>
                        <label class="form-label" for="imagem">Selecione sua imagem</label>
                        <input class="form-control" type="file" name="imagem" id="imagem">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>