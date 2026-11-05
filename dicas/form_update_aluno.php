<?php

require 'conexao.php';

$id = $_GET['id'];

$consulta = $pdo->prepare('SELECT * FROM alunos WHERE id = ?');
$consulta->execute([$id]);

$aluno = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<h2>Editar Aluno:</h2>
<form method="post" action="action_update_aluno.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nome: <input name="nome" value="<?= $aluno['nome'] ?>"><br>
    E-mail: <input name="email" value="<?= $aluno['email'] ?>"><br>
    Data de nascimento: <input type="date" name="data_nascimento" value="<?= $aluno['data_nascimento'] ?>"><br>
    Telefone: <input type="number" name="telefone" value="<?= $aluno['telefone'] ?>"><br>
    <button>Editar</button>
</form>