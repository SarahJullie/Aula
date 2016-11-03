<!DOCTYPE html>
<html lang="pt-br">
	<head>
	</head>
	<body>
		<form method="POST" action="verifica_login.php">
            <?php
                $msg = @$_GET["msg"];
                if(@$msg == 1){
                    echo "Dados incorretos.";
                }
            ?>
			<h3>Login</h3>
            <label for="email">E-mail</label><br>
            <input type="email" name="email"><br>
            <label for="senha">Senha</label><br>
            <input type="password" name="senha"><br>
			<button type="submit" name="entrar">Entrar</button><br>
		</form>
	</body>
</html>