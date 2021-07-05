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
    
        <form action="{{ route('admin.posts.store') }}">
            <label for="titulo" class=""><span style="font-size: 1em">Título da postagem: </span></label>
            <input type="text" id="titulo" name="titulo" placeholder="insira o titulo" size="40" required>
            <br><br>
            <span style="font-size: 1em">Insira o conteúdo do post: </span>
            <div class="my-1">
            <textarea class="ckeditor form-control" name="wysiwyg-editor" required></textarea>
            <br>
            <label for="autor" class=""><span style="font-size: 1em">Nome do autor: </span></label>
            <input type="text" id="autor" name="autor" placeholder="Autor" size="40" required/>
            <button type="submit" class="btn" style="background-color:green">Postar!</button>
        </div>
        </form>
        
    </div>
</section>

<script>
    $(function () {
        $('input[name="files[]"]').change(function (files) {

            $('.content_image').text('');

            $.each(files.target.files, function (key, value) {
                var reader = new FileReader();
                reader.onload = function (value) {
                    $('.content_image').append(
                        '<div class="property_image_item">' +
                        '<div class="embed radius" ' +
                        'style="background-image: url(' + value.target.result + '); background-size: cover; background-position: center center;">' +
                        '</div>' +
                        '</div>');
                };
                reader.readAsDataURL(value);
            });
        });
    });
</script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@endsection