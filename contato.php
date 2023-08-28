<?php
$titulo = "Página de contato";
include __DIR__ . '/header.php';
include_once __DIR__ . '/config/connection.php'; // once: se eu já inclui em algum lugar não dará erro
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
                echo isset($_GET['nome']) ? 'Seu nome: ' . $_GET['nome'] . '<br>' : 'Nome não informado<br>';
                echo isset($_GET['email']) ? 'Seu e-mail: ' . $_GET['email'] . '<br>' : 'Email não informado<br>';
                echo isset($_GET['mensagem']) ? 'Sua mensagem:' . $_GET['mensagem'] : 'Mensagem não informada';

                if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['mensagem'])){
                    $nome = $_GET['nome'];
                    $email = $_GET['email'];
                    $mensagem = $_GET['mensagem'];
                    
                    $pdo->query("INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')");
                    if($pdo){
                        echo '<div class="alert alert-success">Mensagem enviada com sucesso!</div>';
                    } else {
                        echo '<div class="alert alert-danger">Erro ao enviar mensagem!</div>';
                    }

                }

                ?>
            </div>
        </div>
    </div>
</main>


<?php
include __DIR__ . '/footer.php';
?>