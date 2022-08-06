<?php $this->extend('_common/layout') ?>

<?php $this->section('content') ?>
<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;" data-delay="3000" style="background-color: #000;">
	<div id="myToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" style="background-color: #000;">
		<div class="toast-header" style="background-color: #1f1e1e; color:#fff;">
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

<!-- Modal Adicionar-->
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
							<input type="text" name="nome" id="nomeInput" class="form-control" style="width: 350px;" placeholder="Insira o nome">

						</div>
						<div class="form-group ">
							<label for="duracao">Duração</label>
							<input type="number" name="duracao" id="duracaoInput" class="form-control" style="width: 350px;" placeholder="Insira a duração em minutos(ex. 5,10,20)">
						</div>
					</div>
					<div class="row">
						<div class="form-group ">
							<label for="duracao">Arquivo</label>
							
							<input type="text" name="arquivo" id="arquivoInput" class="form-control" style="width: 350px;" placeholder="Insira o local do arquivo">
						</div>
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

<div id="modalAlterarPlaceholder"></div>




<div class="card container" style="margin-top:20vh;">
	<div class="card-body">
		<h4 class="card-title">Minhas Músicas</h4>
		<p class="card-description">Acesse aqui suas músicas</p>
		<div id="musicasTableDiv"></div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adicionarModal">
			Adicionar nova música
		</button>

	</div>
</div>

<script>
	function initTable() {
		$.ajax({
			type: "POST",
			dataType: "html",
			url: baseUrl + "/ajax/musica/musicoMusicas",
			success: function(response) {
				$("#musicasTableDiv").html('')
				$("#musicasTableDiv").html(response)
				$("#musicasTable").DataTable({
					responsive: true
				})
			}
		});
	}

	function salvarAdicao() {
		let nome = $("#nomeInput").val()
		let duracao = $("#duracaoInput").val()
		let arquivo = $("#arquivoInput").val()
		if(nome == '' || duracao == '' || arquivo ==''){
			window.alert("Insira todos os dados!")
			return
		}

		$.ajax({
			type: "POST",
			url: baseUrl + `/ajax/musica/novaMusica/${nome}/${duracao}/${arquivo}`,
			success: function(response) {
				initTable()
				$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">" + nome + " adicionada com sucesso</div>")
				$("#myToast").toast('show')
			}
		});
		$('#adicionarModal').modal('hide')
	}

	function alterarBtn(registro) {
		$.ajax({
			type: "POST",
			dataType: "html",
			url: baseUrl + "/ajax/musica/modalAlterarMusica/" + registro,
			success: function(response) {
				$("#modalAlterarPlaceholder").html(response);
				$("#alterarModal").modal('show')
			}
		});
	}

	function removeMusica(registro) {
		if (window.confirm("Tem certeza? Esta ação removerá a música do sistema!")) {
			$.ajax({
				type: "POST",
				url: baseUrl + "/ajax/musica/removeMusica/" + registro,
				success: function(response) {
					$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">Música removida com sucesso</div>");
					$("#myToast").toast('show');
					$("#alterarModal").modal('hide');
					// $("#modalAlterarPlaceholder").html('');
					initTable()
				}
			});
		}
	}

	function alteraMusica(registro) {
		let nome = $("#nomeAlterarInput").val()
		let duracao = $("#duracaoAlterarInput").val()
		let arquivo = $("#arquivoAlterarInput").val()

		if(nome == '' || duracao == '' || arquivo ==''){
			window.alert("Insira todos os dados!")
			return
		}
		
		$.ajax({
			type: "POST",
			url: baseUrl + `/ajax/musica/alteraMusica/${registro}/${nome}/${duracao}/${arquivo}`,
			success: function(response) {
				$("#toastMessage").html("<div class=\"alert alert-success\" style=\"margin:0px;\">Música alterada com sucesso</div>");
				$("#myToast").toast('show');
				$("#alterarModal").modal('hide');
				initTable()
			}
		});
	}

	function abrirMusica(registro) {
		console.log(registro);
	}

	$(document).ready(function() {
		initTable()
	})
</script>
<?php $this->endSection(); ?>