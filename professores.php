<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Professores</title>
</head>
<body>
    <div class="form">
        <h2> Cadastro de Professores</h2>
        <form action="cadastro_professores.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="disciplina">Disciplina:</label>
            <input type="text" id="disciplina" name="disciplina" required><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $matricula = $_POST["disciplina"];

    $conexao = mysqli_connect("localhost", "usuario", "senha", "banco");
    $query = "INSERT INTO professores (nome, disciplina) VALUES ('$nome', '$disciplina')";
    mysqli_query($conexao, $query);
    mysqli_close($conexao);
}
?>
     
    