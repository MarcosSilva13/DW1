<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>***Cadastro de Estudante***</h1>
    <form action="cadastroEstudante.php" method="POST">
        <label for="ra">Ra: </label>
        <input type="number" name="ra" id="ra" size="10" maxlength="10">
        <br><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" size="20" maxlength="20">
        <br><br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" size="10" maxlength="3">
        <br><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" size="15" maxlength="14">
        <br><br>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>