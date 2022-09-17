<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Exclusão de Disciplina</title>
</head>
<body>
    <h1>***Exclusão de Disciplina***</h1>
    <?php
        require_once './modelo/Subjects.php';
        require_once './dao/Conexao.php';
        require_once './dao/DaoSubjects.php';

        $id = filter_input(INPUT_POST, 'IdSubject');

        $subject = new Subjects($id, null, null);

        $dao = new DaoSubjects();
        
        if ($dao->exclui($subject)) {
            echo '<h3>Deletado com sucesso!</h3><br>';
        } else {
            echo '<h3>Deu erro!</h3><br>';
        }
    ?>
    <a href="disciplina.php">Voltar</a>
</body>
</html>