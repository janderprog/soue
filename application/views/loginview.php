<?php require_once "includes/header.php";?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                </div>
                <div class='msg'>

                    <?php echo $this->session->flashdata('msg_error')?>

                </div>
                
                <div style="background-color: #337ab7;text-align: center;">
                    <span style="color: #fff;font-weight: bold;">Acessar Sistema</span>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url()."login/VerificarLogin" ?>" method='post'>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" id="email" type="email" value="<?php echo $email ?>" autofocus required="required">
                                <?php echo $email_error?>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="senha" id="senha" type="password" value="" required="required">
                                <?php echo $senha_error?>
                            </div>
                            
                            <div class="form-group checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick='validarSenha()' class="btn btn-lg btn-primary btn-block" >Login</button>
                            </div>
                            
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "includes/footer.php";?>

