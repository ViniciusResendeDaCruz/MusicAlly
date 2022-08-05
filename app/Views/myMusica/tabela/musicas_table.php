<table class="hover stripe display nowrap dt-responsive" id="musicasTable" style="width: 100%;">
	<thead>
		<tr>
			<th>Registro</th>
			<th>Nome</th>
			<th>Duração</th>
			<th>Reproduções</th>
			<th>Avaliação</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($musicas as $musica) : ?>
			<tr onclick="abrirMusica(<?php echo $musica['registro'] ?>)">

				<td><?php echo $musica['registro'] ?></td>
				<td><?php echo $musica['nome'] ?></td>
				<td><?php echo $musica['duracao'] ?></td>
				<td><?php echo $musica['reproducoes']?></td>
				<td><?php echo is_null($musica['media'])?'Nenhuma Avaliação':$musica['media'] ?></td>
				<td><button class="btn btn-outline-primary" onclick="alterarBtn(<?php echo $musica['registro'] ?>)">Alterar</button></td>

			</tr>
		<?php endforeach ?>
	</tbody>
</table>