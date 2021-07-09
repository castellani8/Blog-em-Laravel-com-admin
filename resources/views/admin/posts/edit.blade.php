@extends('admin.master.master')
@section('content')
<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Criar nova postagem</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="{{ route('admin.posts') }}">Posts</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="{{ route('admin.posts.create') }}" class="text-orange">Criar post</a></li>
                </ul>
            </nav>

            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    @include('admin.posts.filter')

    
    <div class="dash_content_app_box">
        <form name="validator" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data" method="POST">
            

            <label for="titulo" class=""><span style="font-size: 1em">Título da postagem: </span></label>
                
            <input type="text" id="titulo" name="titulo" placeholder="insira o titulo" size="40" value="{{ $post->titulo }}">
            <br><br>
            <span style="font-size: 1em">Insira o conteúdo do post: </span>
            <div class="my-1">

                <textarea class="form-control" name="wysiwyg" id="wysiwyg">{{$post->texto}}</textarea>

                <br>

                <label for="image" class="btn" style="background-color: green">Insira a imagem do post</label>
                <input id="image" name="image" class="my-1 d-none" size="60" type="file" accept="image/*"  onchange="loadFile(event)"/>
                Preview:
                <br>
                
                <img id="output" src="{{ url('storage/images/' . $post->image) }}" style="max-width: 50vh"/>


                <br>
                <br>

                <label for="autor" class=""><span style="font-size: 1em">Nome do autor: </span></label>
                <input type="text" id="autor" name="autor" placeholder="Autor" size="40" value="{{$post->autor}}"/>

                <button  class="btn" style="background-color:green">Postar!</button>

            </div>

        </form>
        
    </div>
</section>

@endsection

@section('js')
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>   
<script src="{{ asset('backend/assets/js/create-post.js') }}"></script>
@endsection