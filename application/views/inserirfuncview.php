<?php require_once "includes/header.php";?>

<div id="page-wrapper" style="min-height: 290px;margin-left: 20px;">
	<!--Titulo da página-->
	<div class="row">
	    <div class="col-lg-12">
	    	<a href="<?php echo base_url()?>/main" class='btn btn-primary' ><i class="fa fa-arrow-left">Voltar</i></a>
	        <h1 class="page-header">Inclusão de funcionários</h1>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>

	<div class="row">
	    <div class="col-lg-10 col-md-10">
	        <div class="box box-info">

	        	<div class='msg'>

                    <?php echo $this->session->flashdata('msg_error')?>

                </div>
            
	            <form class="form-horizontal" method="post" action="<?php echo base_url()?>main/salvar">
	            	<div class="box-body">
		                <div class="form-group">
		                  	<label for="nome" class="col-sm-2 control-label">Nome</label>
			                  <div class="col-sm-6">
			                    	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome?>">
			                    	<?php echo $nome_error?>
			                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="usuario" class="col-sm-2 control-label">Usuário</label>
			                  <div class="col-sm-5">
			                    	<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" value="<?php echo $usuario?>">
			                    	<?php echo $usuario_error?>
			                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="senha" class="col-sm-2 control-label">Senha</label>
			                  <div class="col-sm-5">
			                    	<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" value="<?php echo $senha?>">
			                    	<?php echo $senha_error?>
			                  </div>
		                </div>
		                
		                <div class="form-group">
		                  <label for="tipo" class="col-sm-2 control-label">Tipo</label>
		                  <div class="col-sm-6">
		                    <select class="form-control" name='tipo'>
		                    	<option value="">Selecione...</option>
		                    	<?php foreach($tipo_usuario as $key=>$t):?>
									<option value="<?php echo $t->id;?>" <?php echo ($tipo==$t->id)?"selected":""; ?>><?php echo $t->descricao?></option>
	                    		<?php endforeach;?>
		                    </select>
		                    <?php echo $tipo_error?>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <label for="empresa" class="col-sm-2 control-label">Empresa</label>
		                  <div class="col-sm-6">
		                    <select class="form-control" name='empresa'>
		                    	<option value=''>Selecione...</option>
		                    	<?php foreach($empresas as $key=>$emp):?>
									<option value="<?php echo $emp->id;?>" <?php echo ($empresa==$emp->id)?"selected":"";?> ><?php echo $emp->empresa?></option>
	                    		<?php endforeach;?>
		                    </select>
		                    <?php echo $empresa_error?>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <label for="projeto" class="col-sm-2 control-label">Projeto</label>
		                  <div class="col-sm-6">
		                    <select class="form-control" name='projeto'>
		                    	<option value=''>Selecione...</option>
		                    	<?php foreach($projetos as $key=>$proj):?>
									<option value="<?php echo $proj->id;?>" <?php echo ($projeto==$proj->id)?"selected":"";?>  ><?php echo $proj->projeto?></option>
	                    		<?php endforeach;?>
		                    </select>
		                    <?php echo $projeto_error?>
		                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="email" class="col-sm-2 control-label">E-mail</label>
		                  	<div class="col-sm-6">
		                    	<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?php echo $email?>">
		                    	<span><?php echo $email_error; ?></span>
			                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="ativo" class="col-sm-2 control-label">Ativo</label>
		                  	<div class="col-sm-1">
		                    	<input type="checkbox" name="ativo" value="1" <?php echo $ativo_chk; ?> >
			                  </div>
		                </div>

		                <div class="form-group">
		                  <label for="departamento" class="col-sm-2 control-label">Departamento</label>
		                  <div class="col-sm-6">
		                    <select class="form-control" name='departamento'>
		                    	<option value=''>Selecione...</option>
		                    	<?php foreach($departamentos as $key=>$dpto):?>
									<option value="<?php echo $dpto->id?>" <?php echo ($departamento==$dpto->id)?"selected":"";?> ><?php echo $dpto->departamento?></option>
	                    		<?php endforeach;?>
		                    </select>
		                    <?php echo $departamento_error?>
		                  </div>
		                </div>

		                <div class="form-group">
		                  <label for="cargo" class="col-sm-2 control-label">Cargo</label>
		                  <div class="col-sm-6">
		                    <select class="form-control" name='cargo'>
		                    	<option value=''>Selecione...</option>
		                    	<?php foreach($cargos as $key=>$c):?>
									<option value="<?php echo $c->id?>" <?php echo ($cargo==$c->id)?"selected":"";?> ><?php echo $c->cargo?></option>
	                    		<?php endforeach;?>
		                    </select>
		                    <?php echo $cargo_error?>
		                  </div>
		                </div>

		                <div class="form-group">
		                  	<label for="ramal" class="col-sm-2 control-label">Ramal</label>
		                  	<div class="col-sm-2">
	                    		<input type="text" class="form-control" name="ramal" id="ramal" placeholder="Ramal" value="<?php echo $ramal?>">
	                    		<?php echo $ramal_error?>
		                  	</div>
		                </div>

		                <div class="form-group">
		                  	<label for="salario" class="col-sm-2 control-label">Salário</label>
		                  	<div class="col-sm-4">
	                    		<input type="text" class="form-control" name="salario" id="salario" placeholder="Salário" value="<?php echo $salario?>">
	                    		<?php echo $salario_error?>
		                  	</div>
		                </div>

		                <div class="form-group">
		                  	<label for="dt_admissao" class="col-sm-2 control-label">Data de admissão</label>
		                  	<div class="col-sm-4">
	                    		<input type="text" class="form-control" name="dt_admissao" id="dt_admissao" placeholder="Data de admissão" value="<?php echo $dt_admissao?>" >
	                    		<?php echo $dt_admissao_error?>
		                  	</div>
		                </div>

		                <div class="form-group">
		                  	<label for="cpf" class="col-sm-2 control-label">CPF</label>
		                  	<div class="col-sm-6">
	                    		<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $cpf?>">
	                    		<?php echo $cpf_error?>
		                  	</div>
		                </div>
		                
	              	</div>
	              <!-- /.box-body -->
	              <div class="box-footer" style="margin-left: 40%;">
	                <a href="<?php echo base_url(); ?>main" class="btn btn-default">Cancel</a>
	                <button type="submit" class="btn btn-primary">Incluir</button>
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
		
		//Date picker
	    $('#dt_admissao').datepicker({
	    	format: 'dd/mm/yyyy',
	      	autoclose: true
	    })

	    $('#cpf').mask('000.000.000-00', {reverse: true});
	    $('#salario').mask("#.##0,00", {reverse: true});
	    $('#dt_admissao').mask("00/00/0000");

    });

</script>