<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="stylesheet" href="{{ url('backend/assets/css/reset.css') }}"/>
    <link rel="stylesheet" href="{{ url('backend/assets/css/boot.css') }}"/>
    <link rel="stylesheet" href="{{ url('backend/assets/css/login.css') }}"/>
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>UpAdmin - Site Control</title>
</head>
<body>

<div class="ajax_response"></div>

<div class="dash_login">
    <div class="dash_login_left">
        <article class="dash_login_left_box">
            <header class="dash_login_box_headline">
                <div class="dash_login_box_headline_logo icon-imob icon-notext"></div>
                <h1>Login</h1>
            </header>

            <form name="login" action="{{ route('admin.login.do') }}" method="post" autocomplete="off">
                <label>
                    <span class="field icon-envelope">E-mail:</span>
                    <input type="email" name="email" placeholder="Informe seu e-mail" value="lucas10castellani@gmail.com" required/>
                </label>

                <label>
                    <span class="field icon-unlock-alt">Senha:</span>
                    <input type="password" name="password_check" placeholder="Informe sua senha"/>
                </label>

                <button class="gradient gradient-orange radius icon-sign-in">Entrar</button>
            </form>

            <footer>
                <p>Desenvolvido por <a href="https://www.upinside.com.br">www.<b>upinside</b>.com.br</a></p>
                <p>&copy; <?= date("Y"); ?> - Todos os Direitos Reservados</p>
                <p class="dash_login_left_box_support">
                    <a target="_blank"
                       class="icon-whatsapp transition text-green"
                       href="https://api.whatsapp.com/send?phone=DDI+DDD+TELEFONE&text=Ol??, preciso de ajuda com o login."
                    >Precisa de Suporte?</a>
                </p>
            </footer>
        </article>
    </div>

    <div class="dash_login_right"></div>

</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{{ asset('backend/assets/js/login.js') }}"></script>

</body>
</html>