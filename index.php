<html>
<title> Be Strong </title>
<head> <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="materialize.css">
  <link rel="stylesheet" type="text/css" href="materialize.min.css">
</head>
<?php 
    // $_SESSION['email']= 'gustavo@gmail.com'; 
  include_once 'includes/header.php';
?>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Be Strong</h1>
        <div class="row center">
          <div class="progress indeterminate"></div>
          <h5 class="header col s12 brown-text">Uma iniciativa que vai transformar a SUA vida!!</h5>
        </div>
        <br id="secaoForum"><br>

      </div>
    </div>
  </div>
<!-- SEÇÃO FÓRUM -->
  <div class="parallax-container valign-wrapper s12" >
    <div class="section no-pad-bot">
      <div class="container ">
        <div class="row center">
          <h5 class="header col s12 brown-text text-darken-2">Bem vindo ao nosso Fórum.</h5>
        </div>
        <div class="row center">
          <a href="CadastroForum/" id="cadastroForum" class="btn-large waves-effect waves-light teal lighten-1">Entrar</a>
        </div>
        <img class="responsive-img parallax" src="imagens/background3.jpg" alt="Unsplashed background img 2">  
      </div>
    </div>
  </div>
  <br id="secaoFrases">
  <br>
<!-- CONTAINER FRASES -->
  <div class="container">
    <div class="section">
      <center> <h1> Frases </h1></center>

      <!--  SEÇÃO FRASES  -->
      <div class="row">
        <div class="col s4 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons"></i></h2>
            <h5 class="center">Renove agora suas forças!</h5>
            <div class="col s12"><img class="responsive-img" src="imagens/frase1.jpg"></div>
            <p class="light">Nesta seção você encontra frases que tornarão seu dia melhor.Compartilhe com seus amigos, para ajudá-los!</p>
          </div>
        </div>

        <div class="col s4 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons"></i></h2>
            <h5 class="center">Juntos, nós vamos além!</h5>
            <div class="col s12"><img class="responsive-img" src="imagens/frase2.jpg"></div>
            <p class="light">Nesta seção você encontra frases que tornarão seu dia melhor.Compartilhe com seus amigos, para ajudá-los!</p>
          </div>
        </div>

        <div class="col s4 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons"></i></h2>
            <h5 class="center">Ajustes também são necessários!</h5>
            <div class="col s12"><img class="responsive-img" src="imagens/frase3.jpg"></div>
            <p class="light">Nesta seção você encontra frases que tornarão seu dia melhor.Compartilhe com seus amigos, para ajudá-los!</p>
          </div>
        </div>
      </div>

    </div>
  </div>
<br  id="secaoDoacoes">
<br>
<!-- SEÇÃO DOAÇÕES -->
  <div class="container">
    <div class="section">

      <div class="row" id="doação">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Ajude-nos com sua doação!</h4>
        </div>
        <div class="col s6">
          <div class="section center">
            <p class="left-align light">A iniciativa Be Strong foi criada para ajudar as pessoas que estão sofrendo neste momento, mas você também pode através de sua doação manter essa iniciativa VIVA!! </p>
            <!-- Formulario do Paypal -->
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick" />
                <input type="hidden" name="hosted_button_id" value="5Y2QG72KHXE72" />
                <!-- Botão -->
                <input type="submit" name="doacao" id="botaoDoar" class="btn-large  waves-light teal lighten-1 white-text" value="Doar">
            </form>
          </div>
        </div>
        <div class="col s6">
          <img class="responsive-img circle" src="imagens/doacao.jpg">
        </div>
      </div>

    </div>
  </div>
<br  id="secaoEmocoes">
<br>
<!-- SEÇÃO SENTIMENTOS -->
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
         <h1 class="header center teal-text text-lighten-2">Sentimentos</h1>
        <div class="row center">
          <h5 class="header col s12 white-text">Como estou me sentindo?</h5>
          <h5 class="header col s12 white-text">Estou me isolando de meus parentes e ou amigos?</h5>
          <h5 class="header col s12 white-text">Não tenho ânimo para sair da cama?</h5>
        </div>
      </div>
    </div>
     <img src="imagens/background.jpg" alt="Unsplashed background img 3" class="parallax responsive-img">
  </div>
<br  id="secaoParceiros">
<br>
<!-- SEÇÃO PARCEIROS -->
<div class="container">
  <div class="section">
    <div class="row center">
      <h5 class="header col s12 brown-text">Gostaria de fazer parte dessa iniciativa?</h5>
    </div>
    <div class="row center">
      <a href="CadastroParceiro/" id="cadastroParceiro" class="btn-large waves-effect waves-light teal lighten-1">Cadastre-se como Parceiro</a>
    </div>
  </div>
</div>
<br  id="secaoNos">
<br>
<!-- SEÇÃO NÓS -->
<div class="container">
  <div class="section">
    <div class="row center col l5 s12" style="padding: 15px;">
      <table class="responsive-table">
        <thead>
          <h5 class="header col s12 brown-text">Equipe I Alpha</h5>
        </thead>
        <tbody>
          <tr class="z-depth-2">
            <td><img src="imagens/alex.jpg" class="responsive-img s2 z-depth-2"><p class="text-darken-2 center">Hildialex Florio <br>Desenvolvedor Front-End</p></td>    
            <td><img src="imagens/gustavo.jpg" class="responsive-img s2 z-depth-2"><p class="text-darken-2 center">Gustavo Gracio <br>Desenvolvedor Back-End</p></td>
            <td><img src="imagens/luan.jpg" class="responsive-img s2 z-depth-2"><p class="text-darken-2 center">Luan Santos <br>CEO</p></td>
            <td><img src="imagens/kaua.jpg" class="responsive-img s2 z-depth-2"><p class="text-darken-2 center">Kauã Walbon<br>DBA</p></td>
            <td><img src="imagens/andre.jpg" class="responsive-img s2 z-depth-2"><p class="text-darken-2 center">André Guimarães<br>Analista de Mercado</p></td>
          </tr>
        </tbody>
      </table>
      <h5 class="header col s12 brown-text">Sobre Nós</h5>
      <p>I Alpha Ltda foi criada em janeiro/2019, com o intuito de ajudar e conscientizar os jovens e adultos de hoje em dia sobre depressão.Seu objetivo é estreitar a relação entre o profissional voltado para área de saúde mental e o paciente, utilizando-se das mais novas tecnologias disponíveis no mercado.</p>
    </div>
  </div>
</div>
<?php 
  include_once 'includes/footerHome.php';
?>