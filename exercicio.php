<?php
include __DIR__ . '/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Exercício</h1>
                <p>Exercício de PHP</p>

                <form action="">
                    <div>
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="">
                    </div>
                    <div>
                        <label for="profissao" class="form-label">Profissão</label>
                        <input type="text" class="form-control" name="profissao" id="profissao">
                    </div>
                    <div>
                        <label for="sexo" class="form-label"></label>
                        <select name="sexo" id="sexo">
                            <option value="selecione" disabled>Selecionar</option>
                            <option value="Feminino">Sexo Feminino</option>
                            <option value="Masculino">Sexo Masculino</option>
                            <option value="Outros"> Outros</option>
                        </select>
                    </div>
                    <div>
                        <button id="executar">Adicionar Pessoa</button>
                    </div>
                </form>
                <table class="table" id="tabelaPessoas">
                    <tr>
                        <td>Nome</td>
                        <td>Profissão</td>
                        <td>Sexo</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    let listaPessoas = [];

    function adicionarPessoa(nome, profissao) {
        let pessoa = {
            nome: nome,
            profissao: profissao
        };
        listaPessoas.push(pessoa);
        console.log(listaPessoas);
    }

    function cadastrarPessoa() {
        let nome = document.getElementById('nome').value;
        let profissao = document.getElementById('profissao').value;
        adicionarPessoa(nome, profissao);
    }

    const botao = document.getElementById('executar');

    botao.addEventListener('click', function(e) {
        e.preventDefault(); // previne o comportamento padrão do botão

        cadastrarPessoa();
        adicionarATabela();
    });

    function adicionarATabela() {
        // Cria um elemento virtual tr no DOM
        let tr = document.createElement('tr');
        // Cria dois elementos virtuais td no DOM
        let tdNome = document.createElement('td');
        let tdProfissao = document.createElement('td');
        let tdSexo = document.createElement('td');

        // Pega os valores dos inputs e coloca dentro dos tds
        tdNome.innerText = document.getElementById('nome').value;
        tdProfissao.innerText = document.getElementById('profissao').value;

        let selecaoSexo = document.getElementById('sexo').value;
        console.log(selecaoSexo);
        tdSexo.innerText = selecaoSexo;

        // inicio o processo de criação do botão trash
        btTrash = document.createElement('i');
        // adiciono a este elemento virtual as classes do bootstrap icons
        btTrash.classList.add('bi', 'bi-trash');
        // adiciono um valor vazio para o botão trash
        btTrash.innerText = " ";

        // antes de adicionar o botão trash ao tdProfissao, 
        // preciso adicionar um evento de click
        btTrash.addEventListener('click', function(e) {
            // previno o comportamento padrão do botão
            e.preventDefault();
            // removo o elemento pai do elemento que foi clicado
            tr.remove();
        })

        // finalmente insiro o botão trash dentro do tdProfissao
        tdProfissao.appendChild(btTrash);

        // pego a tabela e insiro os tds dentro da tr
        const tabela = document.getElementById('tabelaPessoas');

        // insiro os tds dentro da tr
        tr.appendChild(tdNome);
        tr.appendChild(tdProfissao);
        tr.appendChild(tdSexo);

        // por final insiro a tr dentro da tabela
        tabela.appendChild(tr);

    }

    /*
     * exercício 1: crie um elemento Select em HTML que selecione o Gênero da pessoa
     * Neste caso teremos Masculino, feminino e outros.
     * deve-se colocar este gênero na tabela também e no objeto pessoa
     * Link: https://getbootstrap.com/docs/5.0/forms/select/
     */

     // resolvido acima

    /* */
</script>



<?php
include __DIR__ . '/footer.php';
?>