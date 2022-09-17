<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Listagem</title>
</head>

<body>
    <h1>***Lista de Disciplinas***</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Horas</th>
            <th>Ações</th>
        </tr>

        <?php
        require_once './dao/DaoSubjects.php';
        $dao = new DaoSubjects();

        $listaSub = $dao->lista();

        foreach ($listaSub as $valores) {
            echo '<tr>';
            echo '<td>' . $valores['IdSubject'] . '</td>';
            echo '<td>' . $valores['Name'] . '</td>';
            echo '<td>' . $valores['NumberHour'] . '</td>';
            echo '<td> 
                <form action="excluirDisciplina.php" method="POST">
                <input type="hidden" name="IdSubject" id="Id" value="' . $valores['IdSubject'] . '"/>
                <input type="submit" id="excluir" value="Excluir"/>
                </form></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <a href="disciplina.php">Voltar</a>
</body>
</html>