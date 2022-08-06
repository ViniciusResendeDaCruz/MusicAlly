<?php $this->extend('_common/layout') ?>
<?php $this->section('content') ?>

<div class="row">
	<div class="col-lg-6">
		<div class="card">
			<div class="card-body">
				<h2 class="card-title">Playlists para você</h2>
				<p class="card-description">Separamos estas playlists e achamos que você ira gostar!</p>
				<table class="hover stripe" id="randPlaylistTable">
					<thead>
						<th>Nome</th>
						<th>Músicas</th>
						<th>Criador</th>
					</thead>
					<tbody>
						<?php foreach ($randPlaylists as $playlist) : ?>
							<tr onclick="abrirPlaylist(<?php echo $playlist['id'] ?>)" style="cursor: pointer;">
								<td><?php echo $playlist['nome'] ?></td>
								<td><?php echo $playlist['quantidade'] ?></td>
								<td><?php echo $playlist['dono'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$("#randPlaylistTable").DataTable({
			"bFilter": false,
			"bInfo": false,
			"bLengthChange": false,
			"bPaginate": false,
			oLanguage: {
				sLengthMenu: "_MENU_",
			}
		})
	})

	function abrirPlaylist(id) {
		$.ajax({
			type: "POST",
			url: baseUrl + "/ajax/playlist/acesso/" + id,
			success: function (response) {
				window.location.href = baseUrl + "/playlist/playlist/" + id
			}
		});
	}
</script>
<?php $this->endSection() ?>