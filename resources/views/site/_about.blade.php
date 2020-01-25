<section id="about-1" class="section-page">
    <div class="container-fluid">
        <div class="container">
            <div>
                <div class="about col-sm-6">
                    <div class="wrap-about">
                        <h3>{{$sobre->titulo}}</h3>
                        <p>
                            {{$sobre->texto}}
                        </p>
                        <ul class="social-account container-fluid">
                            @if($sobre->facebook != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->facebook}}" title="Siga-me no Facebook"><i class="fa fa-facebook"></i></a></address></li>@endif
                            @if($sobre->google != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->google}}" title="Siga-me no Google+"><i class="fa fa-google-plus"></i></a></address></li>@endif
                            @if($sobre->twitter != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->twitter}}" title="Siga-me no Twitter"><i class="fa fa-twitter"></i></a></address></li>@endif
                            @if($sobre->linkedin != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->linkedin}}" title="Siga-me no LinkedIn"><i class="fa fa-linkedin"></i></a></address></li>@endif
                            @if($sobre->youtube != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->youtube}}" title="Siga-me no YouTube"><i class="fa fa-youtube"></i></a></address></li>@endif
                            @if($sobre->vimeo != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->vimeo}}" title="Siga-me no Vimeo"><i class="fa fa-vimeo-square"></i></a></address></li>@endif
                            @if($sobre->pinterest != "0" && $sobre->pinterest != null)<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->pinterest}}" title="Siga-me no Pinterest"><i class="fa fa-pinterest"></i></a></address></li>@endif
                            @if($sobre->instagram != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->instagram}}" title="Siga-me no Instagram"><i class="fa fa-instagram"></i></a></address></li>@endif
                            @if($sobre->email != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre->email}}" title="Meu e-mail"><i class="fa fa-envelope-o"></i></a></address></li>@endif
                        </ul>
                    </div>
                </div>
                <div class="about col-sm-6"><img class="img-responsive" src="{{ asset($sobre->imagem)}}" alt="" /></div>
            </div>
        </div>
    </div>
</section>

<section id="about-2" class="section-page hidden-xs">
    <div class="container-fluid">
        <div class="container">
            <div>
                <div class="about col-sm-6"><img class="img-responsive" src="{{ asset($sobre2->imagem)}}" alt="" /></div>
                <div class="about col-sm-6">
                    <div class="wrap-about">
                        <h3>{{$sobre2->titulo}}</h3>
                        <p>
                            {{$sobre2->texto}}
                        </p>
                        <ul class="social-account container-fluid">
                            @if($sobre2->facebook != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->facebook}}" title="Siga-me no Facebook"><i class="fa fa-facebook"></i></a></address></li>@endif
                            @if($sobre2->google != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->google}}" title="Siga-me no Google+"><i class="fa fa-google-plus"></i></a></address></li>@endif
                            @if($sobre2->twitter != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->twitter}}" title="Siga-me no Twitter"><i class="fa fa-twitter"></i></a></address></li>@endif
                            @if($sobre2->linkedin != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->linkedin}}" title="Siga-me no LinkedIn"><i class="fa fa-linkedin"></i></a></address></li>@endif
                            @if($sobre2->youtube != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->youtube}}" title="Siga-me no YouTube"><i class="fa fa-youtube"></i></a></address></li>@endif
                            @if($sobre2->vimeo != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->vimeo}}" title="Siga-me no Vimeo"><i class="fa fa-vimeo-square"></i></a></address></li>@endif
                            @if($sobre2->pinterest != "0" && $sobre2->pinterest != null)<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->pinterest}}" title="Siga-me no Pinterest"><i class="fa fa-pinterest"></i></a></address></li>@endif
                            @if($sobre2->instagram != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->instagram}}" title="Siga-me no Instagram"><i class="fa fa-instagram"></i></a></address></li>@endif
                            @if($sobre2->email != "0")<li><address><a class="tool" data-placement="bottom" rel="me" target="_blank" href="{{$sobre2->email}}" title="Meu e-mail"><i class="fa fa-envelope-o"></i></a></address></li>@endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Parallax 1 -->
<section id="parallax-1" class="container-fluid parallax fixed" style="background-image: url({{ asset($servicos->imagem)}})">
</section>