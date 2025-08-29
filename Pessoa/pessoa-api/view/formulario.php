<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pessoa</title>
</head>
<body>
    <h1>Cadastro de Pessoa</h1>
    <form action="../controller/controlePessoa.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>