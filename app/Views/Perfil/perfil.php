<?php $this->extend('_common/layout') ?>

<?php $this->section('content') ?>
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
					<input name="repeteSenha" type="password" class="form-control p_input"placeholder="Repita a nova senha" required>
				</div>
			</div>
			
			<input type="submit" class="btn btn-primary" value="Alterar">
		<?php echo form_close() ?>
	</div>
</div>
<?php $this->endSection(); ?>