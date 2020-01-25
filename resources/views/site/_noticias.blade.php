<section id="education" class="section-page">
    <div class="container">
        <h3 class="text-center">{{$noticia->titulo}}</h3>
        <p class="text-center">{{$noticia->descricao}}</p>
        <div>
            <div class="col-sm-12">
                <ul class="tmtimeline col-sm-12">

                    @foreach($noticiasInfo as $noticia)
                    <li>
                        <div class="tmtime"><span>{{$noticia->data}}</span></div>
                        <div class="tmicon">em</div>
                        <div class="tmlabel">
                            <h4>{{$noticia->titulo}}</h4>
                            <p>{{$noticia->texto}}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Parallax Google Maps -->
<section id="parallax-9" class="container-fluid parallax fixed">
    <div id="map-canvas"></div>
</section>
