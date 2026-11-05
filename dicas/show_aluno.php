<?php

require 'conexao.php';

$id = $_GET['id'];


$consulta = $pdo->prepare('SELECT * FROM alunos WHERE id = ?');
$consulta->execute([$id]);

$aluno = $consulta->fetch(PDO::FETCH_ASSOC);

echo "<h2>Detalhes do Aluno:</h2>";
echo "Id: ".$aluno['id']."<br>";
echo "Nome: ".$aluno['nome']."<br>";
echo "E-mail: ".$aluno['email']."<br>";
echo "Data de Nascimento: ".$aluno['data_nascimento']."<br>";
echo "Telefone: ".$aluno['telefone']."<br>";