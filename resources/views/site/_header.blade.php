    <header>
        <div id="header" class="header">
            <div class="container">
                <h1 class="logo"><a href="#"><span>Up</span> </a></h1>
                <h2 class="tagline hidden-xs">Media Technology</h2>
            </div>
            <a href="#about" class="sr-only">Skip to main content</a>
            <nav id="main-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#about-1">@if( isset($configuracao->itemMenu1)) {{ $configuracao->itemMenu1 }} @else Sobre @endif</a></li>
                                <li><a href="#services">@if( isset($configuracao->itemMenu2)) {{ $configuracao->itemMenu2 }} @else Serviços @endif</a></li>
                                <li><a href="#portfolio">@if( isset($configuracao->itemMenu3)) {{ $configuracao->itemMenu3 }} @else Portfolio @endif</a></li>
                                <li><a href="#education">@if( isset($configuracao->itemMenu4)) {{ $configuracao->itemMenu4 }} @else Skills @endif</a></li>
                                <li><a href="#contact">@if( isset($configuracao->itemMenu5)) {{ $configuracao->itemMenu5 }} @else Contato @endif</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <svg class="decor" height="100" preserveaspectratio="none" version="1.1" viewbox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 100 L100 0 L0 0" stroke-width="0"></path>
        </svg>
    </header>

    <section id="main-img">
        <img class="img-responsive" src="{{ asset($header->imagem)}}" alt="">
    </section>
