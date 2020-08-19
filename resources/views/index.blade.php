@extends('layout.app', ["current" => "home"])

@section('body')
    @component('carousel') @endcomponent
    <div id="news-top" class="news-middle container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <a href="#">
                        <div class="card-img-top" style="background-image: url('https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-0/p526x296/117709786_1187645201594808_8880415816579269564_n.png?_nc_cat=107&_nc_sid=9267fe&_nc_ohc=U_UXKstKEu0AX8s_oko&_nc_ht=scontent.fssz2-1.fna&oh=d88d3a29e6cd400f83016077a22fd083&oe=5F600FB7')"></div>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Conheça os novos sabores da Ziggy</h5>
                            <p class="card-text">Experimentamos a queiridinha do brasil, venha conferir oque achamos dela... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1511302188604-d1d5ba206381?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Quantos carvões devem ser utilizados durante a sessão?</h5>
                            <p class="card-text">Ultimamente estamos notando que há muitas dúvidas em relação a arguiles nacionais, uma... Ler mais</p>
                        </a>
                    </div>
                </div>         
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1524653736724-8490ee06859d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Como adaptar a borracha de vedação do seu narguile</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://p4.wallpaperbetter.com/wallpaper/169/381/127/hookah-narguile-smoke-wallpaper-preview.jpg')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Top 5 narguiles pequenos da atualidade</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-ads-google d-flex justify-content-center align-items-center">
            <img src="data:image/png;base64,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" alt="Anuncio teste"/>
        </div>
    </div>
    <div id="news-bottom" class="news-middle container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <a href="#">
                        <div class="card-img-top" style="background-image: url('https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-0/p526x296/117709786_1187645201594808_8880415816579269564_n.png?_nc_cat=107&_nc_sid=9267fe&_nc_ohc=U_UXKstKEu0AX8s_oko&_nc_ht=scontent.fssz2-1.fna&oh=d88d3a29e6cd400f83016077a22fd083&oe=5F600FB7')"></div>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Conheça os novos sabores da Ziggy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1511302188604-d1d5ba206381?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Quantos carvões devem ser utilizados durante a sessão?</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>         
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1524653736724-8490ee06859d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Como adaptar a borracha de vedação do seu narguile</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <a href="#">
                        <div class="card-img-top" style="background-image: url('https://scontent.fssz2-1.fna.fbcdn.net/v/t1.0-0/p526x296/117709786_1187645201594808_8880415816579269564_n.png?_nc_cat=107&_nc_sid=9267fe&_nc_ohc=U_UXKstKEu0AX8s_oko&_nc_ht=scontent.fssz2-1.fna&oh=d88d3a29e6cd400f83016077a22fd083&oe=5F600FB7')"></div>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Conheça os novos sabores da Ziggy</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1511302188604-d1d5ba206381?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Quantos carvões devem ser utilizados durante a sessão?</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>         
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-img-top" style="background-image: url('https://images.unsplash.com/photo-1524653736724-8490ee06859d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')"></div>
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">Como adaptar a borracha de vedação do seu narguile</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content... Ler mais</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection