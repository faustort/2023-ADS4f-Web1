<?php
$titulo = "Meu portfólio";
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php'; // once: se eu já inclui em algum lugar não dará erro
?>

<!-- Conteúdo principal do site -->
<main class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Sobre a minha pessoa</h1>
                <p>Veja meu currículo</p>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <div>
                        <label class="form-label" for="titulo">Título do Portfólio</label>
                        <input class="form-control" type="text" name="titulo" id="titulo">
                    </div>
                    <div>
                        <label class="form-label" for="descricao">Título do Portfólio</label>
                        <textarea class="form-control" name="descricao" rows="4"></textarea>
                    </div>
                    <div>
                        <label class="form-label" for="imagem">Selecione sua imagem</label>
                        <input class="form-control" type="file" name="imagem" id="imagem">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/footer.php';
?>