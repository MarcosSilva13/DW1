<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Estudantes</title>
</head>
<body>
    <h1>***Estudantes Cadastrados***</h1>
    <?php
    require_once './modelo/Student.php';
    require_once './dao/DaoStudent.php';

    $dao = new DaoStudent();

    $lista = $dao->lista();

    foreach ($lista as $valores) {
        echo 'RA: ' . $valores['Ra'] . '<br>';
        echo 'NOME: ' . $valores['Name'] . '<br>';
        echo 'IDADE: ' . $valores['Age'] . '<br>';
        echo 'CPF: ' . $valores['Cpf'] . '<br>';
        echo '--------------------------------<br>';
    }
    ?>
    <a href="form.php?valor=1" id="cad">Cadastrar</a>
    <a href="listagem.php" id="tab">Ver em tabela</a>
    <a href="listagemDisc.php" id="disc">Ver Disciplinas</a>
</body>
</html>



