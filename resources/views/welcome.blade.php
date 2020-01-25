<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}"/>
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}"/>
    <meta property="og:description"
          content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}"/>

    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,800%7cRoboto:300,400,500,700"
          rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/template/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/template/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/template/icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/template/icon-114x114.png') }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target="#main-nav-collapse">

<!--------------- Pre loader --------------->
<div id="faceoff">
    <div id="preloader"></div>
    <div class="preloader-section"></div>
</div>

<!--------------- Navbar --------------->
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="500">
    <div class="container">

        <!--------------- Brand and toggle --------------->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Up</a>
        </div>

        <!--------------- Main Nav --------------->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#intro-area">Sobre</a></li>
                <!-- <li><a href="#features-area">Feature</a></li> -->
                <li><a href="#description-area">Descrição</a></li>
                <li><a href="#screenshot-area">Fotos</a></li>
                <li><a href="#team-area">Equipe</a></li>
                <!-- <li><a href="#download-area">Download</a></li> -->
                <li><a href="#contact-area">Contato</a></li>
                <!-- <li class="nav-download"><a href="#">Download</a></li> -->
            </ul>
        </div>
    </div>
</nav>

<!--------------- Header --------------->
<header id="top-header" class="top-header section-bg">
    <div class="verticle-center">
        <div class="container">
            <div class="row">
                <div class="display-flex">
                    <div class="col-lg-7 col-md-6">
                        <a class="logo" href="#"><img src="{{ asset('img/logo.png') }}" alt="..."></a>
                        <div class="flex_text text-slider">
                            <ul class="slides">
                                <li>SE VOCÊ QUER ALGO NOVO<br>PARE DE FAZER ALGO VELHO.</li>
                                <li>SE FOR PRA DESISTIR, <br>DESISTA DE SER FRACO.</li>
                                <li>TODA CONQUISTA COMEÇA<br>COM A DECISÃO DE TENTAR.</li>
                                <li>SEMPRE PARECE IMPOSSÍVEL, <br>ATÉ ESTAR FEITO.</li>
                            </ul>
                        </div>
                        <p>A oportunidade de tornar seu negócio mais visado, tudo que você precisa para ser lembrado. A
                            publicidade não tem mais formato definido e nem hora certa para acontecer, só tem um
                            objetivo: fazer a diferença ao impactar o público-alvo. </p>
                    </div>
                    <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">
                        <div class="mock-group mock-group-1">
                            <img class="front-mock wow animated fadeInLeft" data-wow-delay="0.5s"
                                 data-wow-duration="1.5s" src="{{ asset('assets/img/mocks/1-front.png') }}" alt="...">
                            <img class="back-mock wow animated fadeInUp" data-wow-duration="4s"
                                 src="{{ asset('assets/img/mocks/1-back.png') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--------------- Main Body Area --------------->
