<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Exclusão de Estudante</title>
</head>
<body>
    <h1>Exclusão de Estudante</h1>
    <?php
        require_once './modelo/Student.php';
        require_once './dao/Conexao.php';
        require_once './dao/DaoStudent.php';

        $ra = filter_input(INPUT_POST, 'Ra');

        $student = new Student($ra, null, null, null);

        $dao = new DaoStudent();
        
        if ($dao->exclui($student)) {
            echo '<h3>Deletado com sucesso!</h3><br>';
        } else {
            echo '<h3>Deu erro!</h3><br>';
        }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>