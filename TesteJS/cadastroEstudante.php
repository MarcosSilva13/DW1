<?php
require_once '../dao/Conexao.php';
require_once '../dao/DaoStudent.php';
require_once '../modelo/Student.php';

$dao = new DaoStudent();

$ra = filter_input(INPUT_POST, 'ra');
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$cpf = filter_input(INPUT_POST, 'cpf');

$retorno = [];

if ($ra && $nome && $idade && $cpf) {
    $obj = new Student($ra, $nome, $idade, $cpf);

    if ($dao->inclui($obj)) {
        $retorno = ['status' => 'ok', 'mensagem' => 'Aluno cadastrado com sucesso!'];
    } else {
        $retorno = ['status' => 'error', 'mensagem' => 'Não foi possivel cadastrar!'];
    }
} else {
    $retorno = ['status' => 'error', 'mensagem' => 'Dados ausentes!'];
}

echo json_encode($retorno);