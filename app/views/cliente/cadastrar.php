<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronos - Cadastre-se</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Classes Customizadas -->
    <link href="/css/variables.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/theme.css" rel="stylesheet">
    <link href="/css/button.css" rel="stylesheet">
    <link href="/css/input.css" rel="stylesheet">    
    <link href="/css/link.css" rel="stylesheet">
    <link href="/css/container.css" rel="stylesheet">    
    <link href="/css/sidenav.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link href="/css/padding.css" rel="stylesheet">
    <link href="/css/margin.css" rel="stylesheet">
    <link href="/css/media.css" rel="stylesheet">

</head>

<style>

html, body, main
{
    height: 100%;
    min-height: 100%;
}

</style>

<body>
    <main class="e-container-column e-h-align-center">
        <form action="/cliente/cadastrar" method="post">
            <div class="row">
                <div class="col s12 m8 l6 xl4 push-m2 push-l3 push-xl4">
                    <div class="card">
                        <div class="card-panel z-depth-0 center theme">
                            <h4 class="no-margin">CADASTRE-SE</h4>
                        </div>
                        <div class="card-content e-card-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col s12 m6 m-bottom-15px">
                                        <div class="input-field e-input-theme">
                                            <input id="nome" type="text" class="validate">
                                            <label for="nome">Nome</label>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 m-bottom-15px">
                                        <div class="input-field e-input-theme">
                                            <input id="sobrenome" type="text" class="validate">
                                            <label for="sobrenome">Sobrenome</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-bottom-15px">
                                        <div class="input-field e-input-theme">
                                            <input id="email" type="email" class="validate">                                            
                                            <label for="email">E-mail</label>
                                            <!--<div class="">
                                                <span class="blue-text" style="font-size: 11px;">Você receber� um e-mail para confirma��o do cadastro.</span>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 m-bottom-15px">
                                        <div class="input-field e-input-theme">
                                            <input id="senha" type="password" class="validate">
                                            <label for="senha">Senha</label>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 m-bottom-15px">
                                        <div class="input-field e-input-theme">
                                            <input id="confirmar_senha" type="password" class="validate">
                                            <label for="confirmar_senha">Confirmação de senha</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Esconde este botão quando é smartphone -->
                                    <div class="col s12 m6 hide-on-small-only">
                                        <a href="/login/login" class="waves-effect waves-light btn btn-cancelar full-width">Cancelar</a>
                                    </div>

                                    <div class="col s12 m6">                                        
                                        <button id="btnCadastrar" name="btnCadastrar" class="waves-effect waves-light btn btn-theme full-width"> Cadastrar </button>
                                    </div>

                                    <!-- Mostra esse botão quando é smartphone -->
                                    <div class="col s12 m6 m-top-10px hide-on-med-and-up">
                                        <a href="/login/login" class="waves-effect waves-light btn btn-cancelar full-width"> Cancelar </a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>                
        </form>    
    </main>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

</body>
</html>