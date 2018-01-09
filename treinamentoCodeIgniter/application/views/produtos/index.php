<!DOCTYPE html>
<html>
<head>
		<meta http-equiv="Content-type" content="text/html" charset="utf-8">

	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url("css/bootstrap.min.css")?>">
</head>
<body>
	<div class="container">
		<div class="main">
						<?php if ($this->session->flashdata("success")): ?>

			<p class="alert alert-success">			
				<?= $this->session->flashdata("success")  ?>
			</p>
		<?php endif ?>
								<?php if ($this->session->flashdata("danger")): ?>

			<p class="alert alert-danger">
				<?= $this->session->flashdata("danger")  ?>
			</p>
		<?php endif ?>
		</div>
		<div class="content"> 
			<h1>Produtos</h1>
			<table class="table">
				<?php foreach ($produtos as $produto) :?>
				<tr>
					<td><?= $produto["nome"] ?></td>
					<td><?= numeroEmReais( $produto["preco"]) ?></td>
				</tr>
				<?php endforeach ?>
			</table>
			<?php if ($this->session->userdata("usuario_logado")): ?>
				<?= anchor('login/logout', 'Logout', array("class" => "btn btn-primary"))?>


			<?php else :?>
			<h1>Login</h1>
			<?php 
			echo form_open("login/autenticar");
			echo form_label("Email: ", "email");
				echo form_input(array("name" => "email", "id" => "email", "class" => "form-control","maxlength" => "255"));
				echo form_label("Senha: ", "senha");
				echo form_password(array("name" => "senha", "id" => "senha", "class" => "form-control", "maxlength" => "255"));
				echo form_button(array("content" => "Login", "class" => "btn btn-primary","type" => "submit"));	
			echo form_close();?>
			<h1>Cadastro</h1>
			<?php 
				echo form_open("usuarios/novo");
				echo form_label("Nome: ", "nome");
				echo form_input(array("name" => "nome", "class" => "form-control","maxlength" => "255"));
				echo form_label("Email: ", "email");
				echo form_input(array("name" => "email", "id" => "email", "class" => "form-control","maxlength" => "255"));
				echo form_label("Senha: ", "senha");
				echo form_password(array("name" => "senha", "id" => "senha", "class" => "form-control", "maxlength" => "255"));
				echo form_button(array("content" => "Cadastrar", "class" => "btn btn-primary","type" => "submit"));			
				echo form_close();
			 ?>
			<?php endif ?>
		</div>
		<div class="footer">
			
		</div>
	</div>

</body>
</html>