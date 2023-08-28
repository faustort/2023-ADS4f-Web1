<?php
$titulo = "Página de contato";
include __DIR__ . '/header.php';
?>

<!-- Conteúdo principal do site -->
<main class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Fale comigo</h1>
                <p>Preencha o formulário</p>

                <form action="" method="get" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nome_input" class="form-label">Digite seu Nome</label>
                        <input type="text" name="nome" class="form-control form-control-lg" id="nome_input" placeholder="Digite seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email_input" class="form-label">Digite seu e-mail</label>
                        <input type="email" name="email" class="form-control form-control-lg" id="email_input" placeholder="Digite o e-mail corretamente">
                    </div>
                    <div class="mb-3">
                        <label for="mensagem_input" class="form-label">Digite sua mensagem</label>
                        <textarea class="form-control" name="mensagem" id="mensagem_input" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Enviar form">
                </form>
            </div>
            <div class="col-md-6">
                <?php
                echo isset($_GET['nome']) ? $_GET['nome'] : 'Nome não informado<br>';
                echo isset($_GET['email']) ? $_GET['email'] : 'Email não informado<br>';
                echo isset($_GET['mensagem']) ? $_GET['mensagem'] : 'Mensagem não informada';
                ?>
            </div>
        </div>
    </div>
</main>


<?php
include __DIR__ . '/footer.php';
?>