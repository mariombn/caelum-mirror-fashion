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
		<form>
			<fieldset>
				<legend>Dados pessoais</legend>
				
				<div class="form-group">
					<label for="nome">Nome completo</label>
					<input type="text" name="nome" id="nome" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label for="email">E-Mail</label>
					<div class="input-group">
						<span class="input-group-addon">@</span>
						<input type="email" name="email" id="email" class="form-control" placeholder="exemplo@dominio.com">
					</div>
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" name="cpf" id="cpf" class="form-control" placeholder="999.999.999-99">
				</div>

				<div class="checkout">
					<label>
						<input type="checkbox" name=" spam" value="sim" checked>
						Quero receber sam da Mirror Fashion
					</label>
				</div>

			</fieldset>

			<fieldset>
				<legend>Cartão de credito</legend>
				
				<div class="form-group">
					<label for="numero-cartao">Número Cartão - CVV</label>
					<input type="text" name="numero-cartao" id="numero-cartao" class="form-control">
				</div>

				<div class="form-group">
					<label for="bandeira">Bandeira</label>
					<select name="bandeira" id="bandeira" class="form-control">
						<option value="master">MasterCard</option>
						<option value="visa">Visa</option>
						<option value="american">American Express</option>
					</select>
				</div>

				<div class="form-group">
					<label for="numero-cartao">Validade</label>
					<input type="month" name="validade" id="validade" class="form-control">
				</div>

			</fieldset>
			<button type="submit" class="btn btn-lg pull-right btn-primary">
				<span class="glyphicon glyphicon-thumbs-up"></span>
				Confirmar Pedido
			</button>
		</form>
	</div>
</body>
</html>