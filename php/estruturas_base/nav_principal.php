<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand col-2" href="index.php"><img class="logo" src="img\mercado\logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0 col-12 col-xl-8">
        <div class="offset-1 col-8">
            <input class="buscar-nav form-control mr-sm " type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-2">
            <input type="button" value="Search" class="btn_busca btn my-2 my-sm-0">
        </div>
    </form>
     
    <ul class="navbar-nav mr-auto">
        <div class="nav_bar_principal">
            <a href="login.php"><img class="user borda-nav" src="img\icones\avatar.png"></a>
            <div class="nav_bar_links">
                <li class="nav-item active">
                    <?php
                        session_start();
                        if(!isset( $_SESSION['nome'])){
                            echo '<a href="login.php" class="link_nav">Entrar</a>';
                        } else {
                            $nomeCompleto = explode(' ',$_SESSION['nome']);
                            $primeiroNome = array_shift($nomeCompleto);
                            echo '<span class="span_nav">Bem vindo(a) '. $primeiroNome  .'</span><br>';
                        }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                        if(!isset( $_SESSION['nome'])){
                            echo '<a href="perfil_user.php" class="link_nav" style="display: none;">Meu Perfil</a><br>';
                        } else {
                            echo '<a href="perfil_user.php" class="link_nav">Meu Perfil</a><br>';
                        }
                    ?>
                </li>
                <li class="nav-item dropdown">
                    <?php
                    //elaborar metodo de finalizar sessão
                        if(!isset($_SESSION['nome'])){
                            echo '<a href="" class="link_nav" style="display: none;">Sair</a';
                        } else {
                            echo '<a href="index.php?act=logout" class="link_nav">Sair</a';
                        }
                    ?>
                    >
                </li>
            </div>
        </div>
    </ul>
  </div>
</nav>