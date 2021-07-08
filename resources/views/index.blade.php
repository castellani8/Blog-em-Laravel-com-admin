@extends('master.master')

@section('content')



    <img class="img-fluid" src="{{ asset('frontend/images/capa.jpg') }}" style="width:100%;height:80vh">
    <div class="container">
        <div class="row my-3 justify-content-center text-center">
            <h1>A igreja de Cristo</h1>
            <h5>Somos uma igreja com o intuito de fazer . What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum   </h5>
        </div>
    </div>

    
    {{-- sessao de projetos --}}

    <div class="container my-5">
        <div class="row">
            @foreach ($posts as $post)
            <style>
                .post-card{
                  background-size:cover;
                  
                }

                .post-card:hover{
                    background-image:linear-gradient(to left, rgba(32, 32, 32, 0.418), rgba(39, 38, 38, 0.473)),   
                                    url('{{ url('storage/images/' . $post->image) }}');
                }
                
                
                </style>

                <div class="col-md-3 post-card" 
                style="background-image:linear-gradient(to left, rgba(90, 89, 89, 0.644), rgba(109, 108, 108, 0.774)),   
                url('{{ url('storage/images/' . $post->image) }}');">

                    <div class="p-2 py-5 text-danger">
                        <h4><b>{{ $post->titulo}}</b></h4>
                        <div class="cut-175">
                            <p>{!! $post->texto !!}</p>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>

{{-- projeto principal --}}

    <div class="container">
        <div class="row">
            <div class="col-md-6 my-5">
                <h1>Quem é Jesus pra você?</h1>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </div>
            <div class="col-md-6 bg-warning">
                <div class=""></div>
            </div>
        </div>
    </div>
    <div class="container -5">
        <div class="row">
            <div class="col-md-6 bg-warning">
                <div class=""></div>
            </div>  
            <div class="col-md-6 my-5">
                <h1 class="text-right">Quem é Jesus pra você?</h1>
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </div>
        </div>
    </div>

    {{-- mensagem --}}

    <div class="container bg-dark my-5">
        <div class="row text-center text-light p-3">
            <h1><i>"Vinde a mim todas as riaturas..."</i></h1>
            <i>"t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i>
        </div>
    </div>

    {{-- apelação --}}

    <div class="container mb-5">
        <div class="row justify-content-center p-3">
            <h1 class="text-center"><b>Doe-se!</b></h1>
            Damos direção a pessoas que querem ajudar, recrutando para o evangelismo... bla bla bla, basta entrar em contato conosco e te daremos uma direção, além de aconselhamentos espirituais, temos um pessoal de plantão só para ajudá-lo! toda mudança começa com um pequeno passo. Ajudaremos uns aos outros a cumprir o propósito de cristo, que é que toda criatura conheça sua palavra! e você também pode ajudar financeiramente se preferir, o seu dinheiro será usado para um bem maior mantendo o movimento que compõe todos os projetos que voce viu acima!
        </div>
    </div>

    {{-- testemunhos --}}
    <div class="container  justify-content-center">
        <div class="row">
            <div class="col-md-6 my-5">
                <h1>Conheça os testemunhos impactantes dos nossos membros:</h1><br>
                <h4><i>Wallace, Lucas, Fulano e ciclano tiveram suas vidas transformadas pelo poder do senhor, viveram uma reforma interna completa e pela graça do senhor Jesus hoje creem na salvação eterna. Temos como nossa missão e objetivo de vida o propósito que o senhor Jesus nos deixou: "ide, e fazei discipulos e pregai por todas as nações".<br><br>   E você? qual vai ser?</i></h4>
            </div>
             <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class=" w-100" src="    {{ asset('frontend/images/testemunho.jpg') }}
                        " alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100" src="    {{ asset('frontend/images/testemunho.jpg') }}
                        " alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class=" w-100" src="    {{ asset('frontend/images/testemunho.jpg') }}
                        " alt="Third slide">
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    
@endsection