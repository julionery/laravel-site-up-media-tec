<!-- Services -->
<section id="services" class="section-page">
    <div class="container">
        <h3 class="text-center">{{$servicos->titulo}}</h3>
        <p class="text-center">{{$servicos->descricao}}</p>
        <div>
            <div class="col-sm-12">
                @foreach($servicosInfo as $servicoItem)
                <div class="about col-sm-4">
                    <h4 class="text-center text-uppercase">{{$servicoItem->titulo}}</h4>
                   <img class="img-circle img-responsive center-block" src="{{ asset($servicoItem->imagem) }}">
                    <br />
                    <br />
                    <p class="text-center">
                        {{$servicoItem->texto}}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Parallax 2 -->
<section id="parallax-2" class="container-fluid parallax fixed" style="background-image: url({{ asset($portfolio->imagem)}})">
</section>