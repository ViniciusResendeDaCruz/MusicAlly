<div class="modal fade" id="alterarModal" tabindex="-1" aria-labelledby="alterarModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alterarModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div id="form" class="container">
					<div class="row">
						<div class="form-group ">
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nomeAlterarInput" class="form-control" style="width: 350px;" value="<?php echo $musica['nome'] ?>">
							
						</div>
						<div class="form-group ">
							<label for="duracao">Duração</label>
							<input type="text" name="duracao" id="duracaoAlterarInput" class="form-control" style="width: 350px;" value="<?php echo $musica['duracao'] ?>">
						</div>
					</div>
					<div class="row">
					<div class="form-group ">
							<label for="duracao">Arquivo</label>
							<input type="text" name="arquivo" id="arquivoAlterarInput" class="form-control" style="width: 350px;" value="<?php echo $musica['arquivo'] ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-danger" onclick="removeMusica(<?php echo $musica['registro'] ?>)">Remover</button>
				<button type="button" class="btn btn-primary" onclick="alteraMusica(<?php echo $musica['registro'] ?>)">Alterar</button>
			</div>
		</div>
	</div>
</div>