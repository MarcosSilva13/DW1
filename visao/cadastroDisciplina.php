<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/estilo.css"/>
    <title>Confimação</title>
</head>
<body>
    <?php
        require_once '../dao/DaoSubjects.php';
        require_once '../modelo/Subjects.php';

        $id = filter_input(INPUT_POST, 'id');
        $nome = filter_input(INPUT_POST, 'nome');
        $horas = filter_input(INPUT_POST, 'hora');
        echo "Id: $id<br>";
        echo "Nome: $nome<br>";
        echo "Horas: $horas H <br><br>";

        if ($id && $nome && $horas) {
            $obj = new Subjects($id, $nome, $horas);
            $dao = new DaoSubjects();

            if ($dao->inclui($obj)){
                echo '<h3>Dados cadastrados com sucesso!</h3><br>';
            } else {
                echo '<h3>Não foi possível cadastrar!</h3><br>';
            }
        } else {
            echo '<h3>Dados ausentes ou incorretos!</h3><br>';
        }
    ?>
    <a href="listagemDisc.php">Voltar</a>
</body>
</html>