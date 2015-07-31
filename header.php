<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<title>Faculdade de Integração do Sertão - FIS</title>
	<style type="text/css">
	
	html {
		font-family: 'Montserrat';
		}
			


	</style>
        
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/materialize.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style.css">
   
	<!-- Montserrat -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=270848716259380";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<header>
	

		<div class="navbar-fixed">
			<nav class=" white-text">
			    <div id="font-setting-buttons" class="nav-wrapper z-depth-0 white-text  blue darken-1">

<!-- Dropdown Structure -->
				<ul id="Institucional" class="font-1 dropdown-content blue darken-1">
				  <li><a href="graduacao" class="flow-text small white-text sobre">Sobre a FIS</a></li>
				  <li><a href="convenios" class="flow-text small white-text">Convênios</a></li>
				  <li class="divider"></li>
				  <li><a href="" class="flow-text small white-text">Pós/MBA</a></li>
				</ul>


				<!-- Dropdown Structure -->
				<ul id="Cursos" class="font-1 dropdown-content">
				  <li><a href="graduacao" class="flow-text small">Bacharelado</a></li>
				  <li><a href="#!" class="flow-text small">Tecnológico</a></li>
				  <li class="divider"></li>
				  <li><a href="#!" class="flow-text small">Pós/MBA</a></li>
				</ul>

			     <a class="brand-logo minimo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">

                    <img alt="Logotipo FIS" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png 1x, <?php echo get_template_directory_uri(); ?>/assets/images/logo-white_mobile.png 2x"></a>



                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                     <a href="#" data-activates="buscar" class="button-collapse right "><i class="material-icons">search</i></a>

















				<ul class="right hide-on-med-and-down white-text"> 
			 		<li><a class="left" href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
					<li><a class="dropdown-button" href="#!" data-activates="Institucional">Institucional<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a class="left" href="collapsible.html">Vestibular</a></li>
				   
				    <li><a class="dropdown-button" href="#!" data-activates="Cursos">Cursos<i class="material-icons right">arrow_drop_down</i></a></li>
				    <li><a class="left" href="cursos">Fale com a FIS</a></li>
					 <li>
					 <ul class="right"> 
				    	<li><a id="aumenta_fonte" class="white-text increase-me" href="#" title="Aumentar tamanho da fonte"><i class="fa fa-plus-square-o"></i></a></li>
						<li><a id="reduz_fonte" class="white-text decrease-me" href="#" title="Reduzir tamanho da fonte"><i class="fa fa-minus-square-o"></i></a></li>
	                    <li><a id="contrast-text" class="white-text change-me" href="#" title="contraste"><i class="material-icons right">invert_colors</i></a></li>
				   	</ul>
				   	</li>
				    
			    </ul>
				<div class="container">

			    <ul class="side-nav blue darken-2" id="mobile-demo">
			    	<li>
			    	<img class="align-center" alt="Logotipo FIS" src="<?php echo get_template_directory_uri(); ?>/assets/images/FIS-logotipo-branca-side-bar.png">
			    	</li>
			        <li><a class="white-text" href="sass.html"><strong>Início</strong></a></li>
			        <li><a class="white-text" href="badges.html">Components</a></li>
			        <li><a class="white-text" href="collapsible.html">Javascript</a></li>
			        <li><a class="white-text" href="mobile.html">Mobile</a></li>
			    </ul>
			  </div>
			  
			  </div>
			</nav>
		
		</div>
		

		
	</header>
	


<div id="main" class="row amarelo">
<?php
 
function mostraicone($nomeicon){
if($nomeicon =='Fisioterapia'){
	      $nomeicon ='fis-fisioterapia';
} else if($nomeicon =='Direito') {
	      $nomeicon ='fis-direito'; }
  else if($nomeicon =='Farmácia') {
	      $nomeicon ='fis-farmacia';
} else if($nomeicon =='Enfermagem') {
	      $nomeicon ='fis-farmacia'; }
  else if($nomeicon =='Ciências Contábeis') {
	      $nomeicon ='fis-cinciascontabeis'; }
		  
  else if($nomeicon =='Gestão e Planejamento Tributário') {
	      $nomeicon ='fis-administrao'; }
  else if($nomeicon =='Gestão Pública nas esferas Municipal, Estadual e Federal') {
	      $nomeicon ='fis-administrao'; }
  else if($nomeicon =='Gestão Empresarial (ênfase em Recursos Humanos)') {
	      $nomeicon ='fis-administrao'; }
  else if($nomeicon =='Direito Público: Administrativo, Financeiro e Tributário') {
	      $nomeicon ='fis-direito'; }
   else if($nomeicon =='Direito Processual Penal, Cível e Trabalhista') {
	      $nomeicon ='fis-direito'; }
		  
  else if($nomeicon =='Fisioterapia Dermatofuncional') {
	      $nomeicon ='fis-fisioterapia'; }
  else if($nomeicon =='Fisioterapia em Readaptação Musculoesquelética e Desportiva') {
	      $nomeicon ='fis-fisioterapia'; }
		  
  else if($nomeicon =='Enfermagem em Saúde do Trabalhador') {
	      $nomeicon ='fis-fis-unicolor'; }
  else if($nomeicon =='Enfermagem em Saúde da Mulher') {
	      $nomeicon ='fis-fis-unicolor'; }
   else if($nomeicon =='Saúde Pública') {
	      $nomeicon ='fis-administrao'; }
	
  else if($nomeicon =='Construção de Edifícios') {
	      $nomeicon ='fis-contruodeedificios'; }
  else if($nomeicon =='Redes de Computadores') {
	      $nomeicon ='fis-redesdecomputadores'; }
   else if($nomeicon =='Segurança no trabalho') {
	      $nomeicon ='fis-seg-trab'; }
     else if($nomeicon =='Logística') {
	      $nomeicon ='fis-logistica'; }
 
       else   {
	      $nomeicon ='fis-fis-unicolor';
}
 
return $nomeicon;}
 /* limitar o tamanho do texto */          
 function limitarTexto($post_conteudo, $limite){
                  $post_conteudo = substr($post_conteudo, 0, strrpos(substr($post_conteudo, 0, $limite), ' ')) . '.';
                   return $post_conteudo;
                  }

?>
