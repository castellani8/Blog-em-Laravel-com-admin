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
            <div class="col-md-4 bg-dark">
                <div class="p-5 my-5">   </div>
            </div>
            <div class="col-md-4 bg-danger">
                <div class="p-5">   </div>
            </div>
            <div class="col-md-4 bg-warning">
                <div class="p-5">   </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 bg-primary">
                <div class="p-5  my-5">   </div>
            </div>
            <div class="col-md-4 bg-secondary">
                <div class="p-5">   </div>
            </div>
            <div class="col-md-4 bg-dark">
                <div class="p-5">   </div>
            </div>
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

    <div class="container bg-dark mb-5">
        <div class="row text-center text-light p-3">
            <h1><i>"Vinde a mim todas as riaturas..."</i></h1>
            <h5><i>"t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."</i></h5>
        </div>
    </div>



@endsection