<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <div class="form">
        <h2> Cadastro de Alunos</h2>
        <form action="cadastro_alunos.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];

    $conexao = mysqli_connect("localhost", "root", "", "banco");
    $query = "INSERT INTO alunos (nome, matricula) VALUES ('$nome', '$matricula')";
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
}
?>
     
    