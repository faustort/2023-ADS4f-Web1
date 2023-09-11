<?php
$titulo = "Exercício Json";
include __DIR__ . '/header.php';
?>

<main>
    <div class="container">
        <h1>Exercício Json</h1>
        <div id="noticias">
            Lista de notícias
        </div>
    </div>
</main>

<script>
    let dados = fetch('./rest/index.php')
        .then(response => response.json())
        .then(data => criarNoticias(data));

    function criarNoticias(dados) {
        let noticias = document.getElementById('noticias');
        // inserir estes resultados dentro da DIV Notícias

    }
</script>

<?php
include __DIR__ . '/footer.php';
?>