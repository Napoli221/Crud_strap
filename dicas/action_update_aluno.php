<?php

require 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];
$telefone = $_POST['telefone'];
$id = $_POST['id'];

    

$comando = $pdo->prepare(
    'UPDATE alunos SET nome = ?, email = ?, data_nascimento = ?, telefone = ? WHERE id = ?'
);
$comando->execute([ $nome, $email, $data_nascimento, $telefone, $id ]);

echo "Dados inseridos!! <br>";