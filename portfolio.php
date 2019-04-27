<?php
if (!empty($_GET['nome'])) {
    $nome = $_GET['nome'];
     
} else {
    $nome = "caro visitante";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style-menu.css">
    <link rel="stylesheet" href="./css/portiflio.css">
    <link rel="stylesheet" href="./css/desafio.adobe.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/animation.css">


    <script src="./js/navbar.js"></script>
    <script src="./js/portfolio.js"></script>

    <!-- ### bootstrap #### -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <!-- jaquery -->
    <script src="./js/jquery-2.1.3.js"></script>
    <title>Portfólio</title>

</head>

<body>
    <!-- Preloader -->
    <div id="loader">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6 subscrever">
                    <img id="bill-pre-loader" src="./img/anima-logo/logo-classico.gif" alt="" srcset="">

                </div>

            </div>

        </div>
    </div>
    <!-- NAVBAR -->
    <header>
        <div id="navBar" class="header header-fixed">
            <div class="navbar">
                <div class="logo oculto">
                    <a href="./home.php?nome=<?php echo $nome?>#home">
                        <img id="logo-img" src="./img/Bill.png" onmouseenter="changeDisplay(this.id,'logo-img-2')"
                            alt="Who Design">
                        <img id="logo-img-2" src="./img/Bill-II.png" onmouseleave="changeDisplay(this.id,'logo-img')"
                            alt="Who Design">
                    </a>
                </div>

                <input type="checkbox" id="navbar-toggle">
                <label for="navbar-toggle"><i></i></label>
                <nav class="menu">
                    <ul>
                        <li><a href="./home.php?nome=<?php echo $nome?>#home">Home</a></li>
                        
                        <li><a href="#portfolio">Portfólio</a></li>
                        <li><a href="./home.php?nome=<?php echo $nome?>#contacts">Contatos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- fim do navBar -->
        <div id="space" class="container">

            <div class="row">

                <div class="col-md-12">
                    <div class="text-center">
                        <h1>
                            Portfólio
                        </h1>
                    </div>

                </div>

            </div>

        </div>
        <!-- CONTENT -->
        <div class="text-center container">

            <hr id="hr1" class="hr-titulo">
            <!-- linha 1 -->
            <div class="row">

                <div class="col-md-4 caixa">
                    <div class="text-center oculto">
                        Esse cliente tinha a necessidade de uma marca e um logotipo, a proposta foi a criação de um
                        conceito de grupo, pois ele atendia em diferentes seguimentos. O nome A&N foi uma sugestão do
                        próprio, a inicial dele e de sua esposa, o logotipo representa a confiança que há entre as
                        partes nos diversos serviços prestados por ele.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/A&N/mockups/aen.png" alt="A&N">
                    </div>
                </div>

                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        O uso da cor verde para Comércio e Serviços atende à necessidade do clinte querer representar a
                        confiança e segurança que seus clientes tem nele, uma vez que ele próprio os atende.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/A&N/mockups/aen-coeservico.png"
                            alt="Comércio e Serviços">
                    </div>
                </div>

                <div class="col-md-4 caixa">
                    <div class="text-center oculto">
                        Para o Delivery foi usado a cor vermelha, pois representa a urgência e a rapidez nas entregas.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/A&N/mockups/aen-delivery.png" alt="A&N">
                    </div>
                </div>


            </div>
            <hr>
            <!-- linha 2 -->
            <div class="row">
                <div class="col-md-4 caixa">

                    <div class="text-center oculto">
                        Para Personalizados foi usado a cor rosa pois esse segumento tem um público majoritariamente
                        feminino, havia uma necessidade de trazer uma delicadeza a mais
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/A&N/mockups/aen-personalizados.png" alt="A&N">
                    </div>
                </div>

                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Esse cliente após um período usando uma marca alternativa decidiu voltar a usar sua marca
                        original, para isso ele tinha a necessidade de um rebranding.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/Casa-Girassol/mockup/casa-girassol.png"
                            alt="Casa Girassol">
                    </div>
                </div>

                <div class="col-md-4 caixa">
                    <div class="text-center oculto">
                        Essa foi uma proposta alternativa para os banhos aromáticos da "Casa Girassol", esse logotipo
                        traz um apelo religioso mais forte buscando trabalhar o sincretismo que Iemanjá tem com algumas
                        santas católicas. Traz também uma referência à lenda de Iemanjá ter criado a lua.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/Casa-Girassol/mockup/Faces-da-deusa.png"
                            alt="Faces da deusa">
                    </div>
                </div>
            </div>
            <hr>
            <!-- linha 3 -->
            <div class="row">
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        O cliente, mesmo da Casa Girassol, tinha necessidade de que fosse criado rótulos para seus
                        banhos aromáticos, no entanto o produto também necessitava de um nome. Para suprir essa
                        necessidade foi pensado em "Magia de Lótus", pois ele pode ser associado ao místico, mas também
                        à natureza. O logotipo foi então desenvolvido, trazendo símbolos que se relacionam com proteção
                        e purificação, mas também à magia e ao encanto.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/Casa-Girassol/mockup/magia-de-lotus.png"
                            alt="Magia de Lótus">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Essa foi uma proposta de rótulo para os banhos aromáticos da "Casa Girassol".
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/Casa-Girassol/mockup/ml-ervadoce.png"
                            alt="Magia de Lótus - Erva Doce">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Essa foi uma proposta de rótulo para os banhos aromáticos da "Casa Girassol".
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/Casa-Girassol/mockup/ml-flor-de-laranjeira.png"
                            alt="Magia de Lótus - Flor de Laranjeira">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Atendendo à proposta da Adobe Brasil: dar um novo significado à imagem postada no
                        &ldquo;Story&rdquo; de seu perfil no Instagram
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio"
                            src="./img/portfolio/Desafio-Adobe/Mockup/desafio-adobe-1-mockup-2.png"
                            alt="Desafio Adobe 1">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Atendendo à proposta da Adobe Brasil: dar um novo significado à imagem postada no
                        &ldquo;Story&rdquo; de seu perfil no Instagram
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio"
                            src="./img/portfolio/Desafio-Adobe/Mockup/desafio-adobe-3-mockup-2.png"
                            alt="Desafio Adobe Mockup 3">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        Atendendo à proposta da Adobe Brasil: dar um novo significado à imagem postada no
                        &ldquo;Story&rdquo; de seu perfil no Instagram
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio"
                            src="./img/portfolio/Desafio-Adobe/Mockup/desafio-adobe-4-mockup-2.png"
                            alt="Desafio Adobe 4">
                    </div>
                </div>
            </div>
            <!-- linha 4 -->
            <div class="row">
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        I caminhada pela inclusão da pessoa com T21, a sindrome de Down, flyer desenvolvido para
                        para o Vitória Down. 
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/vitoria-down/vitoria-down-cartaz.png"
                            alt="Magia de Lótus">
                    </div>
                </div>
                <div class="col-md-4 caixa margin-left">

                    <div class="text-center oculto">
                        I caminhada pela inclusão da pessoa com T21, a sindrome de Down, Camisa do evento desenvolvido para
                        para o Vitória Down.
                    </div>
                    <div class="ocultoImg">
                        <img class="img-portfolio" src="./img/portfolio/vitoria-down/caminhadown.png" alt="Magia de Lótus">
                    </div>
                </div>
            </div>
            <hr id="hr2" class="hr-titulo">
            <!-- fim da class container -->
        </div>
        <!-- FOOTER -->
        <div id="footer" class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="decoration-none" href="http://facebook.com/WillianWho">
                        <img id="logo-facebook-footer-branco"
                            onmouseenter="changeDisplay(this.id,'logo-facebook-footer')"
                            src="./img/social-media-logo/facebook-branco.png" alt="Facebook">
                        <img class="animation-pulse-fb" id="logo-facebook-footer"
                            onmouseleave="changeDisplay(this.id,'logo-facebook-footer-branco')"
                            src="./img/social-media-logo/facebook.png" alt="Facebook">
                    </a>

                    <a class="decoration-none" href="http://intagram.com/WillianWho">
                        <img id="logo-instagram-footer-branco"
                            onmouseenter="changeDisplay(this.id,'logo-instagram-footer')"
                            src="./img/social-media-logo/instagram-branco.png" alt="Instagram">
                        <img id="logo-instagram-footer"
                            onmouseleave="changeDisplay(this.id,'logo-instagram-footer-branco')"
                            src="./img/social-media-logo/instagram.png" alt="Instagram">
                    </a>

                    <a class="decoration-none" href="http://twitter.com/WillianWho">
                        <img id="logo-twitter-footer-branco"
                            onmouseenter="changeDisplay(this.id,'logo-twitter-footer-azul')"
                            src="./img/social-media-logo/twitter-branco.png" alt="Twitter">
                        <img id="logo-twitter-footer-azul"
                            onmouseleave="changeDisplay(this.id,'logo-twitter-footer-branco')"
                            src="./img/social-media-logo/twitter-azul.png" alt="Twitter">

                    </a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            // Este evendo é acionado após o carregamento da página
            jQuery(window).load(function () {
                //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.

                jQuery("#loader").delay(4000).fadeOut("slow");
            });
        </script>
</body>

</html>