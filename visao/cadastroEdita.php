<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilo/estilo.css" />
    <title>Confimação</title>
</head>

<body>
    <?php
    require_once '../dao/DaoStudent.php';
    require_once '../modelo/Student.php';

    $acao = filter_input(INPUT_POST, 'acao');

    $ra = filter_input(INPUT_POST, 'ra');
    $nome = filter_input(INPUT_POST, 'nome');
    $idade = filter_input(INPUT_POST, 'idade');
    $cpf = filter_input(INPUT_POST, 'cpf');

    if ($ra && $nome && $idade && $cpf) {
        $obj = new Student($ra, $nome, $idade, $cpf);
        $dao = new DaoStudent();

        switch ($acao) {
            case 1:
                if ($dao->inclui($obj)) {
                    echo '<h3>Dados cadastrados com sucesso!</h3><br>';
                } else {
                    echo '<h3>Não foi possível cadastrar!</h3><br>';
                }
                break;
            case 2:
                if ($dao->altera($obj)) {
                    echo '<h3>Dados atualizados com sucesso!</h3><br>';
                } else {
                    echo '<h3>Não foi possível atualizar!</h3><br>';
                }
                break;
        }
    } else {
        echo '<h3>Dados ausentes ou incorretos!</h3><br>';
    }
    ?>
    <a href="../index.php">Voltar</a>
</body>

</html>