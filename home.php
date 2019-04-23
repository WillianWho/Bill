<?php
if (!empty($_GET['nome'])) {
    $nome = $_GET['nome'];
} else {
    $nome = "caro visitante";
}
$ano_atual = date("Y");
$idade = $ano_atual - 1998;
$idade_do_curso = $ano_atual - 2017;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style-menu.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/animation.css">

    <script src="./js/navbar.js"></script>


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
    <title>Home</title>

</head>
<body>
    <!-- NAVBAR -->
    <header>
        <div id="navBar" class="header header-fixed">
            <div class="navbar">
                <div class="logo oculto">
                    <a href="#home">
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
                        <li><a href="#home">Home</a></li>
                        <li><a href="./portfolio.html">Portfólio</a></li>
                        <li><a href="#contacts">Contatos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- fim do navBar -->
        <!-- container -->
        <div class="container">
            <hr class="hr-titulo">
            <!-- row 1: home -->
            <div id="home" class="row">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                   <span class="text-center">
                        Olá, <?php echo $nome ?>,
                        meu nome é Willian Ferreira, tenho <?php echo $idade ?> anos e
                        sou Designer Gráfico, Web Design e programador júnior;
                        atualmente curso multimídia pelo CEET Vasco Coutinho.

                    </span>
                    <hr>
                    <span class="text-center">
                        Há <?php echo $idade_do_curso ?> anos cursei Técnico em Informática, também no CEET, e
                        lá eu fui apresentado ao mundo da programação e do web design, nos quais ainda pretendo aprofundar
                        meus conhecimentos e experiências. Porém antes decidi que precisava de melhorar minhas
                        capacidades como front-end, e vi no curso Técnico em Multimídia a oportunidade de fazê-lo.
                    </span>
                    <hr>
                    <span class="text-center">
                        Cursando multimídia conheci o mundo do Design, o qual também me fascina,
                        o que começou como uma aperfeiçoamento da programação, se tornou algo maior.
                        Então é isso, <?php echo $nome ?>, esse é um breve resumo da minha história, caso
                        queira ver meu portfólio basta clicar em portfólio na barra de menu, ou, se preferir,<a href="./portfolio.html"> aqui</a>.

                    </span>
               </div>
            </div>
            <hr class="hr-titulo">
            <!-- row 2: contact -->
            <div id="contacts" class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    
                    <div class="alinhamento-vertical">
                        <img class="contatos to-left" src="./img/social-media-logo/email-logo-preto.png" alt="email">
                        <h1 class="to-right">
                            <a href="mailto:willianoiveira608@gmail.com">Gmail</a> |
                            <a href="mailto:willianoiveira608@hotmail.com">Hotmail</a>
                        </h1>
                    </div>
                    
                    <hr id="linha">
                    
                    <div id="whatsapp"> 
                        <img class="contatos to-left" src="./img/social-media-logo/whatsapp-logo-preto.png" alt="Whatsapp">
                        <h1 class="to-right">
                            <a href="https://api.whatsapp.com/send?phone=5527981477260&text=Olá,%20vim%20pelo%20seu%20site">(27) 9 - 81477260</a>    
                        </h1>
                    </div>
                </div>
            </div>
            <!-- linha 2 fim -->
            <hr class="hr-titulo">
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
</body>
