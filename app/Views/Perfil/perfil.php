<?php $this->extend('_common/layout') ?>

<?php $this->section('content') ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cuidado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="modalBody" class="modal-body p-3">
				<div class="row">
					Tem certeza que deseja excluir sua conta do portal MusicaAlly?
					Todas as músicas e playlists de sua conta serão exlcuidas sem possiblidade de retorno!
				</div>
				<br>
				<div class="row">
					<div class="form-check">
						<div class="alert alert-danger" id="alerta" hidden>Marque a caixa abaixo</div>
						<input class="form-check-input" type="checkbox" value="certeza" id="defaultCheck1">
						<label class="form-check-label text-danger" for="defaultCheck1">
						Tenho certeza que desejo excluir minha conta junto de todos os meus dados do sistema MusicAlly
						</label>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button onclick="excluirConta()" type="button" class="btn btn-danger">Excluir Conta</button>
			</div>
		</div>
	</div>
</div>


<div class="card container" style="margin-top:20vh;">
	<div class="card-body">
		<h4 class="card-title">Minha Conta</h4>
		<p class="card-description">Altere aqui os seus dados</p>

		<?php echo form_open('perfil/alterarDados', ['class' => 'forms-sample']) ?>
		<div class="row">
			<div class="form-group col-6">
				<label>Primeiro Nome</label>
				<input name="nome" type="text" class="form-control p_input" value="<?php echo $user['nome'] ?>" required>
			</div>
			<div class="form-group col-6">
				<label>Sobrenome</label>
				<input name="sobrenome" type="text" class="form-control p_input" value="<?php echo $user['sobrenome'] ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input name="email" type="email" class="form-control p_input" value="<?php echo $user['email'] ?>" required>
		</div>
		<div class="row">
			<div class="form-group col-6">
				<label>Senha</label>
				<input name="senha" type="password" class="form-control p_input" placeholder="Insira uma nova senha" required>
			</div>
			<div class="form-group col-6">
				<label>Repita a senha</label>
				<input name="repeteSenha" type="password" class="form-control p_input" placeholder="Repita a nova senha" required>
			</div>
		</div>

		<input type="submit" class="btn btn-primary" value="Alterar">
		<?php echo form_close() ?>
		<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal">
			Excluir Conta
		</button>
	</div>
</div>

<script>
	function excluirConta() {
		let teste = document.getElementById('defaultCheck1').checked
		if (!teste) {
			document.getElementById("alerta").hidden = false
			return
		}

		$.ajax({
			type: "POST",
			url: baseUrl + "/perfil/excluirConta",
			success: function (response) {
				$("#modalBody").html("<div class=\"alert alert-success\">Sua conta foi excluida com sucesso! Você será redirecionado para a página de login em breve</div>")
				setTimeout(function() { window.location.href = baseUrl; }, 3000);
			}
		});
	}
</script>
<?php $this->endSection(); ?>