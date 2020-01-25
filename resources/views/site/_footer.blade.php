<section id="contact-footer">
    <div class="container">
        <div>
            <div class="col-xs-12">
                <ul class="col-xs-6">
                    <li><i class="fa fa-map-marker"></i>
                       {{$configuracao->endereco}}
                    </li>

                </ul>
                <ul class="col-xs-3">
                    <li><i class="fa fa-phone"></i>{{$configuracao->telefone1}}</li>
                    <li><i class="fa fa-phone"></i>{{$configuracao->telefone2}}</li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:#">{{$configuracao->telefone2}}</a></li>
                    <li><i class="fa fa-skype"></i> {{$configuracao->link}}</li>
                </ul>
                <ul class="col-xs-3">
                    <li><i class="fa fa-info-circle"></i><span class="hidden-xs">{{$configuracao->descricao}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Back to Top -->
<p class="back-to-top"><i class="fa fa-chevron-up"></i></p>
