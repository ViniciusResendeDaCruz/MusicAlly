<div class="modal fade lg" id="adicionarModal" tabindex="-1" aria-labelledby="adicionarModalLabel" aria-hidden="true" ">
	<div class="modal-dialog">
		<div class="modal-content" style="width: 800px;">
			<div class="modal-header">
				<h5 class="modal-title" id="adicionarModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<table class="hover stripe" id="tabelaAdicionarMusicasModal">
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
							<tr">

								<td><?php echo $musica['nome'] ?></td>
								<td><?php echo $musica['duracao'] ?></td>
								<td><?php echo $musica['artistaNome'] ?></td>
								<td><button onclick="adicionarMusicaPlaylist(<?php echo $musica['registro'].','.$playlist_id ?>)" class="btn btn-primary p-1">Adicionar</button></td>

							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<!-- <button type="button" class="btn btn-danger" onclick="">Remover</button>
				<button type="button" class="btn btn-primary" onclick="">Alterar</button> -->
			</div>
		</div>
	</div>
</div>