<?php

require 'conexao.php';

$id = $_GET['id'];


$consulta = $pdo->prepare('DELETE FROM alunos WHERE id = ?');
$consulta->execute([$id]);

echo "Aluno deletado!";