<?php

require 'conexao.php';


$consulta = $pdo->prepare('SELECT * FROM alunos');
$consulta->execute([]);

$alunos = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Listagem de alunos</h2>

<a href="/form_cadastra_aluno.php">Cadastrar Aluno</a> <br><br>


<?php
foreach($alunos as $aluno){
?>
    <?= $aluno['id'] ?> - <?= $aluno['nome'] ?> -
    <a href="/show_aluno.php?id=<?= $aluno['id'] ?>">Detalhes</a> -
    <a href="/form_update_aluno.php?id=<?= $aluno['id'] ?>">Editar</a> -
    <a href="/action_delete_aluno.php?id=<?= $aluno['id'] ?>">Deletar</a>
    <br>
 <?php   
}
?>
