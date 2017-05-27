<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2 class="panel-title">Sua compra</h2>
			</div>
			<div class="panel-body">
				<img src="img/produtos/foto2-<?php echo $_POST['cor'] ?>.png" alt="<?php echo $_POST['nome'] ?>" class="img-thumbnaul img-responsive">
				<dl>
					<dt>Tamanho</dt>
					<dd><?php echo $_POST['nome'] ?></dd>

					<dt>Tamanho</dt>
					<dd><?php echo $_POST['preco'] ?></dd>

					<dt>Cor</dt>
					<dd><?php echo $_POST['cor'] ?></dd>

					<dt>Tamanho</dt>
					<dd><?php echo $_POST['tamanho'] ?></dd>
				</dl>
			</div>
		</div>
	</div>
</body>
</html>