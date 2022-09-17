<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Disciplinas</title>
</head>
<body>
    <h1>***Disciplinas***</h1>
    <?php
        require_once './modelo/Subjects.php';
        require_once './dao/DaoSubjects.php';

        $dao = new DaoSubjects();

        $listaSub = $dao->lista();

        foreach ($listaSub as $valores) {
            echo 'Id: ' . $valores['IdSubject'] . '<br>';
            echo 'NOME: ' . $valores['Name'] . '<br>';
            echo 'Número de Horas: ' . $valores['NumberHour'] . '<br>';
            echo '--------------------------------<br>';
        }
    ?>
    <a href="formCadastroDisciplina.php">Cadastrar</a>
    <a href="listagemDisc.php">Ver em tabela</a>
    <a href="index.php">Voltar</a>
</body>
</html>