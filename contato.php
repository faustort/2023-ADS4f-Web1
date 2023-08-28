<?php
$titulo = "Página de contato";
include __DIR__ . '/header.php';
?>

<!-- Conteúdo principal do site -->
<main> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Fale comigo</h1>
                <p>Preencha o formulário</p>

                <div>
                    <div class="mb-3">
                        <label for="nome_input" class="form-label">Digite seu Nome</label>
                        <input type="text" class="form-control form-control-lg" id="nome_input" placeholder="Digite seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email_input" class="form-label">Digite seu e-mail</label>
                        <input type="email" class="form-control form-control-lg" id="email_input" placeholder="Digite o e-mail corretamente">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Digite sua mensagem</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
include __DIR__ . '/footer.php';
?>