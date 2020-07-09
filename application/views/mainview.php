<?php require_once "includes/header.php";?>

<div id="page-wrapper" style="min-height: 290px;margin-left: 20px;">
	<!--Titulo da página-->
	<div class="row">
	    <div class="col-lg-12">
	    	<a href="<?php echo base_url()?>/login/logoff" class='btn btn-primary' ><i class="fa fa-arrow-left">Sair</i></a>
	    	<h4>Bem vindo <?php echo $this->session->userdata('usuario')?></h4>
	        <h1 class="page-header">Tela Principal</h1>
	    </div>
	    <!-- /.col-lg-12 -->
	</div>


	<div class="row">

		<?php if($this->session->userdata('permissao') == 1):?>
	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-primary">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-user fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge"></div>
	                        <div></div>
	                    </div>
	                </div>
	            </div>
	            <a href="<?php echo base_url()?>main/inserirFuncionario">
	                <div class="panel-footer">
	                    <span class="pull-left">Adicionar funcionário</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>
		<?php endif; ?>

	    <div class="col-lg-3 col-md-6">
	        <div class="panel panel-green">
	            <div class="panel-heading">
	                <div class="row">
	                    <div class="col-xs-3">
	                        <i class="fa fa-search fa-5x"></i>
	                    </div>
	                    <div class="col-xs-9 text-right">
	                        <div class="huge"></div>
	                        <div></div>
	                    </div>
	                </div>
	            </div>
	            <a href="<?php echo base_url()?>main/buscarFuncionario">
	                <div class="panel-footer">
	                    <span class="pull-left">Buscar Funcionário</span>
	                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                    <div class="clearfix"></div>
	                </div>
	            </a>
	        </div>
	    </div>

	    
	</div>

</div>