<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once './modelo/Student.php';
    require_once './dao/DaoStudent.php';

    //$obj = new Student(100, 'Marcos', 30, '111.111.111-11');
    $dao = new DaoStudent();

    /*if ($dao->inclui($obj)) {
        echo 'Aluno adicionado com sucesso!';
    } else {
        echo 'Não foi possivel adicionar o aluno!';
    }*/

    /*if ($dao->exclui($obj)) {
        echo 'Aluno removido com sucesso!<br>';
    } else {
        echo 'Não foi possivel remover o aluno!<br>';
    }*/

    /*if ($dao->altera($obj) > 0) {
        echo 'Dados do aluno atualizados com sucesso!<br>';
    } else {
        echo 'Não foi possivel alterar os dados do aluno!<br>';
    }*/

    $lista = $dao->lista();

    echo "<br>****** LISTA DE ALUNOS ******<br>";

    foreach ($lista as $valores) {
        echo 'RA: ' . $valores['Ra'] . '<br>';
        echo 'NOME: ' . $valores['Name'] . '<br>';
        echo 'IDADE: ' . $valores['Age'] . '<br>';
        echo 'CPF: ' . $valores['Cpf'] . '<br>';
        echo '--------------------------------<br>';
    }



    /*foreach ($lista as $valores){
        foreach ($valores as $chave => $valor) {
            echo strtoupper($chave) . ': ' . $valor . '<br>';
        }
        echo '--------------------------------------<br>';
    }*/
    ?>
    <a href="formCadastroEstudante.php" style="font-size: 20px;">Cadastrar</a>

</body>
</html>



