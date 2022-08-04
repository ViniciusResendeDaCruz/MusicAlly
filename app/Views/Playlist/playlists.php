<?php $this->extend('_common/layout') ?>

<?php $this->section('content') ?>


<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;"  data-delay="10000">
  <div id="myToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
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

<!-- Modal -->
<div class="modal fade" id="adicionarModal" tabindex="-1" aria-labelledby="adicionarModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="adicionarModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="form" class="container">
					<div class="row">
						<div class="form-group ">
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nomeInput" class="form-control" style="width: 350px;">
						</div>
					</div>
					<div class="row">
						<div class="form-group ">
							<label for="descricao">Descricao</label>
							<textarea style="width: 350px;" class="form-control" name="descricao" id="descricaoInput" cols="30" rows="3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1">
							<label class="custom-control-label" for="customSwitch1">Pública</label>
						</div>
					</div>
					<div class="row">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="salvarAdicao()">Adicionar</button>
			</div>
		</div>
	</div>
</div>


<div class="container bg-dark card">
	<div class="card-body">
		<h4 class="card-title">Suas playlists</h4>
		<p class="card-description">Acesse aqui suas playlists</p>
		<div id="tabelaPlaylists"></div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarModal">
			Criar nova Playlist
		</button>


	</div>
</div>

<script>
	$('#adicionarModal').on('shown.bs.modal', function() {
		$('#nomeInput').trigger('focus')
	})

	function initTable() {
		$.ajax({
			method: "post",
			url: baseUrl + "/ajax/playlist/userPlaylists/",
			dataType: "html",
			success: function(response) {
				$("#tabelaPlaylists").html(response)
				$("#playlistsTable").DataTable({
					responsive: true,
				})
			}
		});
	}
	$(document).ready(function() {
		initTable()
	})

	function abrirPlaylist(id) {
		window.location.href = baseUrl + '/playlist/playlist/' + id
	}

	function salvarAdicao() {
		let nome = $("#nomeInput").val();
		let descricao = $("#descricaoInput").val()
		let publica = $("#customSwitch1").prop('checked')
		// console.log(nome + ' ' + descricao + ' '+publica)
		$.ajax({
			type: "POST",
			url: baseUrl + `/ajax/playlist/novaPlaylist/${nome}/${descricao}/${publica}`,
			success: function(response) {
				$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">Playlist adicionada com sucesso</div>")
				$("#myToast").toast('show')
			}
		});
		$('#adicionarModal').modal('hide')
	}
</script>
<?php $this->endSection(); ?>