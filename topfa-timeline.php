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


    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
</head>
<!--Fim-Head-->

<body id="topfa">

    <?php include("incs/inc-header-nav.php"); ?>
        
    <div class="container-fluid">
        <div class="container"> 
          
            <div class="row">

                <header class="header-topfa">   
                    <h1 class="text-uppercase">Top Fã!</h1>            
                    <a class="text-uppercase" href="topfa.php">> sair</a>
                </header> 

                <hr>

                <div class="top-fa">
    
                    <div class="bg-branco header texto wow fadeInUp" data-wow-duration="2s">
                        <div class="box-content">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="content-header"> 
                                        <figure class="figure-perfil">
                                            <a href="toppida-perfil/4">
                                                <img class="img-perfil" src="http://www.pida.com.br/midia/thumbnails.php?ft=arquivo01Fans_top/paixaoinovamidiacombr.jpg&wi=300"/>
                                            </a>
                                        </figure> 
                                        <section class="box-dados">                        
                                            <div class="box-nome">
                                                <a href="toppida-perfil/4">Everton Paixão</a>
                                            </div>
                                            <div class="box-pontuacao">
                                            <b>0</b> pts</div>
                                            <a class="link-editar" href="topfa-editar.php"><i class="fa fa-pencil-square-o fa-lg"></i>Editar perfil</a>
                                        </section>     
                                    </div>



                                    <div class="box-menu">
                                        <a onClick="recado();" class="link link-recado"><i class="fa fa-pencil fa-2x"></i> Recado</a>
                                        <a onClick="foto();" class="link link-foto"><i class="fa fa-picture-o fa-2x"></i> Fotos</a>
                                        <a onClick="video();" class="link link-video"><i class="fa fa-camera-retro fa-2x"></i> Vídeos</a>
                                        <a onClick="ranking();" class="link link-ranking"><i class="fa fa-signal fa-2x"></i> Ranking</a>
                                        <a onClick="regras();" class="link link-regras"><i class="fa fa-newspaper-o fa-2x"></i> Regras</a>
                                    </div>
                                    <?php include("incs/inc-box-postar.php"); ?>

                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="container box-posts">

                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="wow fadeInUp" data-wow-duration="2s">
                                    <div class="box-content">

                                        <?php include("incs/inc-posts.php"); ?>
                                        
                                    </div>
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
    <script src="js/wow.min.js"></script>
    <!--Fim-JS-->

    <!--script type="text/javascript">
    $(function() {
        var offset = $(".scrollfixed").offset();
        var topPadding = 250;
        $(window).scroll(function() {
            if ($(window).scrollTop() > offset.top) {
                $(".scrollfixed").stop().animate({
                    marginTop: $(window).scrollTop() - offset.top + topPadding
                });
            } else {
                $(".scrollfixed").stop().animate({
                    marginTop: 0
                });
            };
        });
        
        $(window).resize(function() 
        {
            sidebarScrollTop = $(".scrollfixed").offset().top;
        });
        
        $(document).resize(function() 
        {
            sidebarScrollTop = $(".scrollfixed").offset().top;
        });
    
    });
    </script-->

    <script>
    $(".link-recado").click(function () {
        $(".link").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".link-foto").click(function () {
        $(".link").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".link-video").click(function () {
        $(".link").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".link-regras").click(function () {
        $(".link").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".link-ranking").click(function () {
        $(".link").removeClass("selected");
        $(this).addClass("selected");
    });
    function recado(){              
        document.getElementById("postar-recado").style.display="block";
        document.getElementById("postar-foto").style.display="none";
        document.getElementById("postar-regras").style.display="none";
        document.getElementById("postar-ranking").style.display="none";
        document.getElementById("postar-video").style.display="none";
    }
    function foto(){                
        document.getElementById("postar-recado").style.display="none";
        document.getElementById("postar-foto").style.display="block";
        document.getElementById("postar-regras").style.display="none";
        document.getElementById("postar-ranking").style.display="none";
        document.getElementById("postar-video").style.display="none";
    }
    function video(){               
        document.getElementById("postar-recado").style.display="none";
        document.getElementById("postar-foto").style.display="none";
        document.getElementById("postar-regras").style.display="none";
        document.getElementById("postar-ranking").style.display="none";
        document.getElementById("postar-video").style.display="block";
    }
    function regras(){               
        document.getElementById("postar-recado").style.display="none";
        document.getElementById("postar-foto").style.display="none";
        document.getElementById("postar-video").style.display="none";
        document.getElementById("postar-ranking").style.display="none";
        document.getElementById("postar-regras").style.display="block";
    }
    function ranking(){               
        document.getElementById("postar-recado").style.display="none";
        document.getElementById("postar-foto").style.display="none";
        document.getElementById("postar-video").style.display="none";
        document.getElementById("postar-regras").style.display="none";
        document.getElementById("postar-ranking").style.display="block";
    }
    </script>

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