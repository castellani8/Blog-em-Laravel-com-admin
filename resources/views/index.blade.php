@extends('master.master')

@section('content')

    <img class="img-fluid" src="{{ asset('frontend/images/capa.jpg') }}" style="width:100%;height:90vh">
    <div class="container">
        <div class="row my-3 justify-content-center text-center">
            <h1>A igreja de Cristo</h1>
            <h5>Somos uma igreja com o intuito de fazer . What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum   </h5>
        </div>
    </div>

    {{-- sessao de projetos --}}

    <div class="container">
        <div class="row">
            <div class="col-md-4 bg-dark">
                <div class="p-5"></div>
            </div>
            <div class="col-md-4 bg-danger">
                <div class="p-5"></div>
            </div>
            <div class="col-md-4 bg-warning">
                <div class="p-5"></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 bg-primary">
                <div class="p-5"></div>
            </div>
            <div class="col-md-4 bg-secondary">
                <div class="p-5"></div>
            </div>
            <div class="col-md-4 bg-dark">
                <div class="p-5"></div>
            </div>
        </div>
    </div>

@endsection