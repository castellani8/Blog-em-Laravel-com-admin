<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/libs.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/boot.css') }}"/>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}"/>
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>

@hasSection('css')
    @yield('css')
@endif

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GlassAdmin - Site Control</title>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="ajax_response"></div>

<div class="dash">
    <aside class="dash_sidebar">
        <article class="dash_sidebar_user">
            <img class="dash_sidebar_user_thumb" src="{{ url(asset('backend/assets/images/avatar.jpg')) }}" alt="" title=""/>

            <h1 class="dash_sidebar_user_name">
                <a href="">Bem vindo de volta, <b>Lucas Castellani</b></a>
            </h1>
        </article>

        <ul class="dash_sidebar_nav">
            <li class="dash_sidebar_nav_item {{ isActive('admin.home') }}">
                <a class="icon-tachometer" href="{{ route('admin.home') }}">Dashboard</a>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-users" href="dashboard.php?app=users/index">Usuários</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=users/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=companies/index">Editar usuários</a></li>
                    <li class=""><a href="dashboard.php?app=users/team">Time</a></li>
                    <li class=""><a href="dashboard.php?app=users/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-home" href="{{ route('admin.posts') }}">Posts</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="{{ route('admin.posts') }}">Ver Todos</a></li>
                    <li class=""><a href="{{ route('admin.posts.create') }}">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-reply" href="">Ver Site</a></li>
            <li class="dash_sidebar_nav_item"><a class="icon-sign-out on_mobile" href="{{ route('admin.logout') }}">Sair</a></li>
        </ul>

    </aside>

    <section class="dash_content">

        <div class="dash_userbar">
            <div class="dash_userbar_box">
                <div class="dash_userbar_box_content">
                    <span class="icon-align-justify icon-notext mobile_menu transition btn btn-green"></span>
                    <h1 class="transition">
                        <i class="icon-imob text-orange"></i><a href="">Up<b>Admin</b></a>
                    </h1>
                    <div class="dash_userbar_box_bar no_mobile">
                        <a class="text-red icon-sign-out" href="{{ route('admin.logout') }}">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dash_content_box">
            @yield('content')
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{ asset('backend/assets/js/libs.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.js') }}" type="text/javascript"></script>

@hasSection('js')
    @yield('js')
@endif

</body>
</html>