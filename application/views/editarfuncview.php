<?php require_once "includes/header.php";?>



<div id="page-wrapper" style="min-height: 290px;margin-left: 20px;">
	<!--Titulo da página-->
	<div class="row">
	    <div class="col-lg-12">
	    	<a href="<?php echo base_url()?>/main" class='btn btn-primary' ><i class="fa fa-arrow-left">Voltar</i></a>
	        <h1 class="page-header">Edição de funcionários</h1>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>

	<div class="row">
	    <div class="col-lg-10 col-md-10">
	        <div class="box box-info">

	        	<div class='msg'>

                    <?php echo $this->session->flashdata('msg_error')?>

                </div>
            
	            <form class="form-horizontal" method="post" action="<?php echo base_url()?>main/alterar">
	            	<div class="box-body">
		                <div class="form-group">
		                  	<label for="nome" class="col-sm-2 control-label">Nome</label>
			                  <div class="col-sm-6">
			                    	<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome?>" >
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
		                
	              	</div>
	              <!-- /.box-body -->
	              <div class="box-footer" style="margin-left: 40%;">
	                <a href="<?php echo base_url(); ?>main" class="btn btn-default">Cancel</a>
	                <button type="submit" class="btn btn-primary">Alterar</button>
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
	    });

	    $('#cpf').mask('000.000.000-00', {reverse: true});
	    $('#salario').mask("#.##0,00", {reverse: true});
	    $('#dt_admissao').mask("00/00/0000");

    });

</script>