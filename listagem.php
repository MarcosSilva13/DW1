<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Document</title>
</head>
<body>
    <h1>***Lista de Estudantes***</h1>
    <table>
        <tr>
            <th>Ra</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cpf</th>
        </tr>

        <?php
        require_once './dao/DaoStudent.php';
        $dao = new DaoStudent();

        $lista = $dao->lista();

        foreach ($lista as $valores) {
            echo '<tr>';
            echo '<td>' . $valores['Ra'] . '</td>';
            echo '<td>' . $valores['Name'] . '</td>';
            echo '<td>' . $valores['Age'] . '</td>';
            echo '<td>' . $valores['Cpf'] . '</td>';
            echo '</tr>';
        }
        ?>
        
    </table>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>