<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>LoginSeguro - Login</title>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

    

		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">


		<!-- Custom CSS -->
		<link href="css/sb-admin-2.css" rel="stylesheet">
		
		
	</head>
	<body>
		
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php 
                        if(isset($erro)) 
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php 
                            }
                            ?>
		
							<form method="POST" action="valida.php">
							<label>Usuário</label>
							<input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>
			
							<label>Senha</label>
							<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
			
							<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">
		
							</form>	
                    </div>
                </div>
            </div>
        </div>
    </div>							
		<br><br><br>
	</body>
</html>