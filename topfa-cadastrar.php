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
                    <a class="text-uppercase" href="topfa-entrar.php">> entrar</a>
                </header> 

                <hr>

                <div class="box-top top-fa">

                    <div class="bg-branco texto wow fadeInUp" data-wow-duration="2s">
                        <div class="box-content">
                            <div class="box-cadastro-site">
                                <h2 class="titulo">Cadastro por e-mail</h2>
                                <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="" method="post" enctype="multipart/form-data" novalidate> 
                                    <input class="upload required" id="uploadImage1" type="file" name="imagemCadastro" onchange="PreviewImage(1);" size="0" />
                                    <label class="inserir-foto"><i class="fa fa-photo"></i>
                                    Inserir Foto</label>
                                    <br style="clear:both"/>
                                    <img id="uploadPreview1"/>
                                    <br style="clear:both"/>
                                    <input class="required" type="text" name="nome" placeholder="Nome do usuário" />
                                    <input class="required email" type="text" name="email" placeholder="Email"/>
                                    <input class="required" type="password" id="senha" name="senha" placeholder="Senha">
                                    <input class="required" equalto="#senha" type="password" id="repsenha" name="repetirsenha" placeholder="Repetir Senha">
                                    <select class="required" id="ddlEstado" name="ddlEstado"></select>
                                    <select class="required" id="ddlCidade" name="ddlCidade"></select>
                                    <br style="clear:both"/>
                                    <label>
                                        <span>Eu concordo com o <a href="" data-toggle="modal" data-target=".termos">Termos e Condições</a></span>
                                        <input class="required" type="checkbox" name="termos" value="termos">
                                    </label>
                                    <br style="clear:both"/>
                                    <label>
                                        <span>Eu concordo com a <a href="" data-toggle="modal" data-target=".politica">Politica de Privacidade</a></span>
                                        <input class="required" type="checkbox" name="politica" value="politica">
                                    </label>
                                    <input type="submit" value="CADASTRAR" name="enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

         </div>          
    </div>

    <!-- Modal -->
    <div class="modal fade termos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-uppercase" id="myLargeModalLabel">Termos e Condições</h4>
            </div>
            <div class="modal-body">
                <p>
                    texto aqui
                </p>
            </div>
         </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade politica" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-uppercase" id="myLargeModalLabel">Politica de Privacidade</h4>
            </div>
            <div class="modal-body">
                <p>
                    texto aqui
                </p>
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

    <script type="text/javascript">
        function PreviewImage(no) {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage"+no).files[0]);

            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview"+no).src = oFREvent.target.result;
            };
        }
    </script>

    <script src="js/form/jquery.validate.js"></script>
    <script>
        $(function(){
            $("form").each(function() {
                $(this).validate();
            }); 
        });
    </script>

    <script src="js/select-estado-cidade/cidades-estados-1.2-utf8.js"></script>
    <script src="js/select-estado-cidade/script.js"></script>

    <script type="text/javascript" src="js/filestyle.js"></script>
    <script>
    jQuery(function ($) {                               
        $("input[type=file]").filestyle({ 
        image: "img/upload-foto.png",
        imageheight : 21,
        imagewidth : 250
                                
        });
    });
    </script>
    
</body>
</html>