<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "./dao/DaoStudent.php";
        require_once "./modelo/Student.php";

        // $ra = $_POST['ra'] ?? null; perigoso

        $ra = filter_input(INPUT_POST, 'ra');
        $nome = filter_input(INPUT_POST, 'nome');
        $idade = filter_input(INPUT_POST, 'idade');
        $cpf = filter_input(INPUT_POST, 'cpf');
        echo "Ra: $ra<br>";
        echo "Nome: $nome<br>";
        echo "Idade: $idade<br>";
        echo "Cpf: $cpf<br><br>";

        if ($ra && $nome && $idade && $cpf) {
            $obj = new Student($ra, $nome, $idade, $cpf);
            $dao = new DaoStudent();

            if ($dao->inclui($obj)){
                echo '<h3>Dados cadastrados com sucesso!</h3><br>';
            } else {
                echo '<h3>Não foi possível cadastrar!</h3><br>';
            }
        } else {
            echo '<h3>Dados ausentes ou incorretos!</h3><br>';
        }
    ?>
    <a href="index.php" style="font-size: 20px;">Voltar</a>
</body>
</html>