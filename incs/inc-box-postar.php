<div id="postar-recado" class="box-postar">
    <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="" method="post">
        <textarea minlength="30" class="required" placeholder="escreva seu recado."></textarea>
        <input type="submit" value="PUBLICAR" name="enviar">
    </form>
</div>

<div id="postar-foto" class="box-postar">
    <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="" method="post" enctype="multipart/form-data" novalidate> 
        <input class="upload required" id="uploadImage2" type="file" name="imagemCadastro" onchange="PreviewImage(2);" size="0" />
        <label class="inserir-foto"><i class="fa fa-photo"></i>Inserir Foto</label>
        <br style="clear:both"/>
        <img id="uploadPreview2"/>
        <br style="clear:both"/>
        <textarea minlength="30" class="required" placeholder="insira um texto."></textarea>
        <input type="submit" value="PUBLICAR" name="enviar">
    </form>
</div>

<div id="postar-video" class="box-postar">
    <form name="formCadastro" id="form-cadastro" class="form-cadastro" action="" method="post"> 
        <label class="inserir-foto"></label>
        <br style="clear:both"/>
        <input type="text" class="required"  placeholder="insira a url Youtube do seu vídeo."></textarea>
        <input type="submit" value="PUBLICAR" name="enviar">
    </form>
</div>

<div id="postar-regras" class="box-postar">
    <div class="box-conteudo">
        <h3>Como jogar</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod risus eget tellus elementum laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et mauris enim. Vivamus sed tincidunt augue, a cursus neque. Integer sollicitudin sed nunc vitae luctus. Aliquam est nulla, vehicula sed metus id, tempus semper lacus. Cras rutrum lacinia dolor, eu fringilla nulla laoreet id. Nunc fermentum volutpat luctus. Nulla eros mauris, tristique vel congue sed, lobortis ullamcorper tortor. In blandit, leo porttitor ultricies lacinia, quam nulla laoreet neque, luctus euismod magna leo sed magna. Etiam eros nunc, tincidunt non lacinia eget, finibus eu mauris. Aenean dolor tortor, gravida nec est nec, gravida mattis ante. Nulla odio quam, molestie et fermentum quis, sollicitudin ac lorem. Vivamus eget vulputate erat, eu volutpat nunc. </p>
    </div>
    <div class="box-conteudo">
        <h3>Pontuação</h3>
        <p>Recado: <b>1 ponto</b></p>
        <p>Foto: <b>6 pontos</b></p>
        <p>Vídeo: <b>10 ponto</b></p>
    </div>
    <div class="box-conteudo">
        <h3>Premiação</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod risus eget tellus elementum laoreet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et mauris enim. Vivamus sed tincidunt augue, a cursus neque. Integer sollicitudin sed nunc vitae luctus. Aliquam est nulla, vehicula sed metus id, tempus semper lacus. Cras rutrum lacinia dolor, eu fringilla nulla laoreet id. Nunc fermentum volutpat luctus. Nulla eros mauris, tristique vel congue sed, lobortis ullamcorper tortor. In blandit, leo porttitor ultricies lacinia, quam nulla laoreet neque, luctus euismod magna leo sed magna. Etiam eros nunc, tincidunt non lacinia eget, finibus eu mauris. Aenean dolor tortor, gravida nec est nec, gravida mattis ante. Nulla odio quam, molestie et fermentum quis, sollicitudin ac lorem. Vivamus eget vulputate erat, eu volutpat nunc. </p>
    </div>
</div>

<div id="postar-ranking" class="box-postar">

    <div class="box-conteudo">
        <select name="mes" onChange="MM_jumpMenu('self',this,0)">
            <option value="Geral" selected>Geral</option>
            <option value="nov2015">Novembro 2015</option>
            <option value="out2015">Outubro 2015</option>
            <option value="set2015">Setembro 2015</option>
        </select>
        <form name="buscar">
            <input type="text" name="buscar" placeholder="Buscar Fã">
        </form>
    </div>

    <br clear="all">

    <!-- Box Paginação - JS  -->
    <div class="pajinate">

        <div class="list">

            <div class="box-top">
                <div class="row">
                    <div class="col-md-1 col-xs-1 col-sm-1 box"><div class="box-colocacao">1º</div></div>
                    <div class="col-md-3 col-xs-3 col-sm-3 box"><img class="box-foto img-center img-circle img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/p160x160/10403599_911505288967091_2772604716268773326_n.jpg?oh=7ea8aa7a9d205425c9069b1821122a1e&oe=57ABF6F3&__gda__=1473717326_98aaac373276e379d0a9139122838682"></div>
                    <div class="col-md-6 col-xs-6 col-sm-6 box"><div class="box-nome">Caio Duarte Mendes</div></div>
                    <div class="col-md-1 col-xs-1 col-sm-2 box"><div class="box-pontos">999</div></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1 col-xs-1 col-sm-1 box"><div class="box-colocacao">2º</div></div>
                    <div class="col-md-3 col-xs-3 col-sm-3 box"><img class="box-foto img-center img-circle img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p160x160/12651130_952949568131024_4737344126032634794_n.jpg?oh=9490d729ac0888fa0b31ddf59bba9cb0&oe=579BDCB2&__gda__=1470911316_01474a942d0a2488693646c6a21e8f4d"></div>
                    <div class="col-md-6 col-xs-6 col-sm-6 box"><div class="box-nome">Caetano Pompéu Cícero</div></div>
                    <div class="col-md-1 col-xs-1 col-sm-2 box"><div class="box-pontos">999</div></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-1 col-xs-1 col-sm-1 box"><div class="box-colocacao">3º</div></div>
                    <div class="col-md-3 col-xs-3 col-sm-3 box"><img class="box-foto img-center img-circle img-responsive" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xft1/v/t1.0-1/c0.0.160.160/p160x160/12991091_760052324096836_830941511007304662_n.jpg?oh=b576b925a6fa2963737f588b510ff1ad&oe=57A0FDA5&__gda__=1471058994_f8c5841b99841c8c9a9feb38de3ebee7"></div>
                    <div class="col-md-6 col-xs-6 col-sm-6 box"><div class="box-nome">Rafa Gomes Santos</div></div>
                    <div class="col-md-1 col-xs-1 col-sm-2 box"><div class="box-pontos">9199</div></div>
                </div>
                <hr>
            </div>

        </div>

        <br>
        <div class="page_navigation clearfix"></div>

    </div>

</div>