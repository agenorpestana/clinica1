<?php 
$pag = 'procedimentos';

if(@$procedimentos == 'ocultar'){
	echo "<script>window.location='../index.php'</script>";
    exit();
}

 ?>

<form method="POST" action="rel/procedimentos_class.php" style="position:absolute; right:30px" target="_blank">
<button type="submit" class="btn btn-success"><span class="fa fa-file-pdf-o"></span> Relatório</button>
<input type="hidden" name="exame" id="filtro_exame">
</form>

<a style="margin-right: 100px" onclick="inserir()" type="button" class="btn btn-primary"><span class="fa fa-plus"></span> Procedimento</a>

<a onclick="buscar('Sim')" type="button" class="btn btn-danger" style="background:#d92716"> Exames</a>
<a onclick="buscar('Não')" type="button" class="btn btn-primary" style="background:#06085c"> Consultas</a>
<a target="_blank "href="rel/receita_digital.php" type="button" class="btn btn-primary" style="background:#06085c"> Receita</a>
<a onclick="buscar('')" type="button" class="btn btn-info" style="background:#494a4a"> Todos</a>



<li class="dropdown head-dpdn2" style="display: inline-block;">		
		<a href="#" data-toggle="dropdown"  class="btn btn-danger dropdown-toggle" id="btn-deletar" style="display:none"><span class="fa fa-trash-o"></span> Deletar</a>

		<ul class="dropdown-menu">
		<li>
		<div class="notification_desc2">
		<p>Excluir Selecionados? <a href="#" onclick="deletarSel()"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
</li>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">

</div>


<input type="hidden" id="ids">

<!-- Modal Perfil -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Procedimento" required>							
						</div>

						<div class="col-md-3">							
								<label>Valor</label>
								<input type="text" class="form-control" id="valor" name="valor" placeholder="Valor"  required>							
						</div>


						<div class="col-md-3">							
								<label>Tempo</label>
								<input type="number" class="form-control" id="tempo" name="tempo" placeholder="Minutos"  required>							
						</div>

						
					</div>


				<div class="row">
					<div class="col-md-4">	
								<label>Aceita Convênio</label>
								<select class="form-control" name="convenio" id="convenio">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>	
								</select>						
							</div>	


							<div class="col-md-4">	
								<label>É Exame?</label>
								<select class="form-control" name="exame" id="exame">
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>	
								</select>						
							</div>	
				</div>
					


					<input type="hidden" class="form-control" id="id" name="id">					

				<br>
				<small><div id="mensagem" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>





<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

<script type="text/javascript">
	function buscar(exame){
		$('#filtro_exame').val(exame);
		listar(exame)
	}
</script>
