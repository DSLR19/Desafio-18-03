<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio com GET</title>
</head>
<body>
    <h2>Desafio com GET</h2>
    <form action="welcome.php" method="get">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<!-- welcome.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <?php
    if(isset($_GET['nome'])) {

        $nome = $_GET["nome"];
        echo "Nome: " . $nome;

    }
    ?>
</body>
</html>