<div class="main-wrap">

    <!--------------- CTA / Free Trial --------------->
    <div class="section cta-section section-bg">
        <div class="container">
            <div class="row">
                <div class="display-flex">
                    <div class="col-md-6">
                        <h4 class="cta-heading">Deixe seu email para entrarmos em contato!</h4>
                    </div>
                    <div class="col-md-6">
                        <form id="trialForm" class="trial-form" action="#" method="post">
                            <input type="email" name="email" placeholder="Seu e-mail" required>
                            <button class="btn btn-white" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- Intro Area --------------->
    <div id="intro-area" class="section section-padding-extra">
        <div class="container">
            <div class="row">
                <div class="intros">
                    <div class="col-sm-4">
                        <div class="intro text-center wow animated fadeInUp" data-wow-duration="1.5s">
                            <span class="intro-icon"><i class="fa fa-paint-brush"></i></span>
                            <h4 class="intro-heading">MARKETING DIGITAL</h4>
                            <p>Um dos principais benefícios do Marketing Digital é que, mesmo com baixo investimento, é
                                possível trabalhar com ações muito efetivas, que vão desde trazer mais visitantes para
                                sua loja, site ou aplicativo até converter mais desses visitantes em clientes. Por isso
                                é bastante indicado também para empresas de médio e pequeno porte que querem crescer de
                                forma acelerada.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="intro text-center wow animated fadeInUp" data-wow-delay="0.5s"
                             data-wow-duration="1.5s">
                            <span class="intro-icon"><i class="fa fa-desktop"></i></span>
                            <h4 class="intro-heading">Sites</h4>
                            <p>A internet se destaca como o meio de comunicação mais eficiente e democrático. Quando
                                você cria um site ele se torna automaticamente um ponto de referência pelos seus
                                consumidores. É através dele que sua clientela fica sabendo suas novidades ou mesmo seus
                                horários e formas de contato. Criar um site é cada vez mais um diferencial em relação a
                                concorrência.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="intro text-center wow animated fadeInUp" data-wow-delay="1s"
                             data-wow-duration="1.5s">
                            <span class="intro-icon"><i class="fa fa-mobile"></i></span>
                            <h4 class="intro-heading">Aplicativos</h4>
                            <p>Com um aplicativo sua empresa pode disparar mensagens instantâneas para todos os usuários
                                com o app instalado e notifica-los sobre um novo lançamento de produto ou serviço, uma
                                oferta especial ou um cupom de desconto. Dessa forma, sua empresa mantém um poderoso e
                                estratégico canal de negócios e marketing, que engaja os clientes e melhora as
                                vendas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--------------- Freatures --------------------
        <div id="features-area" class="section section-padding section-bg features-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-heading">
                            <h2 class="section-title">Crazy Feature</h2>
                            <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="features text-center">
                        <div class="col-md-4 col-sm-6">
                            <div class="feature wow animated fadeInUp" data-wow-delay="0.5s"  data-wow-duration="1.5s">
                                <span class="feature-icon"><i class="fa fa-gear"></i></span>
                                <h4 class="feature-title">Tons of API Callback</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporin cididulabore et dolore</p>
                            </div>
                            <div class="feature wow animated fadeInUp" data-wow-delay="0.5s"  data-wow-duration="1.5s">
                                <span class="feature-icon"><i class="fa fa-star-half-o"></i></span>
                                <h4 class="feature-title">Rebust Demo Package</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporin cididulabore et dolore</p>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-xs text-center wow animated fadeInUp"  data-wow-duration="1.5s">
                            <img src="{{ asset('assets/img/mocks/2.png') }}" alt="...">
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="feature wow animated fadeInUp" data-wow-delay="1s"  data-wow-duration="1.5s">
                                <span class="feature-icon"><i class="fa fa-arrows-alt"></i></span>
                                <h4 class="feature-title">Responsive Support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporin cididulabore et dolore</p>
                            </div>
                            <div class="feature wow animated fadeInUp" data-wow-delay="1s"  data-wow-duration="1.5s">
                                <span class="feature-icon"><i class="fa fa-exchange"></i></span>
                                <h4 class="feature-title">Custom Scrollbar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporin cididulabore et dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        -->

        <!--------------- More Features Area ---------------
        <div id="more-features-area" class="section section-padding-extra">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="section-heading">
                            <h2 class="section-title">More features</h2>
                            <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="display-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="mock-group mock-group-2">
                                <img class="front-mock wow animated fadeInLeft" data-wow-delay="0.5s"  data-wow-duration="1.5s" src="{{ asset('assets/img/mocks/3-front.png') }}" alt="...">
                                <img class="back-mock wow animated fadeInUp"  data-wow-duration="1.5s" src="{{ asset('assets/img/mocks/3-back.png') }} " alt="...">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-offset-1">
                            <div class="more-features">
                                <div class="more-feature">
                                    <span class="more-feature-icon"><i class="fa fa-arrows-alt"></i></span>
                                    <div class="more-feature-content">
                                        <h4 class="more-feature-title">Responsive Support</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetured adip iscing elit, seddo eiusmod</p>
                                    </div>
                                </div>
                                <div class="more-feature">
                                    <span class="more-feature-icon"><i class="fa fa-gear"></i></span>
                                    <div class="more-feature-content">
                                        <h4 class="more-feature-title">Tons of API callbacks</h4>
                                        <p>Lorem ipsum dolor sit amet, con sec tetured adip is cing elit, sed do</p>
                                    </div>
                                </div>
                                <div class="more-feature">
                                    <span class="more-feature-icon"><i class="fa fa-tablet"></i></span>
                                    <div class="more-feature-content">
                                        <h4 class="more-feature-title">IOS/Surface/Android</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetured adipiscing sed do eiusmod</p>
                                    </div>
                                </div>
                                <div class="more-feature">
                                    <span class="more-feature-icon"><i class="fa fa-undo"></i></span>
                                    <div class="more-feature-content">
                                        <h4 class="more-feature-title">Auto-Sliding</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetured adipiscing elit, sed do eiusmod sed do</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        -->

    <!--------------- Fun fact --------------->
    <div id="fun-fact-area" class="section section-padding-extra section-bg fun-fact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">MARKETING</h2>
                        <p class="section-subtitle">Tenha seu negócio mais visado!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fun-facts">
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="fun-fact">
                            <span class="fact-icon"><i class="fa fa-users"></i></span>
                            <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="9999"></span>+
                            </h3>
                            <p class="fact-name">Clientes</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="fun-fact">
                            <span class="fact-icon"><i class="fa fa-cloud-download"></i></span>
                            <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="9999"></span>+
                            </h3>
                            <p class="fact-name">Download's</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="fun-fact">
                            <span class="fact-icon"><i class="fa fa-comments-o"></i></span>
                            <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="9999"></span>+</h3>
                            <p class="fact-name">Comentários</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <div class="fun-fact">
                            <span class="fact-icon"><i class="fa fa-thumbs-o-up"></i></span>
                            <h3 class="fact-count"><span class="fact-counter" data-from="0" data-to="9999"></span>+
                            </h3>
                            <p class="fact-name">Curtidas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- Description --------------->
    <div id="description-area" class="section section-padding-extra">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">Por que Up Media Tec é a Melhor?</h2>
                        <p class="section-subtitle">Pois trabalhamos desde o planejamento e desenvolvimento de seu projeto, até a sua implementação e divulgação. Fornecendo o total apoio para o crescimento de sua empresa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--------------- Description Tabs --------------->
                <div class="display-flex">
                    <div class="col-lg-8 col-md-7 float-left">
                        <div class="description-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#description-1" aria-controls="description-1"
                                                           role="tab" data-toggle="tab"><i
                                                class="fa fa-cloud-download"></i></a></li>
                                <li role="presentation" class="active"><a href="#description-2"
                                                                          aria-controls="description-2" role="tab"
                                                                          data-toggle="tab"><i
                                                class="fa fa-sort-alpha-asc"></i></a></li>
                                <li role="presentation"><a href="#description-3" aria-controls="description-3"
                                                           role="tab" data-toggle="tab"><i
                                                class="fa fa-puzzle-piece"></i></a></li>
                                <li role="presentation"><a href="#description-4" aria-controls="description-4"
                                                           role="tab" data-toggle="tab"><i class="fa fa-random"></i></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="description-1">
                                    <h4 class="description-title">Feature Description Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.Duis aute irure reprehenderit in
                                        voluptate velit esse</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.</p>
                                    <ul>
                                        <li>Consectetur adipisicing elit, sed domod</li>
                                        <li>Richard McClintock, a Latin professor at Hampden</li>
                                        <li>There are many variations of passages</li>
                                        <li>If you are going to use a passage of Lorem Ipsum, you need</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in active" id="description-2">
                                    <h4 class="description-title">Feature Description Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.Duis aute irure reprehenderit in
                                        voluptate velit esse</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.</p>
                                    <ul>
                                        <li>Consectetur adipisicing elit, sed domod</li>
                                        <li>Richard McClintock, a Latin professor at Hampden</li>
                                        <li>There are many variations of passages</li>
                                        <li>If you are going to use a passage of Lorem Ipsum, you need</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="description-3">
                                    <h4 class="description-title">Feature Description Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.Duis aute irure reprehenderit in
                                        voluptate velit esse</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.</p>
                                    <ul>
                                        <li>Consectetur adipisicing elit, sed domod</li>
                                        <li>Richard McClintock, a Latin professor at Hampden</li>
                                        <li>There are many variations of passages</li>
                                        <li>If you are going to use a passage of Lorem Ipsum, you need</li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="description-4">
                                    <h4 class="description-title">Feature Description Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.Duis aute irure reprehenderit in
                                        voluptate velit esse</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed domod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut eniquis notrud exercitation
                                        ullamco laboris nisi ut aliquip commodoquat.</p>
                                    <ul>
                                        <li>Consectetur adipisicing elit, sed domod</li>
                                        <li>Richard McClintock, a Latin professor at Hampden</li>
                                        <li>There are many variations of passages</li>
                                        <li>If you are going to use a passage of Lorem Ipsum, you need</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 float-left">
                        <div class="mock-group mock-group-3">
                            <img class="front-mock wow animated fadeInRight" data-wow-delay="0.5s"
                                 data-wow-duration="1.5s" src="{{ asset('assets/img/mocks/4-front.png') }}" alt="...">
                            <img class="back-mock wow animated fadeInUp" data-wow-duration="1.5s"
                                 src="{{ asset('assets/img/mocks/4-back.png') }}" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- How it works --------------->
    <div id="how-it-works" class="section section-padding section-bg how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="section-title wow animated fadeInDown" data-wow-duration="1.5s">Como funciona?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="video-play-icon wow animated fadeInUp" data-wow-duration="1.5s"
                       href="https://www.youtube.com/watch?v=0I8GmbDU7c4"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!--------------- Screenshot Area --------------->
    <div id="screenshot-area" class="section section-padding-extra">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">Screenshot</h2>
                        <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="screenshots" class="screenshots">
                    <div id="screenshot-carousel" class="screenshot-carousel owl-carousel">
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/1.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/2.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/3.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/1.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/2.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/3.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/1.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/2.jpg') }}" alt="..."></div>
                        <div class="screenshot"><img src="{{ asset('assets/img/screen/3.jpg') }}" alt="..."></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- Reviews --------------->
    <div id="review-area" class="section section-padding section-bg review-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">Reviews</h2>
                        <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="reviews" class="reviews">
                        <div id="review-carousel" class="review-carousel owl-carousel">
                            <div class="review text-center">
                                <div class="reviewer-mock"><img src="{{ asset('assets/img/client-team/client-1.jpg') }}"
                                                                alt="..."></div>
                                <p class="review-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.</p>
                                <h4 class="commenter-name">Jacob Marlin</h4>
                                <p class="commenter-profession"><span class="designation">CEO</span>, <span
                                            class="company">Tech-Rocking</span></p>
                            </div>
                            <div class="review text-center">
                                <div class="reviewer-mock"><img src="{{ asset('assets/img/client-team/client-1.jpg') }}"
                                                                alt="..."></div>
                                <p class="review-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.</p>
                                <h4 class="commenter-name">Jacob Marlin</h4>
                                <p class="commenter-profession"><span class="designation">CEO</span>, <span
                                            class="company">Tech-Rocking</span></p>
                            </div>
                            <div class="review text-center">
                                <div class="reviewer-mock"><img src="{{ asset('assets/img/client-team/client-1.jpg') }}"
                                                                alt="..."></div>
                                <p class="review-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.</p>
                                <h4 class="commenter-name">Jacob Marlin</h4>
                                <p class="commenter-profession"><span class="designation">CEO</span>, <span
                                            class="company">Tech-Rocking</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- Team area --------------->
    <div id="team-area" class="section section-padding-extra">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">Our Team</h2>
                        <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-members">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center wow animated fadeInUp" data-wow-duration="1.5s">
                            <div class="member-mock"><img src="{{ asset('assets/img/client-team/member-1.jpg') }}"
                                                          alt="..."></div>
                            <h4 class="member-name">Jone Doe</h4>
                            <span class="member-work">Graphic Designer</span>
                            <p>Lorem ipsum dolor sit amet, eteturadip isicing elitempor incidi dunt ut labore solidet
                                doloredof.</p>
                            <div class="member-connections">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center wow animated fadeInUp" data-wow-delay="0.5s"
                             data-wow-duration="1.5s">
                            <div class="member-mock"><img src="{{ asset('assets/img/client-team/member-2.jpg') }}"
                                                          alt="..."></div>
                            <h4 class="member-name">Stephen</h4>
                            <span class="member-work">Graphic Designer</span>
                            <p>Lorem ipsum dolor sit amet, eteturadip isicing elitempor incidi dunt ut labore solidet
                                doloredof.</p>
                            <div class="member-connections">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center wow animated fadeInUp" data-wow-delay="1s"
                             data-wow-duration="1.5s">
                            <div class="member-mock"><img src="{{ asset('assets/img/client-team/member-3.jpg') }}"
                                                          alt="..."></div>
                            <h4 class="member-name">Devid Muller</h4>
                            <span class="member-work">Graphic Designer</span>
                            <p>Lorem ipsum dolor sit amet, eteturadip isicing elitempor incidi dunt ut labore solidet
                                doloredof.</p>
                            <div class="member-connections">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member text-center wow animated fadeInUp" data-wow-delay="1.5s"
                             data-wow-duration="1.5s">
                            <div class="member-mock"><img src="{{ asset('assets/img/client-team/member-4.jpg') }}"
                                                          alt="..."></div>
                            <h4 class="member-name">Oliver Liam</h4>
                            <span class="member-work">Graphic Designer</span>
                            <p>Lorem ipsum dolor sit amet, eteturadip isicing elitempor incidi dunt ut labore solidet
                                doloredof.</p>
                            <div class="member-connections">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------- CTA / Purchase -------------
    <div class="section cta-section cta-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h4 class="cta-heading wow animated fadeInLeft" data-wow-duration="1.5s">GEO is one of The Clean and
                        Unique App Template in Themeforest</h4>
                    <a class="btn btn-white wow animated fadeInRight" data-wow-duration="1.5s" href="#">Purchase Now</a>
                </div>
            </div>
        </div>
    </div>
    -->

    <!--------------- FAQ -------------
    <div id="faq-area" class="section section-padding-extra">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">General FAQ</h2>
                        <p class="section-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group wow animated fadeInLeft" data-wow-duration="1.5s" id="faqs" role="tablist"
                         aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading active" role="tab" id="faq1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#faqs" href="#ans1"
                                       aria-expanded="true" aria-controls="ans1">Q: What does it mean by faqs?</a>
                                </h4>
                            </div>
                            <div id="ans1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq1">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incidi dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam incidi
                                        dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam.</p>
                                    <p class="answered-on">Answer: Sunday, April 6th, 2017 at 3:10 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq2">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqs"
                                       href="#ans2" aria-expanded="false" aria-controls="ans2">Q: How to purchase with
                                        discount code?</a>
                                </h4>
                            </div>
                            <div id="ans2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq2">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incidi dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam incidi
                                        dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam.</p>
                                    <p class="answered-on">Answer: Sunday, April 6th, 2017 at 3:10 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq3">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqs"
                                       href="#ans3" aria-expanded="false" aria-controls="ans3">Q: How to fix uo when it
                                        doesn't work?</a>
                                </h4>
                            </div>
                            <div id="ans3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq3">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incidi dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam incidi
                                        dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam.</p>
                                    <p class="answered-on">Answer: Sunday, April 6th, 2017 at 3:10 pm</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="faq4">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#faqs"
                                       href="#ans4" aria-expanded="false" aria-controls="ans4">Q: How to make a
                                        conversation?</a>
                                </h4>
                            </div>
                            <div id="ans4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq4">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incidi dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam incidi
                                        dunt ut labore et dolore magna aliqua, Ut enim ad minim veniam.</p>
                                    <p class="answered-on">Answer: Sunday, April 6th, 2017 at 3:10 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

