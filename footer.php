<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->
<?php 
		         $graduacao = get_page_by_title( 'Bacharelado' );  
                 $pos       = get_page_by_title( 'Pós-graduação' );
				 $tecnologo = get_page_by_title( 'Tecnológo' );
				
	           // pega as filhas de primeira ordem das paginas mae  
			  
				 $get_graduacao  = get_pages( array( 'child_of' =>$graduacao->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $graduacao->ID ) );
				 $get_pos       = get_pages( array( 'child_of' => $pos->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $pos->ID  ) );
				 $get_tecnologo = get_pages( array( 'child_of' => $tecnologo->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $tecnologo->ID  ) );
		         ?>



		 <footer class="page-footer blue darken-1">
          <div class="container">
            <div class="row">
			
			<div class="col s12 m6 l6">
			
            <div class="col s12 m6 l6">
                <h6 class="bold white-text"><strong>Institucional</strong></h6>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Departamentos</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Editais</a></li>
                </ul>
              </div>
              <div class="col s12 m6 l6">
                <h6 class="bold white-text"><strong>Convênios</strong></h6>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Fies</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Prouni</a></li>
                </ul>
              </div>

			  
			  
			  
			   <div class=" col s12 m6 l12">
              	<img class="center-align" alt="Logotipo FIS" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white-footer.png">
                <h6 class="bold white-text">Faculdade de Integração do Sertão</h6>
                <p class=" grey-text text-lighten-4">Rua João Luiz de Melo, 2110, Bairro Tancredo Neves CEP: 56909-205 Serra Talhada - PE
Contato: sesst@fis.edu.br</p>
              </div>
			  
			  
			  
			  
			  </div>
			  
			  
			<div class="col s12 m6 l6">
			  <div class="row">
             <div class="col s12 m6 l6">
                <h6 class="bold white-text"><strong><a class="grey-text text-lighten-3" href="<?php echo get_page_link( $graduacao->ID ); ?>">Bacharelado</a></strong></h6>
                  <ul>
                  <?php 
				  foreach ($get_graduacao as $grad_name):  ?>
		  <li><a class="grey-text text-lighten-3" href="<?php echo get_page_link( $grad_name->ID ); ?>"><?php echo $grad_name->post_title; ?></a> </li>
                 <?php	  endforeach; ?>
                  </ul>
              </div>
              <div class="col s12 m6 l6">
                <h6 class="bold white-text"><strong><a class="grey-text text-lighten-3" href="<?php echo get_page_link( $pos->ID ); ?>">Tecnológic</a>o</strong></h6>
                  <ul>
                  <?php 
				 foreach ($get_tecnologo as $tec_name):  ?>
		  <li><a class="grey-text text-lighten-3" href="<?php echo get_page_link( $tec_name->ID ); ?>"><?php echo $tec_name->post_title; ?></a> </li>
                 <?php	  endforeach; ?>
                  </ul>
                  <h6 class="bold white-text"><strong><a class="grey-text text-lighten-3" href="<?php echo get_page_link( $tecnologo->ID ); ?>">Pos-Graduações</a></strong></h6>
              </div>
			 </div>
			 
			 
			 
                <div class="row" style="margin-top:20px;">
               			<div class="col s12 m6 l6">
               			<h6 class="bold white-text"><strong>Telefones uteis</strong></h6>
		                <ul>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831 1472</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831 2067</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831 1749</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831 8811</a></li>
		                </ul>
		                </div>
		             
               			<div class="col s12 m6 l6">
               			<h6 class="bold white-text"><strong>Acessibilidade</strong></h6>
		                <ul>
		                  <li><a class="grey-text text-lighten-3" href="#!">Item 1</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">Item 2</a></li>
		                </ul>
		                </div>
						
						<div class="col s12 m12 l12">
						<ul>
		                  <li class="left"><i class="fa fa-facebook fa-2x"></i>&nbsp;</li>
		                  <li class="left"><i class="fa fa-twitter fa-2x"></i>&nbsp;</li>
		                  <li class="left"><i class="fa fa-instagram fa-2x"></i>&nbsp;</li>
		                  <li class="left"><i class="fa fa-google-plus fa-2x"></i>&nbsp;</li>
		                </ul>
						</div>
						
               </div>

              	
				
				
				
				
				
				
				  </div>
              </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Todos os direitos reservados a FIS © 2014 Copyright.
            <a class="grey-text text-lighten-4 right" href="http://www.fis.edu.br">www.fis.edu.br</a>
            </div>
          </div>
        </footer>
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.font-accessibility.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/materialize.min.js"></script>
    
     
     
     
     
		<script>
	$(function(){
		/* Basic demo */
	
		$('#font-setting-basic').easyView({
			container: '#basic'
		});

		/* Custom buttons */
		$('#font-setting-buttons').easyView({
			container: '*',
			increaseSelector: '.increase-me',
			decreaseSelector: '.decrease-me',
			normalSelector: '.reset-me',
			contrastSelector: '.change-me'
		});

  </script>
      

	  <script type="text/javascript">
	  
		  $( document ).ready(function(){
		
		  	$(".button-collapse").sideNav();
			$('.slider').slider({full_width: true});
   			$('.modal-trigger').leanModal();
			$('#aside').pushpin({ top:110, bottom:300 });  
        $('ul.tabs').tabs('select_tab', 'graduacao');
		
		
		
		  });

	  </script>
	
 
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.js"></script>	
					
</body>
</html>
