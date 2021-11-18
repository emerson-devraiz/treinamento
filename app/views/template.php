<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronos</title>

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
    <link href="/css/card.css" rel="stylesheet">  
    <link href="/css/sidenav.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link href="/css/padding.css" rel="stylesheet">
    <link href="/css/margin.css" rel="stylesheet">
    <link href="/css/media.css" rel="stylesheet">

</head>

<style>

body
{
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

main
{
    flex: 1 0 auto;
}

</style>

<body>

<header>
    
    <div class="navbar-fixed">
        <nav>
            <!--<div class="nav-wrapper theme">
                <a href="#" data-target="menu" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
                <div class="e-container-row">
                    <div class="e-container-logo-nav hide-on-med-and-down">
                        <a href="#"><img src="/images/logo-512.png" class="responsive-img" alt=""></a>
                        <h4>CHRONOS</h4>        
                    </div>                   
                    
                    <div class="e-container-saldo-nav">
                        <div class="e-item-saldo-nav">
                            <span>Banco Inter</span>
                            <span>R$ 200,00</span>
                        </div>            
                    </div>

                </div>
            </div>-->
            
            <div class="nav-wrapper theme">
                <!-- show-on-medium-and-up -->
                <a href="#" data-activates="menu" class="button-collapse"><i class="material-icons" style="font-size: 33px;">menu</i></a>          
                <a href="#!" class="brand-logo right hide-on-med-and-down">
                    <div class="e-container-row e-v-align-center">
                        <!--<img src="/images/logo-512.png" class="responsive-img" alt="">
                        <h4>CHRONOS</h4>-->
                    </div>                    
                </a>
                <ul class="left hide-on-med-and-down">                    
                    <li><a href="/conta/listar" class="p-left-5px"><i class="material-icons left">account_balance</i>Contas</a></li>
                </ul>
                </div>
            </div>          

        </nav>
    </div>

    <ul class="side-nav" id="menu">

      <li>
          <div class="user-view">

              <div class="background theme-light-5"></div>

              <a href="" class="e-link"><img src="/images/perfil.jpg" alt="" class="waves-effect waves-light circle">Editar Perfil</a>
              <span class="name theme-text-reverse">Emerson Silveira</span>
              <span class="theme-text-reverse">emerson_m_silveira@hotmail.com</span>
          </div>
      </li>
      
      <li><div class="divider m-top-0px"></div></li>
      <li><a href="/principal/principal" class="waves-effect"><i class="material-icons">home</i>Principal</a></li>
      <li><div class="divider m-top-0px"></div></li>
      <li><a href="/principal/dashboard" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
      <li><div class="divider m-top-0px"></div></li>
      <li><a href="/cartao/listar" class="waves-effect"><i class="material-icons">credit_card</i>Cart�es</a></li>
      <li><div class="divider"></div></li>
      <li><a href="/categoria/listar" class="waves-effect"><i class="material-icons">view_list</i>Categorias</a></li>
      <li><div class="divider"></div></li>
      <li><a href="/conta/listar" class="waves-effect"><i class="material-icons">account_balance</i>Contas</a></li>
      <li><div class="divider"></div></li>
      <li><a href="/contato/listar" class="waves-effect"><i class="material-icons">groups</i>Contatos</a></li>
      <li><div class="divider"></div></li>
      <li><a href="/movimento/extrato" class="waves-effect"><i class="material-icons">grading</i>Extrato</a></li>
      <li><div class="divider"></div></li>
      
      <ul class="collapsible theme-reverse" data-collapsible="accordion">
          <li>
              <div class="collapsible-header waves-effect p-left-10px p-right-5px">
                  <div class="e-container-row full-width">
                      <div class="e-container-row full-width">
                          <i class="material-icons m-right-3px">query_stats</i>Relat�rios
                      </div>
                      <div class="e-container-row e-h-align-end full-width">
                          <div class="e-container-column"><i class="material-icons no-margin">expand_more</i></div>
                      </div>
                  </div>
                  
              </div>
              <div class="collapsible-body">
                <ul>
                    <li><div class="divider"></div></li>
                    <li><a href="/principal/dashboard" class="waves-effect"><i class="material-icons">list_alt</i>Relat�rio 1</a></li>
                    <li><div class="divider"></div></li>
                    <li><a href="/principal/dashboard" class="waves-effect"><i class="material-icons">feed</i>Relat�rio 2</a></li>                    
                </ul>
              </div>              
          </li>
      </ul>
      <li><div class="divider m-top-0px"></div></li>
      <li><a href="/login/login" class="waves-effect"><i class="material-icons">logout</i>Sair</a></li>
      <li><div class="divider m-top-0px"></div></li>

      <!--<li>
          <ul class="collapsible">
            <li>
                <div class="collapsible-header theme-reverse">Relat�rios<i class="material-icons">arrow_drop_down</i></div>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="/principal/dashboard" class="waves-effect waves-light"><i class="material-icons">send</i>Fluxo Caixa</a></li>
                    </ul>
                </div>
            </li>
          </ul>
      </li>-->
      
    </ul>
    
    
</header>

<main>

 <!--
  <ul class="sidenav collection" id="menu">
    <a href="/principal/dashboard" class="waves-effect waves-light collection-item"><div class="left theme-text-reverse"><i class="material-icons">dashboard</i></div><span class="theme-text-reverse p-left-10px">Dashboard</span></a>
    <a href="/cartao/listar" class="waves-effect waves-light collection-item"><div class="left theme-text-reverse"><i class="material-icons">send</i></div><span class="theme-text-reverse p-left-10px">Cart�es</span></a>
    <a href="/categoria/listar" class="waves-effect waves-light collection-item"><div class="left theme-text-reverse"><i class="material-icons">send</i></div><span class="theme-text-reverse p-left-10px">Categorias</span></a>
    <a href="/contatos/listar" class="waves-effect waves-light collection-item"><div class="left theme-text-reverse"><i class="material-icons">send</i></div><span class="theme-text-reverse p-left-10px">Contatos</span></a>
    <a href="/principal/dashboard" class="waves-effect waves-light collection-item"><div class="left theme-text-reverse"><i class="material-icons">send</i></div><span class="theme-text-reverse p-left-10px">Meus Dados</span></a>
  </ul>
-->
    

 <!-- <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large theme"><i class="medium material-icons">menu</i></a>-->
  


    <?php require_once('../app/views/'.$view.'.php');?>
</main>

<footer class="page-footer theme">
    <!--<div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
            </div>
        </div>
    </div>-->
    <div class="footer-copyright">
        <div class="container p-left-20px p-right-20px">
        � 2021 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  

    <script>
        
    // Initialize collapse button
  $(".button-collapse").sideNav();

    // Initialize collapse button
    //$(".button-collapse").sideNav();

        /*document.addEventListener('DOMContentLoaded', function()
        {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {edge: 'right'});
        });

        document.addEventListener('DOMContentLoaded', function()
        {
            let elems = document.querySelectorAll('.dropdown-button');

            let instances = M.Dropdown.init(elems, {
                hover: false
            });
        });*/
        

    </script>

</body>
</html>