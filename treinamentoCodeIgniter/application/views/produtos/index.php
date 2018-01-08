<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="main">
			
		</div>
		<div class="content"> 
			<h1>Produtos</h1>
			<table>
				<?php foreach ($produtos as $produto) :?>
				<tr>
					<td><?= $produto["nome"] ?></td>
					<td><?= $produto["preco"] ?></td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
		<div class="footer">
			
		</div>
	</div>

</body>
</html>