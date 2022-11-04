<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Js</title>

    <script>
        window.addEventListener('load', () => {
            fetch('./estados.php')
            .then((response) => {
                return response.json();
                console.log(response);
            })
            .then((json) => {
                let est = document.getElementById('estado');
                for (let i = 0; i < json.length; i++) {
                    let op = document.createElement('option');
                    op.value = json[i].sigla;
                    op.innerText = json[i].nome;
                    est.append(op);
                }
            })

            document.getElementById('estado').addEventListener('change', () => {
                const estado = document.getElementById('estado').value;
                fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado+'/municipios')
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    let cidades = document.getElementById('cidade');
                    cidades.innerHTML = '';
                    for (let i = 0; i < json.length; i++) {
                        let option = document.createElement('option');
                        option.innerText = json[i].nome;
                        cidades.append(option);
                        
                    }
                    console.log(json[0].nome);
                })
                
            });

            document.querySelector('button').addEventListener('click', () => {
                const dados = new FormData(document.forms[0]);
                //const dados = new FormData();
                dados.append('nome', document.forms[0].nome);
                dados.append('endereco', document.forms[0].endereco);
                dados.append('estado', document.forms[0].estado);
                dados.append('cidade', document.forms[0].cidade);
                const config = {
                    method: 'POST',
                    body: dados
                };

                fetch('./cadastroTeste.php', config)
                .then((response) => {
                    return response.json();
                })
                .then((json) => {
                    console.log(json);
                    let p = document.querySelector('p');
                    p.innerText = json.mensagem;
                    if (json.status == 'ok') {
                        p.style.color = 'blue';
                    } else {
                        p.style.color = 'red';
                    }
                })
            });

            document.forms[0].addEventListener('submit', (event) => {
                event.preventDefault();
            });
        });

    </script>
</head>
<body>
    <form action="">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco"><br><br>
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <option value="">Selecione um Estado</option>
        </select>
        <br><br>
        <label for="cidade">Cidade</label>
        <select name="cidade" id="cidade">
        </select><br><br>
        <button>Salvar</button>
    </form>

    <p></p>
</body>
</html>