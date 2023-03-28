<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Calculator</title>
		<!--css bootstrap-->
		<!--css only-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<!--javascript-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
		<!--css-->
		<link rel="stylesheet" href="style.css">
		<!--font google-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1>Calculadora</h1>
			<div id="calculator">
					<form action="" method="post">
						<div id="display">
							<div id="results">
								Resultado
								<!--php-->
								<?php
									if(isset($_POST['acao'])):
									$n1 = str_replace(',','.', $_POST['n1']);
									$n2 = str_replace(',', '.', $_POST['n2']);
									$tipo = $_POST['tipo'];
										if($tipo=='+'):
											$calcular = $n1 + $n2;
										elseif($tipo == '-'):
											$calcular = $n1 - $n2;
										elseif($tipo == '/'):
											$calcular = $n1 / $n2;
										else:
											$calcular = $n1 * $n2;
										endif;
										$calcular = str_replace('.',',', $calcular);
										echo "$n1 $tipo $n2 igual a $calcular";
									endif;
								?>
								<!--fim pgp-->
							</div>
						</div>
						<div id="keybord">
							<div class="row">
								<div class="col-12">
									<input type="text" name="n1" class="form-control mb-3" placeholder="Digite um número" required>
								</div>
								<div class="col-12">
									<select class="form-select mb-3 bg-info" name="tipo" required>
										<option selected>Selecione um operador</option>
										<option value="+">+</option>
										<option value="-">-</option>
										<option value="*">*</option>
										<option value="/">/</option>
									</select>
								</div>
								<div class="col-12">
									<input type="text" name="n2" class="form-control mb-3" placeholder="Digite um número" required="">
								</div>
								<div class="col-12">
									<button type="submit" class="btn btn-danger" name="acao">=</button>
								</div>
							</div>
						</div>						
					</form>
			</div>
		</div>
		
	</body>
</html>