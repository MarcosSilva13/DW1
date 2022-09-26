<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css"/>
    <title>Estudantes</title>
</head>

<body>
    <h1>***Lista de Estudantes***</h1>
    <table>
        <tr>
            <th>Ra</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cpf</th>
            <th>Ações</th>
            <th>Ações</th>
        </tr>

        <?php
        require_once 'dao/DaoStudent.php';
        $dao = new DaoStudent();

        $lista = $dao->lista();
    
        foreach ($lista as $valores) {
            echo '<tr>';
            echo '<td>' . $valores['Ra'] . '</td>';
            echo '<td>' . $valores['Name'] . '</td>';
            echo '<td>' . $valores['Age'] . '</td>';
            echo '<td>' . $valores['Cpf'] . '</td>';
            echo '<td><a id="editar" href="form.php?Ra=' . $valores['Ra'] . '&acao=2">Editar</a></td>';
            echo '<td>
                <form action="excluirEstudante.php" method="POST">
                <input type="hidden" name="Ra" id="Ra" value="' . $valores['Ra'] . '"/>
                <input type="submit" id="excluir" value="Excluir"/>
                </form></td>';
            //echo '<td><a id="excluir" href="excluirEstudante.php?Ra=' . $valores['Ra'] . '">Exluir</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <br>
    <a href="form.php?acao=1" id="cad">Cadastrar</a>
    <a href="./visao/listagemDisc.php" id="disc">Ver Disciplinas</a>
    <br>
    
    <button class="botaoTipo1">Botão 1</button>
    <button class="botaoTipo1">Botão 2</button>
    <button class="botaoTipo2">Botão 3</button>
    <button class="botaoTipo2">Botão 4</button>
    <button class="botaoTipo3">Botão 5</button>

    <p id="p1">Paragráfo com ID</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum totam autem, dolorem molestiae cumque placeat possimus est repellendus. 
        Veniam deleniti vitae asperiores distinctio nulla ipsum? Quam architecto quisquam voluptate exercitationem!</p>

</body>
</html>