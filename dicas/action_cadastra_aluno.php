<?php

	require 'conexao.php';
    $nome = $_POST['nome'];
		$email = $_POST['email'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];

    
echo "fazendo conexão com o banco de dados ... <br>";


echo "Inserindo dados no banco ... <br>";
$comando = $pdo->prepare(
    'INSERT INTO alunos (nome, email, data_nascimento, telefone) VALUES (?, ?, ?, ?)'
);
$comando->execute([$nome, $email, $data_nascimento, $telefone]);