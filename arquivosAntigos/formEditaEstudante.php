<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Editar</title>
</head>
<body>

    <?php
        require_once './dao/DaoStudent.php';
        require_once './dao/Conexao.php';
        require_once './modelo/Student.php';

        $ra = filter_input(INPUT_GET, 'Ra');

        $dao = new DaoStudent();
        $lista = $dao->localiza($ra);

        $student = $lista[0];
    ?>

    <h1>***Edição de Estudante***</h1>
    <form class="formulario" action="editaEstudante.php" method="POST">
        <input type="hidden" name="ra" id="ra" value="<?= $student['Ra'] ?>"/>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"  maxlength="100" value="<?= $student['Name'] ?>"/>
        
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" value="<?= $student['Age'] ?>"/>
        
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" maxlength="14" value="<?= $student['Cpf'] ?>"/>
        
        <input type="submit" id="env" value="Salvar"/> 
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>