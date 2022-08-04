<table class="hover stripe" id="tabelaMusicas">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Duração</th>
			<th>Artista</th>
			<th></th>
			
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($musicas as $musica) : ?>
			<tr onclick="<?php echo $musica['registro'] ?>">

				<td><?php echo $musica['nome'] ?></td>
				<td><?php echo $musica['duracao'] ?></td>
				<td><?php echo $musica['artistaNome'] ?></td>
				<td><button title="Remover musica da playlist" onclick="removerMusicaPlaylist(<?php echo $musica['registro'].','.$playlist_id ?>)" class="btn btn-outline-danger p-2">X</button></td>
				
			</tr>
		<?php endforeach ?>
	</tbody>
</table>