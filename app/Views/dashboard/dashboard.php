<?php $this->extend('_common/layout') ?>
<?php $this->section('content') ?>
<style>
	.wrimagecard {
		margin-top: 0;
		margin-bottom: 1.5rem;
		text-align: left;
		position: relative;
		background: rgb(25, 28, 36);
		box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
		border-radius: 4px;
		transition: all 0.3s ease;
	}

	.wrimagecard .mdi {
		position: relative;
		font-size: 70px;
	}

	.wrimagecard-topimage_header {
		padding: 20px;
	}

	a.wrimagecard:hover,
	.wrimagecard-topimage:hover {
		box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
	}

	.wrimagecard-topimage a {
		width: 100%;
		height: 100%;
		display: block;
	}

	.wrimagecard-topimage_title {
		padding: 20px 24px;
		height: 80px;
		padding-bottom: 0.75rem;
		position: relative;
	}

	.wrimagecard-topimage a {
		border-bottom: none;
		text-decoration: none;
		color: #525c65;
		transition: color 0.3s ease;
	}
</style>


<div class="row">
	<div class="col-5">

		<!-- <div class="row">
			<div class="col-4">
				<div class="wrimagecard wrimagecard-topimage">
					<a href="#">
						<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
							<center>
								<i class="mdi mdi-speedometer" style="color:#BB7824"></i>
							</center>
						</div>
					</a>
				</div>

			</div>
			<div class="col-8">
				<div class="wrimagecard wrimagecard-topimage">
					<a href="#">
						<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
							<center>
								<i class="mdi mdi-playlist-play" style="color:#BB7824"></i>
							</center>
						</div>
					</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-8">
				<div class="wrimagecard wrimagecard-topimage">
					<a href="#">
						<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
							<center>
								<i class="mdi mdi-music-note" style="color:#BB7824"></i>
							</center>
						</div>
					</a>
				</div>

			</div>
			<div class="col-4">
				<div class="wrimagecard wrimagecard-topimage">
					<a href="#">
						<div class="wrimagecard-topimage_header" style="background-color:rgba(187, 120, 36, 0.1) ">
							<center>
								<i class="mdi mdi-chart-bar" style="color:#BB7824"></i>
							</center>
						</div>
					</a>
				</div>
			</div>
		</div> -->

		<div class="card">
			<div class="card-body">
				<h2 class="card-title">Top 5</h2>
				<p class="card-description">Estas são as músicas que mais se destacaram na nossa plataforma!</p>
				<table class="hover stripe" id="maisOuvidas">
					<thead>
						<th>Nome</th>
						<th>Duracao</th>
						<th>Artista</th>
					</thead>
					<tbody>
						<?php foreach ($musicas as $musica) : ?>
							<tr onclick="abrirMusica(<?php echo $musica['registro'] ?>)" style="cursor: pointer;">
								<td><?php echo $musica['nome'] ?></td>
								<td><?php echo $musica['duracao'] ?></td>
								<td><?php echo $musica['artistaNome'] ?></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>

	<div class="col-7">
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
		$("#maisOuvidas").DataTable({
			"bFilter": false,
			"bInfo": false,
			"bLengthChange": false,
			"bPaginate": false,
			"ordering": false,
			oLanguage: {
				sLengthMenu: "_MENU_",
			}
		})
	})

	function abrirPlaylist(id) {
		window.location.href = baseUrl + "/playlist/playlist/" + id
	}

	function abrirMusica(id){
		window.location.href = baseUrl + "/musica/player/" + id
	}
</script>
<?php $this->endSection() ?>