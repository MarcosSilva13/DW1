<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atividade11.css">
    <script src="atividade11.js"></script>
    <title>Atividade 11</title>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="">
        <label for="ra">RA</label>
        <input type="number" name="ra" id="ra">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">
        
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf" oninput="mascara(this, 'cpf')">
        <button>Cadastrar</button>
    </form>
    <p></p>
</body>
</html>