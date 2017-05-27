
<?php $cabecalho_title = "Produtos Mirror Fashion"  ?>
<?php $style = "produto.css" ?>
<?php include 'cabecalho.php' ?>
<div class="produto-black">
	<div class="conteiner">
		<div class="produto">
			<h1>Fuzzy Cardigan</h1>
			<p>por apenas R$ 129,00</p>

			<form>
				<fieldset class="cores">
					<legend>Escolha a cor:</legend>

					<input type="radio" name="cor" value="verde" id="verde" checked>
					<label for="verde">
						<img src="img/produtos/foto2-verde.png" alt="verde">
					</label>

					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa">
						<img src="img/produtos/foto2-rosa.png" alt="rosa">
					</label>

					<input type="radio" name="cor" value="azul" id="azul">
					<label for="azul">
						<img src="img/produtos/foto2-azul.png" alt="azul">
					</label>
				</fieldset>
				<fieldset class="tamanho">
					<legend>Escolha o tamanho:</legend>
					<input type="range" name="tamanho" id="tamanho" min="36" max="46" value="42" step="2">
					
				</fieldset>
				<input type="submit" value="Comprar" class="comprar">
			</form>
		</div>
		<div class="detalhes">
			<h2>Detalhes do Produto</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

			<table>
				<thead>
					<tr>
						<th>Caracteristica</th>
						<th>Detalhe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa ou Verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?php include 'rodape.php' ?>