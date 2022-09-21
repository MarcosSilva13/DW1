<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/estilo.css"/>
    <title>Cadastro Disciplinas</title>
</head>
<body>
    <h1>***Cadastro de Disciplinas***</h1>
    <form class="formulario" action="cadastroDisciplina.php" method="POST">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id"/>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" maxlength="100"/>
        
        <label for="hora">Número de horas:</label>
        <input type="number" name="hora" id="hora"/>
        
        <input type="submit" id="env" value="Enviar"/> 
        <a href="listagemDisc.php">Voltar</a>
    </form>
</body>
</html>