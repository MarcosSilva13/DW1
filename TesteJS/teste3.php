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
        });


        window.addEventListener('load', () => {
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
        });
    </script>
</head>
<body>
    <form action="">
        <label for="estado">Estado</label>
        <select name="estado" id="estado">
            <option value="">Selecione um Estado</option>
        </select>
        <br>
        <label for="cidade">Cidade</label>
        <select name="cidade" id="cidade">
        </select>
    </form>
</body>
</html>