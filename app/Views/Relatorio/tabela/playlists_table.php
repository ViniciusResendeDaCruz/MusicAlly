<div class="row">
	<div class="col-8">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Musicas de <?php echo $playlist['nome'] ?></h4>
				<table id="musicasPlaylist">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Artista</th>
							<th>Duração</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($musicas as $musica) : ?>
							<tr>
								<td><?php echo $musica['nome'] ?></td>
								<td><?php echo $musica['artistaNome'] ?></td>
								<td><?php echo $musica['duracao'] ?>:00</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
	<div class="col-4">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Informações da Playlist</h4>
				<hr>
				<p>Sua playlists possui <?php echo count($musicas) ?> músicas.</p>
				<hr>
				<p>Sua playlists foi acessada <?php echo $playlist['acessos'] ?> vezes.</p>
				<hr>
			</div>
		</div>
	</div>
</div>