<?php $this->extend('_common/layout') ?>
<?php $this->section('content') ?>

<div id="modalPlaceholder"></div>

<div class="modal fade" id="alterarPlaylistModal" tabindex="-1" aria-labelledby="alterarPlaylistModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alterarPlaylistModalLabel">Alterar Playlist</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="form" class="container">
					<div class="row">
						<div class="form-group ">
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nomeInput" class="form-control" style="width: 350px;" value="<?php echo $playlist['nome'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="form-group ">
							<label for="descricao">Descricao</label>
							<textarea style="width: 350px;" class="form-control" name="descricaoInput" id="descricaoInput" cols="30" rows="3" ><?php echo $playlist['descricao'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1" <?php echo $playlist['publica'] ? 'checked':'' ?> >
							<label class="custom-control-label" for="customSwitch1">Pública</label>
						</div>
					</div>
					<div class="row">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="salvarEdicaoPlaylist(<?php echo $playlist['id'] ?>)">Salvar</button>
			</div>
		</div>
	</div>
</div>


<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;" data-delay="2000">
	<div id="myToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
		<div class="toast-header" style="background-color: #000; color:#fff;">
			<!-- <img src="..." class="rounded mr-2" alt="..."> -->
			<strong class="mr-auto">Status</strong>
			<small>Agora</small>
			<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="toast-body" id="toastMessage" style="background-color: #242424; color:#fff; margin:0px;padding:0px;">
			--
		</div>
	</div>
</div>

<div class="container bg-dark card">
	<div class="card-body">
		<div class="card-title">
			<h4 id="nomePlaylist"><?php echo $playlist['nome'] ?></h4>
		</div>

		<p class="card-description" id="descricaoPlaylist"><?php echo $playlist['descricao'] ?></p>

		<div id="tabelaPlaylists"></div>
		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarModal">
			Criar nova Playlist
		</button> -->
		<button onclick="adicionarBtn(<?php echo $playlist['id'] ?>)" class="btn btn-primary">Adicionar Música</button>
		<button onclick="alterarBtn()" class="btn btn-secondary">Alterar Playlist</button>


	</div>
</div>

<script>
	var table

	function initTable() {
		$.ajax({
			method: "post",
			url: baseUrl + "/ajax/playlist/getMusicas/" + <?php echo $playlist['id'] ?>,
			dataType: "html",
			success: function(response) {
				$("#tabelaPlaylists").html(response)
				table = $("#tabelaMusicas").DataTable({
					responsive: true
				})
				// console.log('iniciada');
			}
		});
	}

	function adicionarBtn(id) {
		$.ajax({
			type: "POST",
			dataType: "html",
			url: baseUrl + "/ajax/playlist/getMusicasNotInPlaylistTableModal/" + id,
			success: function(response) {
				$("#modalPlaceholder").html(response)
				$("#adicionarModal").modal('show')
				$("#tabelaAdicionarMusicasModal").DataTable({
					responsive: true
				})
			}
		});
	}

	function adicionarMusicaPlaylist(musica_id, playlist_id) {
		$.ajax({
			type: "POST",
			dataType: "html",
			url: baseUrl + `/ajax/playlist/adicionarMusicaPlaylist/${musica_id}/${playlist_id}`,
			success: function(response) {
				$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">Música adicionada com sucesso</div>")
				$("#myToast").toast('show')
				$("#adicionarModal").modal('hide')

				initTable()

				// window.location.reload()
			}
		});

	}

	function removerMusicaPlaylist(musica_id, playlist_id) {
		if (window.confirm('Certeza que deseja remover a música da playlist?')) {
			$.ajax({
				type: "POST",
				dataType: "html",
				url: baseUrl + `/ajax/playlist/removerMusicaPlaylist/${musica_id}/${playlist_id}`,
				success: function(response) {
					$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">Música removida com sucesso</div>")
					$("#myToast").toast('show')
					$("#adicionarModal").modal('hide')

					// window.location.reload()
					initTable()
				}
			});
		}
	}

	function alterarBtn(){
		$("#alterarPlaylistModal").modal('show')
	}
	function salvarEdicaoPlaylist(playlist_id){
		
		let nome = $("#nomeInput").val()
		let descricao = $("#descricaoInput").val()
		let publica = document.getElementById('customSwitch1').checked
		if (!nome || !descricao) {
			window.alert("Insira todos os dados primeiro!")
			return
		}
		// console.log(nome + descricao + publica);
		$.ajax({
				type: "POST",
				url: baseUrl + `/ajax/playlist/alterarPlaylist/${playlist_id}/${nome}/${descricao}/${publica}`,
				success: function(response) {
					$("#alterarPlaylistModal").modal('hide')
					$("#nomePlaylist").html(nome)
					$("#descricaoPlaylist").html(descricao)

					// window.location.reload()
					// initTable()
				}
			});
	}

	function abrirMusica(registro) {
		window.location.href = baseUrl + "/musica/player/" + registro
	}


	$(document).ready(function() {
		initTable()
	})
</script>

<?php $this->endSection(); ?>