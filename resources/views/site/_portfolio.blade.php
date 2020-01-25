

<!-- Portfolio -->
<section id="portfolio" class="section-page">
    <div class="container">
        <h3 class="text-center">{{$portfolio->titulo}}</h3>
        <p class="text-center">{{$portfolio->descricao}}</p>

        <ul id="og-grid" class="og-grid">
            @foreach($trabalhos as $trabalho)
            <li>
                <a href="{{$trabalho->link}}" data-largesrc="{{ asset($trabalho->mapa)}}" data-title="{{$trabalho->titulo}}" data-description="{{$trabalho->texto}}">
                    <img src="{{ asset($trabalho->imagem)}}" alt="img01"/>
                </a>
            </li>
            @endforeach
        </ul>

    </div>
</section>

<!-- Parallax 3 -->
<section id="parallax-3" class="container-fluid parallax fixed" style="background-image: url({{ asset($noticia->imagem)}}">
</section>