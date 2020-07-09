<?php require_once "includes/header.php";?>

<div id="page-wrapper" style="min-height: 290px;margin-left: 20px;">
	<!--Titulo da página-->
	<div class="row">
	    <div class="col-lg-12">
	    	<a href="<?php echo base_url()?>/main" class='btn btn-primary' ><i class="fa fa-arrow-left">Voltar</i></a>
	        <h1 class="page-header">Busca de funcionários</h1>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>

	<div class="row">
	    <div class="col-lg-10 col-md-10">
	        <div class="box box-info">

	        	<div class='msg'>

                    <?php echo $this->session->flashdata('msg_error')?>

                </div>
            
	            <form class="form-horizontal" method="post" action="<?php echo base_url()?>main/listar">
	            	<div class="box-body">
		                <div class="form-group">
		                  	<label for="nome" class="col-sm-1 control-label">Nome</label>
			                  <div class="col-sm-5">
			                    	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="">
			                  </div>
			                  <label for="nome" class="col-sm-1 control-label">Usuário</label>
			                  <div class="col-sm-5">
			                    	<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" value="">
			                  </div>
		                </div>

						<div class="form-group">
		                  	<label for="nome" class="col-sm-1 control-label">Empresa</label>
			                  <div class="col-sm-5">
			                    	<select class="form-control" name='empresa'>
				                    	<option value=''>Selecione...</option>
				                    	<?php foreach($empresas as $key=>$emp):?>
											<option value="<?php echo $emp->id;?>" ><?php echo $emp->empresa?></option>
			                    		<?php endforeach;?>
				                    </select>
			                  </div>
			                  <label for="nome" class="col-sm-1 control-label">Projeto</label>
			                  <div class="col-sm-5">
			                    	<select class="form-control" name='projeto'>
				                    	<option value=''>Selecione...</option>
				                    	<?php foreach($projetos as $key=>$proj):?>
											<option value="<?php echo $proj->id;?>" ><?php echo $proj->projeto?></option>
			                    		<?php endforeach;?>
				                    </select>
			                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="nome" class="col-sm-1 control-label">Email</label>
			                  <div class="col-sm-5">
			                    	<input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value="">
			                  </div>
			                  <label for="nome" class="col-sm-1 control-label">Departamento</label>
			                  <div class="col-sm-5">
			                    	<select class="form-control" name='departamento'>
				                    	<option value=''>Selecione...</option>
				                    	<?php foreach($departamentos as $key=>$dpto):?>
											<option value="<?php echo $dpto->id?>" ><?php echo $dpto->departamento?></option>
			                    		<?php endforeach;?>
				                    </select>
			                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="nome" class="col-sm-1 control-label">CPF</label>
			                  <div class="col-sm-5">
			                    	<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="">
			                  </div>
			                  <label for="nome" class="col-sm-1 control-label">Cargo</label>
			                  <div class="col-sm-5">
			                    	<select class="form-control" name='cargo'>
				                    	<option value=''>Selecione...</option>
				                    	<?php foreach($cargos as $key=>$c):?>
											<option value="<?php echo $c->id?>" ><?php echo $c->cargo?></option>
			                    		<?php endforeach;?>
				                    </select>
			                  </div>
		                </div>
		                
		                
	              	</div>
	              <!-- /.box-body -->
	              <div class="box-footer" style="margin-left: 40%;">
	                <input type="reset" class="btn btn-default" value="Limpar busca">
	                <button type="submit" class="btn btn-primary">Buscar</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
          	</div>
	    </div>


	    
	</div>

</div>

<?php require_once "includes/footer.php";?>

<script type="text/javascript">
	$(document).ready(function(){

	    $('#cpf').mask('000.000.000-00', {reverse: true});

    });

</script>