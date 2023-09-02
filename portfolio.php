<?php
$titulo = "Meu portfólio";
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php'; // once: se eu já inclui em algum lugar não dará erro


if (isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_FILES['imagem'])) {
    /*
        A variável $image_folder vem do arquivo de configuração
        connection.php, é util deixa-la externa para que 
        futuras modificações no sistema de pastas possam ser 
        facilmente alteradas.
    */
    $diretorio = __DIR__ . '/' . $image_folder;

    // Criar um nome único para o arquivo
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


/**
 * Verifica se a ação é apagar e se o id do portfólio foi enviado
 */
if (isset($_GET['action']) && $_GET['action'] == 'apagar' && isset($_GET['idPor'])) {
    // Pega a id do portfólio no banco
    $idPor = $_GET['idPor'];
    // prepara o select
    $resultado = $pdo->query("SELECT * FROM portfolio WHERE idPor = $idPor");
    // verifica se o select retornou algum resultado
    if ($resultado) {
        // pega a linha do resultado
        $linha = $resultado->fetch(PDO::FETCH_ASSOC);
        // pega o nome da imagem
        $imagem = $linha['imagem'];
        // apaga a imagem utilizando a função unlink
        unlink(__DIR__ . '/' . $image_folder . $imagem);
        // apaga o registro do banco
        $pdo->query("DELETE FROM portfolio WHERE idPor = $idPor");
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
                            <div class="col-md-6">
                                <div class="card mr-2 mb-4">
                                    <img class="card-img-top" src="<?php echo $image_folder . $linha['imagem']; ?>" alt="Imagem de capa do card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo  $linha['titulo'] ?></h5>
                                        <p class="card-text"><?php echo $linha['descricao']; ?></p>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-danger"><a href="?action=apagar&idPor=<?php echo $linha['idPor']; ?>" class="text-light"><i class="bi bi-trash"></i></a></button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditar"><a href="#" class="text-light"><i class="bi bi-pen"></i></a></button>
                                        </div>
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
                <h1>Enviar um portfólio</h1>
                <p>Envie seu currículo</p>
                <form action="portfolio.php" method="post" enctype="multipart/form-data">
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


                <div class="modal" id="modalEditar">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <h1>oi</h1>
                        </div>
                        <div class="modal-footer">
                            <p>conteudo</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>