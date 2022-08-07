<?php $somaMusicas = 0 ?>
<?php $this->extend('_common/layout') ?>

<?php $this->section('content') ?>

<div class=" card bg-dark">
	<div class="card-body ">
		<h4 class="card-title">Relatórios</h4>
		<p class="card-description">Acesse os seus relatórios abaixo</p>

		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Usuário</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Playlist</button>
			</li>
			<?php if ($user['tipo'] == 'P') : ?>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Musica</button>
				</li>
			<?php endif ?>
		</ul>

		<div class="tab-content" id="myTabContent">

			<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				<div class="row">
					<div class="col-7">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Playlists Criadas</h5>
								<p class="card-description">Você criou um total de <?php echo count($playlists) ?> playlists no sistema</p>

								<table id="playlistsCriadas">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Descrição</th>
											<th>Pública</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($playlists as $playlist) : ?>
											<tr>
												<td><?php echo $playlist['nome'] ?></td>
												<td title="<?php echo $playlist['descricao'] ?>"><?php echo strlen($playlist['descricao']) > 10 ? substr($playlist['descricao'], 0, 10) . '...' : $playlist['descricao']; ?></td>
												<td><?php echo $playlist['publica'] == '1' ? 'Sim' : 'Não' ?></td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-5">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Musicas Ouvidas</h5>
								<p class="card-description">Você apreciou um total de <?php echo count($musicas_ouvidas_usuario) ?> musicas no sistema e as escutou <span id="vezes">*</span> vezes</p>

								<table id="musicasOuvidas">
									<thead>
										<tr>
											<th>Música</th>
											<th>Vezes Ouvida</th>
											<!-- <th>Pública</th> -->
										</tr>
									</thead>
									<tbody>
										<?php foreach ($musicas_ouvidas_usuario as $musica) : ?>
											<tr>
												<td><?php echo $musica['nome'] ?></td>
												<td><?php echo $musica['musicaQuantidade'] ?></td>
												<?php $somaMusicas += $musica['musicaQuantidade'] ?>
												<!-- <td><?php //echo $playlist['publica'] == '1' ? 'Sim':'Não' 
															?></td> -->
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>


			</div>


			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="form-group">
					<!-- <label for="playlistsSelect">Selecione a playlist</label> -->
					<select class="js-example-basic-single" name="playlistsSelect" id="playlistsSelect" style="width: 100%;">
						<option value="0">Selecione uma Playlist</option>
						<?php foreach ($playlists as $playlist) : ?>
							<option value="<?php echo $playlist['id'] ?>"><?php echo $playlist['nome'] ?></option>
						<?php endforeach ?>
					</select>
				</div>

				<div id="relatorio" class="">

				</div>

			</div>


			<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="form-group">
					<!-- <label for="playlistsSelect">Selecione a playlist</label> -->
					<select class="js-example-basic-single" name="musicasSelect" id="musicasSelect" style="width: 100%;">
						<option value="0">Selecione uma Musica</option>
						<?php foreach ($musicas as $musica) : ?>
							<option value="<?php echo $musica['registro'] ?>"><?php echo $musica['nome'] ?></option>
						<?php endforeach ?>
					</select>
					<div id="relatorioMusica"></div>
					<button onclick="saveDiv('realatorioMusica','title')" class="btn btn-danger">teste</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#playlistsCriadas").DataTable({
			"bLengthChange": false,
			pageLength: 5,
		});
		$("#musicasOuvidas").DataTable({
			"bLengthChange": false,
			pageLength: 5,
		})
		$("#vezes").html("<?php echo $somaMusicas ?>")

		$("#playlistsSelect").select2()
		$("#musicasSelect").select2()

		$("#playlistsSelect").on('change', function() {
			let id = ($("#playlistsSelect").val());
			if (id == '0') return
			$.ajax({
				type: "POST",
				dataType: "html",
				url: baseUrl + "/ajax/relatorio/relatorioPlaylist/" + id,
				success: function(response) {
					$("#relatorio").html(response);
					$("#musicasPlaylist").DataTable({
						"bFilter": false,
						"bInfo": false,
						"bLengthChange": false
					})
				}
			});
		})

		$("#musicasSelect").on('change', function() {
			let id = $("#musicasSelect").val()
			$.ajax({
				type: "POST",
				dataType: "html",
				url: baseUrl + "/ajax/relatorio/relatorioMusica/" + id,
				success: function(response) {
					$("#relatorioMusica").html(response);
				}
			});
		})

	})
</script>
<?php $this->endSection(); ?>