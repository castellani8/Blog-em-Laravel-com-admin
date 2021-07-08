@extends('admin.master.master')
@section('content')

<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="{{ route('admin.posts') }}">Posts</a></li>
                </ul>
            </nav>

            <a href="{{ route('admin.posts.create') }}" class="btn btn-orange icon-home ml-1">Criar Post</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    @include('admin.posts.filter')

    @foreach ($posts as $post)
        
    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <div class="realty_list">
                    <div class="realty_list_item mt-1 mb-1">
                        <div class="realty_list_item_actions_stats">
                            <img src="{{ url('storage/images/' . $post->image) }}" alt="">
                            <ul>
                                <li>Criado em {{$post->created_at}}</li>
                                <li>Modificado em {{$post->updated_at}}</li>
                            </ul>
                        </div>

                        <div class="realty_list_item_content">
                            <h4>{{$post->titulo}}</h4>

                            <div class="cut-375">
                                <p>{!! $post->texto !!}</p>
                            </div>

                        </div>

                        <div class="realty_list_item_actions">
                            <ul>
                                <li class="icon-eye">1234 Visualizações</li>
                            </ul>
                            <div>
                                <a href="" class="btn btn-green icon-pencil-square-o">Editar Imóvel</a>
                                <a href="" class="btn btn-red icon-trash">Deletar Imóvel</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    @endforeach

</section>

@endsection
