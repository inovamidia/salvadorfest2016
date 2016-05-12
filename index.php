<?php include("incs/inc-includes.php"); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Salvador Fest 2016</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head>
<!--/head-->

<body id="home" class="homepage">

    <?php include("incs/inc-header-nav.php"); ?>

    <section id="main-slider">
        <div class="owl-carousel">

            <?php
                $bannerConsulta     =   $Consulta->listarPDO(" bann_titulo, bann_arquivo01 ", "banner", 
                                        " WHERE bann_status = 1 ORDER BY bann_ordem ASC ");            
                foreach( $bannerConsulta as $Key => $bannerCampo ){
            ?>
        
            <div href="javascript:void(null);" onclick="window.open('https://ingressos.salvadorfest.com.br','_blank');" class="item" style="background-image: url(../midia/arquivo01Banner/<?php print $bannerCampo['bann_arquivo01']?>");>
            </div><!--/.item-->

            <?php } ?>

        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->
    
    <!--fest-->
    <section id="fest">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive img-txt-ssafest" src="images/img-ssa-fest.png" alt="">
                    <div class="info-fest-esq">
                        <p><i>Local</i></p>
                        <p>Parque de Exposições<br><small>Av. Luiz Vianna Filho, S/N, Paralela</small></p>
                        <br>
                        <p><i>Abertura dos portões</i></p>
                        <p>A partir de 12:00hs</p>
                    </div>
                    <div class="box-links">
                        <a class="bt-link" href="https://ingressos.salvadorfest.com.br" target="_blank">Compre seu ingresso</a>
                        <a class="bt-link" data-toggle="modal" data-target=".mapa">Mapa do evento</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media wow fadeInRight">
                        <div class="info-fest-dir media-body">
                            <div class="box-info">
                                <p>
                                    <b>Salvador Fest</b>, famosa por ser <b>A MAIOR FESTA DE CAMISA COLORIDA DO MUNDO</b> e por proporcionar o maior encontro entre os bairros da cidade, é também conhecida por ser um dos mais importantes festivais do cenário musical do país, que mistura ritmos como o Axé, Pagode, Samba, Arrocha, Forró e Sertanejo.
                                </p>
                                <a class="bt-link" data-toggle="modal" data-target=".evento">>> Saiba mais</a>
                            </div>
                            <br>
                            <img class="img-txt-ssafest" src="images/img-txt-ssafest.png" alt=""/>
                            <div class="box-video mbed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" width="100%" height="240" src="https://www.youtube.com/embed/kFecc4In_wc?list=PLTTBQ2Cr6PrTefMSaBYcYGR_Qn6mIfrF4" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade evento" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myLargeModalLabel">O EVENTO</h4>
                </div>
                <div class="modal-body">
                    <img class="img-responsive" src="images/logo.png" alt="logo">                                    
                    <img class="img-responsive" src="images/foto-evento.jpg" alt="">   
                    <br>
                    <p>
                        Salvador Fest, famosa por ser A MAIOR FESTA DE CAMISA COLORIDA DO MUNDO e por proporcionar o maior encontro entre os bairros da cidade, é também conhecida por ser um dos mais importantes festivais do cenário musical do país, que mistura ritmos como o Axé, Pagode, Samba, Arrocha, Forró e Sertanejo.
                        <br><br>
                        Com ingressos a preços populares e total diversidade musical, o Salvador Fest oferece à população o acesso a shows de artistas e bandas nacionais “de peso”.
                        <br><br>
                        Em sua 10a edição, a maior festa de camisa colorida do mundo acontecerá domingo, dia 20 de Setembro, no Parque de Exposições de Salvador, a partir das 12h, por onde devem passar milhares de pessoas. Uma mega estrutura será montada em mais de 66 mil metros quadrados para comemorar os 10 anos da grande e consolidada festa do calendário musical baiano: equipamentos de última geração e cenário especial estão sendo preparados para receber as 12 horas ininterruptas de música, com mais de 17 atrações divididas nos palcos “Salvador 2015” e “Pagodão”.
                        <br><br> 
                        Sucesso absoluto de público, o Salvador Fest é, há 10 anos, a festa mais esperada pelos baianos, que se encantam e emocionam ao lado dos turistas que vêm de todo Brasil para curtir a diversidade musical, o encontro de todas as tribos e o colorido da cidade que respira as cores da festa.
                        <br><br>
                        Realizado pela Salvador Produções, uma das mais conceituadas empresas do ramo de entretenimento na Bahia, o Salvador Fest movimenta a economia da cidade e o comércio, gerando uma média de 2.000 empregos diretos e indiretos, oferecendo entretenimento de qualidade à população e estimulando o turismo na Bahia.
                    </p>                           
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mapa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myLargeModalLabel">MAPA DO EVENTO</h4>
                </div>
                <div class="modal-body">
                    <img src="images/mapa_ssafest.png" width="100%" alt="">  
                    <h3><strong>A Estrutura oferece:</strong></h3>                              
                    <p>         
                        • 18 atrações<br/>
                        • 01 tonelada de equipamentos de última Geração<br/>
                        • 03 praças de alimentação<br/>
                        • 03 postos médicos<br/>
                        • Ilhas extras de bar espalhadas por todo parque para maior facilidade, comodidade e conforto do público.<br/>
                        • Banheiros químicos espalhados por vários pontos do parque<br/>
                        • Sanitários femininos exclusivos<br/>
                        • Linhas exclusivas de ônibus para toda cidade, antes, durante e depois do evento.<br/>
                        • Pontos extras de taxis na Paralela como na Av. Dorival Caymmi<br/>
                        • Estacionamento fechado para mais de 5.000 mil veículos<br/>
                        • Segurança e policiamento reforçado.<br/>
                        • Delegacia Especial, Juizado de Menores e achados e perdidos
                    </p>                            
                </div>
            </div>
        </div>
    </div>
    <!-- / fest-->

    <!--attractions-->
    <section id="attractions">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6"></div>
                <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <img class="img-responsive tit-attraction" src="images/tit-attractions.png" alt=""/>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                <h2 class="name-location">Palco</h2>
            </div>

            <!--#row-->
            <div class="row">
                <div class="box-attraction">

                    <?php
                        $arrayCor           = array("200ms", "300ms", "400ms", "laranja", "rosa", "amarelo");
                        $atracoesConsulta   =   $Consulta->listarPDO(" atra_titulo, atra_local, atra_arquivo01 ", "atracoes", 
                                                " WHERE atra_status = 1 AND atra_local = 'palco-salvador' ORDER BY atra_ordem ASC ");
                                                
                        $count           = 2;                        
                        foreach( $atracoesConsulta as $key => $atracoesCampo ){
                    ?>

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="<?php print $count?>00ms" data-wow-delay="0ms">
                        <div class="media">
                            <div class="media-body">
                                <img class="img-attraction" src="../midia/arquivo01Atracoes/<?php print $atracoesCampo['atra_arquivo01']?>" width="100%" alt="<?php print utf8_encode($atracoesCampo['atra_titulo'])?>">
                                <h2 class="name-attraction"><?php print utf8_encode($atracoesCampo['atra_titulo'])?></h2>
                            </div>
                        </div>
                    </div>

                    <?php $count++; } ?>

                </div>
            </div>
            <!--/#row-->

            <br clear="all"/>

            <div class="col-md-12 wow fadeInUp" data-wow-duration="600ms" data-wow-delay="0ms">
                <h2 class="name-location">Camarote</h2>
            </div>

            <!--#row-->
            <div class="row">
                <div class="box-attraction">

                    <?php
                        $arrayCor           = array("vermelho", "azul", "verde", "laranja", "rosa", "amarelo");
                        $atracoesConsulta   =   $Consulta->listarPDO(" atra_titulo, atra_local, atra_arquivo01 ", "atracoes", 
                                                " WHERE atra_status = 1 AND atra_local = 'palco-pagodao' ORDER BY atra_ordem ASC ");
                                                
                        $count2           = 2;                        
                        foreach( $atracoesConsulta as $key => $atracoesCampo ){
                    ?>

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="<?php print $count2?>00ms" data-wow-delay="0ms">
                        <div class="media">
                            <div class="media-body">
                                <img class="img-attraction" src="../midia/arquivo01Atracoes/<?php print $atracoesCampo['atra_arquivo01']?>" width="100%" alt="<?php print utf8_encode($atracoesCampo['atra_titulo'])?>">
                                <h2 class="name-attraction"><?php print utf8_encode($atracoesCampo['atra_titulo'])?></h2>
                            </div>
                        </div>
                    </div>

                    <?php $count2++; } ?>

                </div>
            </div>
            <!--/#row-->
        </div>
    </section>
    <!--/#attractions-->
    
    <!--#ticket-->
    <section id="tickets">

        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <img class="img-responsive tit-tickets" src="images/tit-ticket.png" alt=""/>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">

                        
    
                        <?php
                            // LISTAGEM . OPCOES VENDAS
                            $vendasConsulta    = $Consulta->listarPDO(" vend_texto, vend_realizacao ", "vendas", 
                                                    " WHERE vend_status = 1 ORDER BY vend_id ASC ");  
                            foreach( $vendasConsulta as $Key => $vendasCampo ){
                        ?>
                            <p><?php print utf8_encode($vendasCampo['vend_texto'])?></p>  

                        <?php } ?>
                        <a href="<?php print utf8_encode($vendasCampo['vend_realizacao'])?>" target="_blank">
                            <img class="img-bt-compre img-responsive" src="images/bt-link-img-compre.png" alt="">
                        </a>       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#ticket-->

    <!--#contact-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-duration="900ms" data-wow-delay="0ms">
                    <img class="img-responsive tit-contact" src="images/tit-contact.png" alt="">
                    <div class="info-contact">
                        <p>Telefone: 71 <big>3161-2001</big></p>
                        <p>Whatsapp: 71 <big>9178-7616</big></p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="0ms">
                    <div class="contact-form">
                        <form id="main-contact-form" name="contact-form" method="get" action="http://www.caixaassistencianacional.com.br/sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Mensagem" required></textarea>
                            </div>
                            <button type="submit" class="btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--Rodapé-->
            <?php include("incs/inc-footer.php"); ?>
            <!--Fim-Rodapé--> 
        </div>
    </section>
    <!--/#contact-->

    
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    $(function(){
        var altura_tela = $(window).height() - 170;
         $(".item").height(altura_tela);
        $( window ).resize(function() {
        var altura_tela = $(window).height() - 170;
         $(".item").height(altura_tela);
        });
    }); 
    </script>

</body>
</html>