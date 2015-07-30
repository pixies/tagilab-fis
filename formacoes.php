<?php
/**
 * Template Name: Formacoes
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>
<style>
.light{
    text-align: justify;
    padding-left: 20px;
    padding-right: 20px;
        }
</style>
<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12 white">
        
		   <?php 
			// pega os ids da paginas
		         $id_formacao =get_the_ID();
				 $get_formacoes = get_pages( array( 'child_of' => $id_formacao, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $id_formacao  ) );
				 
		        
       ?>
          
		              <div id="graduacao" class="col s12">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($get_formacoes as $get_formacao):
					  ?>
                      <div class="col s12 m4">
                      <div class="card medium ">
                           <div class="icon-block">
                             <h2 class="center light-blue-text">
                              <a href="<?php echo get_page_link( $get_formacao->ID ); ?>"> <span class="<?php print(mostraicone($get_formacao->post_title));  ?>"> </span></a>
                             </h2>
                        <h5 class="center"><a href="<?php echo get_page_link( $get_formacao->ID ); ?>"><?php echo $get_formacao->post_title; ?></a></h5>
                             <p class="light"> <a style="color:#000;" href="<?php echo get_page_link( $get_formacao->ID ); ?>"> <?php print(limitarTexto($get_formacao->post_content, $limite = 210));?></a> </p>
                         </div>
                         <div class="row center" style=" margin-top: 20px; ">
                         <a href="<?php echo get_page_link( $get_formacao->ID ); ?>" class="waves-effect waves-light btn blue darken-1 " style="">Veja Mais</a></div>
                     </div>
                      
                      </div>
                      
                      
                       
                 <?php	  endforeach; ?>
                       </div> <!---graduação--->
 
 </div>
 </div>
 </div>
 

 

<?php
get_footer();
