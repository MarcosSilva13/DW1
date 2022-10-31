<?php
$nome = filter_input(INPUT_POST, 'nome');
$endereco = filter_input(INPUT_POST, 'endereco');
$estado = filter_input(INPUT_POST, 'estado');
$cidade = filter_input(INPUT_POST, 'cidade');

$retorno = [];

if ($nome && $endereco && $estado && $cidade) {
    //fazer gravação no banco
    $retorno = ['status' => 'ok', 
    'mensagem' => 'Dados gravados com sucesso.'
    ];
} else {
    $retorno = ['status' => 'error', 
    'mensagem' => 'Dados ausentes.'
    ];
}

echo json_encode($retorno);