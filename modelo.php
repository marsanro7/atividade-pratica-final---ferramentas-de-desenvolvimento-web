<!DOCTYPE html>

<html lang= "pt-br">
	<head>
		<meta charset= "utf-8"/>
		<title> Brincart </title>
	</head>
	<body>
		<?php   
				
				$email = isset ($GET["email"])? $_GET["email"]: "[nao informado]";
				
				if(filter_var($email, filter_validate_email)){
					echo "Email cadastrado com sucesso";
				}else{
					echo "Email incorreto";
				}		
		?> 	
	</body>
</html>