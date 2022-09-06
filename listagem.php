<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>***Lista de Alunos***</h1>

    <table style="width: 600px; border-collapse: collapse">
    
        <tr>
            <th style="border: 2px solid #000; padding: 5px; text-align: center; background: #ccc;">Ra</th>
            <th style="border: 2px solid #000; padding: 5px; text-align: center; background: #ccc;">Nome</th>
            <th style="border: 2px solid #000; padding: 5px; text-align: center; background: #ccc;">Idade</th>
            <th style="border: 2px solid #000; padding: 5px; text-align: center; background: #ccc;">Cpf</th>
        </tr>

        <?php
        require_once './dao/DaoStudent.php';
        $dao = new DaoStudent();

        $lista = $dao->lista();

        foreach ($lista as $valores) {
            echo '<tr>';
            echo '<td style= "border: 2px solid #000; padding: 5px; text-align: center;">' . $valores['Ra'] . '</td>';
            echo '<td style= "border: 2px solid #000; padding: 5px; text-align: center;">' . $valores['Name'] . '</td>';
            echo '<td style= "border: 2px solid #000; padding: 5px; text-align: center;">' . $valores['Age'] . '</td>';
            echo '<td style= "border: 2px solid #000; padding: 5px; text-align: center;">' . $valores['Cpf'] . '</td>';
            echo '</tr>';
        }

        ?>
        
    </table>
    
</body>
</html>