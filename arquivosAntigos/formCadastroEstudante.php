<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Cadastro</title>
</head>
<body>
    <h1>***Cadastro de Estudante***</h1>

    <?php
        $valor = filter_input(INPUT_GET, 'valor');
        echo $valor;
    ?>
    <form class="formulario" action="cadastroEstudante.php" method="POST">
        <label for="ra">Ra: </label>
        <input type="number" name="ra" id="ra"/>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" maxlength="100"/>
        
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade"/>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" maxlength="14"/>
        
        <input type="submit" id="env" value="Enviar"/> 
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>