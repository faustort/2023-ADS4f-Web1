<?php
ini_set('display_errors', 1);

$titulo = "Home";

include __DIR__ . '/header.php';
?>
<!-- Conteúdo principal do site -->
<main>
    <!-- create  -->
    <div id="carrosselFeliz" class="carousel slide" data-bs-ride="carousel" data-bs->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/faculdade.png" class="d-block w-100" alt="modelo ao centro sorrindo segurando um tablet. Escritas: Faculdade Senac.">
            </div>
            <div class="carousel-item">
                <img src="assets/images/pos.png" class="d-block w-100" alt="Exemplo">
            </div>
            <div class="carousel-item">
                <img src="assets/images/tecnico.png" class="d-block w-100" alt="Exemplo">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselFeliz" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrosselFeliz" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container"> <!-- Container que abraça  -->
        <div class="row"> <!-- Linha -->
            <div class="col-md-3 mx-auto"> <!-- Coluna de 50% -->
                <h1>Bem vindos ao Meu Site Feliz</h1>
                <p>Seja bem vindo ao melhor site da américa!</p>
            </div>
            <div class="col-md-3  mx-auto">
                <p>Coluna da direita</p>
            </div>
            <div class="col-md-3  mx-auto">
                <p>Coluna da direita</p>
            </div>
            <div class="col-md-3  mx-auto">
                <p>Coluna da direita</p>
            </div>
        </div>
    </div>


</main>

<?php
include __DIR__ . '/footer.php';
?>