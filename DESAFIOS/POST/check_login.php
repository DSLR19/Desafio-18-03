<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Login</title>
</head>
<body>
    <?php
    if(isset($_POST['username']) && isset($_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if ($username === 'admin' && $password === 'admin123') {
            echo "<h2>Login bem sucedido!</h2>";
        } else {
            echo '<div class="container"><p class="error">Usuário ou senha incorretos!</p></div>';
        }
	
    }
    ?>
</body>
</html>
