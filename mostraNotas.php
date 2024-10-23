<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos da Turma</title>
</head>
<body>
    <form action="mostraAluno.php">
    <label for="nota">Nota</label>
	<select name="idNota"> 
    <?php
    include 'conexão.php';
    $comandoSQL = 'SELECT `valor`* FROM `notas` WHERE `id_aluno` = 1';
?>
</select>
    </form>
</body>
</html>