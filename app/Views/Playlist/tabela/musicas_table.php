<table class="hover stripe" id="tabelaMusicas">
	<thead>
		<tr>
			<th></th>
			<th>Nome</th>
			<th>Duração</th>
			<th>Artista</th>
			<th></th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($musicas as $musica) : ?>
			<tr>

				<td> <button onclick="abrirMusica(<?php echo $musica['registro'] ?>)" class="btn btn-outline-primary p-2"><i style="font-size: 20px;" class="mdi mdi-play-circle-outline m-0"></i></button></td>
				<td><?php echo $musica['nome'] ?></td>
				<td><?php echo $musica['duracao'] ?></td>
				<td><?php echo $musica['artistaNome'] ?></td>
				<td><button  title="Remover musica da playlist" onclick="removerMusicaPlaylist(<?php echo $musica['registro'].','.$playlist_id ?>)" class="btn btn-outline-danger p-2">X</button></td>
				
			</tr>
		<?php endforeach ?>
	</tbody>
</table>