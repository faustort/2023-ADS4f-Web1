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
        
        // para cada notícia, criar um elemento DIV
        dados.forEach(function(noticia) {
            // eu crio os elementos na memória
            let div = document.createElement('div');
            let h2 = document.createElement('h2');
            let p = document.createElement('p');
            let hr = document.createElement('hr');

            // eu preencho os elementos com os dados da notícia
            h2.innerHTML = noticia.titulo;
            p.innerHTML = noticia.descricao;

            // eu insiro os elementos na página
            div.appendChild(h2);
            div.appendChild(p);
            div.appendChild(hr);

            noticias.appendChild(div);
        });

    }
</script>

<?php
include __DIR__ . '/footer.php';
?>