<!--?php include("incs/inc-includes.php"); ?-->
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvador Fest 2016 - Top Fã</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/top-fa.css" rel="stylesheet">
</head>
<!--Fim-Head-->

<body id="topfa">
    
    <?php include("incs/inc-header-nav.php"); ?>
        
    <div class="container-fluid">
        <div class="container"> 
          
            <div class="row">

                <header class="header-topfa">   
                    <h1 class="text-uppercase">Top Fã!</h1>            
                    <a class="text-uppercase" href="topfa-cadastrar.php">> cadastrar</a>
                </header> 

                <hr>

                <div class="top-fa">
    
                    <div class="bg-branco texto wow fadeInUp" data-wow-duration="2s">
                        <div class="box-content">

                            <div class="box-facebook">
                                <form action="topfa-timeline.php">
                                    <input class="bt-facebook" type="submit" value="Entrar com o Facebook">
                                </form>
                            </div>

                            <div class="box-cadastro-site">
                                <h2 class="titulo">ou</h2>
                                <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="topfa-timeline.php" method="post" novalidate>   <input class="required email" type="text" name="email" placeholder="Email"/>
                                    <input class="required" type="password" id="senha" name="senha" placeholder="Senha">
                                    <input type="submit" value="ENTRAR" name="enviar">
                                </form>
                                <br><br>
                                <span class="txt-conta-ja">Esqueceu sua senha? <a href="" data-toggle="modal" data-target=".esqueci">Clique aqui</a></span>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

         </div> 
    </div>

    <!-- Modal -->
    <div class="modal fade esqueci" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-uppercase" id="myLargeModalLabel">Recuperar senha</h4>
            </div>
            <div class="modal-body">
                <div class="top-fa">    
                    <div class="bg-branco">
                        <div class="box-content">
                            <div class="box-cadastro-site">
                                <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="topfa-senha.php" method="post" novalidate> 
                                    <input class="required email" type="text" name="email" placeholder="Insira seu email cadastrado para recuperar a senha."/>
                                    <input type="submit" value="RECUPERAR" name="enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
    </div>

    <!--Rodapé-->
    <?php include("incs/inc-footer.php"); ?>
    <!--Fim-Rodapé--> 

    <!--JS--> 
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Fim-JS-->

    <script src="js/form/jquery.validate.js"></script>
    <script>
        $(function(){
            $("form").each(function() {
                $(this).validate();
            }); 
        });
    </script>
    
</body>
</html>