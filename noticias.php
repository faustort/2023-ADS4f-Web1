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
                $i = 0; // inicio o contador
                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img class="card-img-top" src="//picsum.photos/500/200/?' . rand() . '" alt="Imagem de capa do card">';
                    echo '<div class="card-body">';
                    echo '    <h5 class="card-title" id="titulo_' . $i . '">' . $linha['titulo'] . '</h5>';
                    echo '    <p class="card-text">' . $linha['descricao'] . '</p>';
                    echo '   <a href="#" class="btn btn-primary">Visitar</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    $i++; // incremento o contador
                }
            }
            ?>
        </div>
    </div>
</main>

<script>
    const h5 = document.querySelectorAll('h5');
    console.log(h5);
    h5[0].innerText = "Troquei o titulo";

    h5.forEach(function(index, element) {
        console.log(element);
        console.log(index);
    })


    const titulo3 = document.getElementById('titulo_2');
    titulo3.innerText = "Troquei o titulo 3"; // troca o que esta dentro da tag

    const links = document.querySelectorAll('.card a');

    links.forEach(function(element, index) {
        console.log("Achei os as: ", element);
        element.href = "https://www.google.com.br";
    })

    /*
        Crie um código que troque o título de 
        cada h5 para "Título n" onde n é o número
    */
    const todos_h5 = document.querySelectorAll('h5');
    todos_h5.forEach(function(element, index) {
        element.innerText = 'Título' + index;
    })


    // objeto em javascript
    let pessoa = {
        nome: "Onofre Junior",
        profissão: "estudante",
        sexo: "Masculino",
        CPF: '123.456.789-00'
    }
    console.log("Nome:", pessoa['nome']);
    console.log("Nome:", pessoa.nome);

    // array em javascript
    let funcionario = [
        'Onofre Pai',
        'CEO',
        'sem genero',
        '123456789-01'
    ];
    console.log(funcionario[0])


    // esta variável precisa ser iniciada fora 
    // pq vamos incrementa-la por meio de uma função
    // e posteriormente poderemos trabalhar esta variavel
    let listaPessoas = [];

    function adicionarPessoa(nome, profissao) {
        let pessoa = {
            nome: nome,
            profissao: profissao
        }
        listaPessoas.push(pessoa);
    }

    adicionarPessoa("Fausto", 'Professor');
    adicionarPessoa("Juana", 'Camareira');
    adicionarPessoa("João", 'Motociclista');
    console.log(pessoa);
</script>


<?php
include __DIR__ . "/footer.php";
?>