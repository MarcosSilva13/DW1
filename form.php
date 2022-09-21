<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css" />
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'dao/DaoStudent.php';

    $acao = filter_input(INPUT_GET, 'acao');

    switch ($acao) {
        case 1:
            $h1 = '***Cadastro de Estudante***';
            $labelRa = '';
            $typeRa = 'number';
            $typeNome = 'text';
            $typeIdade = 'number';
            $typeCpf = 'text';
            $student['Ra'] = '';
            $student['Name'] = '';
            $student['Age'] = '';
            $student['Cpf'] = '';
        break;
        case 2:
            $ra = filter_input(INPUT_GET, 'Ra');
            $dao = new DaoStudent();
            $lista = $dao->localiza($ra);
            $student = $lista[0];

            $h1 = '***Edição de Estudante***';
            $labelRa = 'hidden';
            $typeRa = 'hidden';
            $typeNome = 'text';
            $typeIdade = 'number';
            $typeCpf = 'text';
        break;
    }
    ?>

    <h1><?= $h1 ?></h1>

    <form class="formulario" action="./visao/cadastroEdita.php" method="POST">
        <label <?= $labelRa ?> for="ra">Ra:</label>
        <input type="<?= $typeRa ?>" name="ra" id="ra" value="<?= $student['Ra'] ?>" />

        <label for="nome">Nome:</label>
        <input type="<?= $typeNome ?>" name="nome" id="nome" maxlength="100" value="<?= $student['Name'] ?>" />

        <label for="idade">Idade:</label>
        <input type="<?= $typeIdade ?>" name="idade" id="idade" value="<?= $student['Age'] ?>" />

        <label for="cpf">CPF:</label>
        <input type="<?= $typeCpf ?>" name="cpf" id="cpf" maxlength="14" value="<?= $student['Cpf'] ?>" />

        <input type="hidden" name="acao" value="<?= $acao ?>" />
        <input type="submit" id="env" value="Salvar" />
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>