-->

    <!--------------- Subscribe -------------
    <div id="subscribe-area" class="section section-padding section-bg subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="section-heading no-sep wow animated fadeInDown" data-wow-duration="1.5s">
                        <h2 class="section-title">Newsletter Subscribe</h2>
                        <p class="section-subtitle">There are many variations of passages of Lorem Ipsum available and
                            is dummy</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <form action="#" id="subscribeForm" class="subscribe-form wow animated fadeInUp"
                          data-wow-duration="1.5s" method="post">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                        <p class="newsletter-success"></p>
                        <p class="newsletter-error"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    -->

    <!--------------- Reconhecido --------------->
    <div id="subscribe-area" class="section section-padding section-bg subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="section-heading no-sep wow animated fadeInDown" data-wow-duration="1.5s">
                        <h2 class="section-title">Saia do anonimato</h2>
                        <p class="section-subtitle">Seja reconhecido!</p>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="text-center">
                            <div class="reviewer-mock"><img src="{{ asset('assets/img/line_arrow.png') }}"
                                                          alt="..."></div>
                </div>
            </div>

        </div>
    </div>


    <!--------------- Contact Area -------------->
    <div id="contact-area" class="section section-padding-extra contact-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="section-heading">
                        <h2 class="section-title">Deixe um Recado</h2>
                        <p class="section-subtitle">Estamos aguardando seu recado para que possamos entrar em contato
                            com voçê!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form wow animated fadeInUp" data-wow-duration="1.5s"
                          action="{{ route('site.contato.enviar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6"><input id="name" type="text" name="nome" placeholder="Nome" required>
                            </div>
                            <div class="col-sm-6"><input id="email" type="email" name="email" placeholder="E-mail"
                                                         required></div>
                            <div class="col-sm-9"><input id="subject" type="text" name="subject" placeholder="Assunto"
                                                          required></div>
                            <div class="col-sm-3"><input id="email" type="telefone" name="telefone" placeholder="Telefone"
                                                         required></div>
                            <div class="col-sm-12"><textarea id="message" name="mensagem" placeholder="Mensagem" rows="4"
                                                             required></textarea></div>
                            <div class="col-sm-12 text-center">
                                <button class="btn" type="submit">Enviar Mensagem</button>
                            </div>
                            <div class="col-md-12 text-center">
                                <p class="input-success">We have received your mail, We will get back to you soon!</p>
                                <p class="input-error">Sorry, Message could not send! Please try again.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="map-section" class="section">
        <div class="google-map" id="location" data-lat="-16.435549" data-lng="-51.121671" data-zoom="16"
             style="height: 330px"></div>
    </div>
</div>

<!--------------- Footer --------------->
<footer>
    <div class="container text-center">
        <a class="logo-footer wow animated fadeInDown" data-wow-duration="1.5s" href="#top-header"><img
                    src="{{ asset('img/logo.png') }}" alt="..."></a>
        <div class="socials wow animated fadeIn" data-wow-duration="1.5s">
            <a href="#" class="social"><i class="fa fa-facebook"></i></a>
            <a href="#" class="social"><i class="fa fa-twitter"></i></a>
            <a href="#" class="social"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="social"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
        </div>
        <p class="copyright wow animated fadeInUp" data-wow-duration="1.5s">&copy; Up Media Technology - 2017. All
            Rights Reserved.</p>
    </div>
</footer>

<a id="to-top" class="to-top" href="#top-header" data-spy="affix" data-offset-top="500"><i class="fa fa-chevron-up"></i></a>

<!--------------- Script --------------->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/visible.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
<script src="{{ asset('assets/js/map.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>