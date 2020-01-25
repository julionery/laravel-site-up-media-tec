<section id="contact" class="section-page">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">{{$contato->titulo}}</h2>
                <h3 class="section-subheading text-muted">{{$contato->descricao}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('site.contato.enviar') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome *" name="nome" required
                                       data-validation-required-message="Por favor digite seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail *" name="email" required
                                       data-validation-required-message="Por favor digite seu endereço de e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Telefone *" name="telefone" required
                                       data-validation-required-message="Por favor digite seu numero de telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Sua messagem *" name="mensagem" rows="6"
                                          required
                                          data-validation-required-message="Por favor digite sua mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Enviar Mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul id="social-links">
                    @if($configuracao->facebook != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->facebook}}" title="Siga-me no Facebook"><i
                                        class="fa fa-facebook"></i></a></li>@endif
                    @if($configuracao->google != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->google}}" title="Siga-me no Google+"><i
                                        class="fa fa-google-plus"></i></a>
                        </li>@endif
                    @if($configuracao->twitter != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->twitter}}" title="Siga-me no Twitter"><i class="fa fa-twitter"></i></a>
                        </li>@endif
                    @if($configuracao->linkedin != "0")
                        <li><a class="tool" data-placement="top"  target="_blank" href="{{$configuracao->linkedin}}" title="Siga-me no LinkedIn"><i
                                        class="fa fa-linkedin"></i></a></li>@endif
                    @if($configuracao->youtube != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->youtube}}" title="Siga-me no YouTube"><i class="fa fa-youtube"></i></a>
                        </li>@endif
                    @if($configuracao->vimeo != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->vimeo}}" title="Siga-me no Vimeo"><i
                                        class="fa fa-vimeo-square"></i></a></li>@endif
                    @if($configuracao->pinterest != "0" && $configuracao->pinterest != null)
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->pinterest}}" title="Siga-me no Pinterest"><i
                                        class="fa fa-pinterest"></i></a>
                        </li>@endif
                    @if($configuracao->instagram != "0")
                    <li><a class="tool" data-placement="top" href="{{$configuracao->instagram}}" title="Siga-me no Instagram"><i class="fa fa-instagram"></i></a>
                    </li>@endif
                    @if($configuracao->github != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->instagram}}" title="Siga-me no Github"><i
                                        class="fa fa-github-alt"></i></a></li>@endif
                    @if($configuracao->email != "0")
                        <li><a class="tool" data-placement="top" target="_blank" href="{{$configuracao->email}}" title="Envie-me um e-mail"><i
                                        class="fa fa-envelope-o"></i></a></li>@endif
                </ul>
            </div>

            <div id="brand-and-copy" class="col-xs-12">
                <p id="brand" class="logo"><span>Up</span>
                    <small>Media Technology</small>
                </p>
                <p>© 2017 - All rights reserved - By: <a href="https://www.facebook.com/julio.cesar.an"
                                                         target="_blank">Júlio Nery</a></p>
            </div>
        </div>
    </div>
</section>