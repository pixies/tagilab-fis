<?php
/**
 * Template Name: Cursos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>
 
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/tabs.js"></script>
 
<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
      	
      	  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/<?php global $post; echo $post->post_name; ?>.png"> <!-- random image -->
       
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12 white margem">
	 
     
 
 
 <div class="row margem">
 

 
 <div class="col l8 s12 white" style="min-height:532px;  margin-top: 8px;">
   <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' );
					
				endwhile;
				    
			?>
 
 
          <h5>Especificações do Curso</h5>

  				<ul class="collapsible popout" data-collapsible="accordion">
 <?php $id =get_the_ID(); 
 
 // pega o id da pagina caracteristicas-do-curso
  	 $get_ds  =    get_pages('child_of=' . $id . '&post_title=caracteristicas-do-curso&hierarchical=5&number=1&parent='.$id);
				 
				 	  foreach ($get_ds as $get_d):
					   $get_d->ID; 
					endforeach;  
   
    $mypages = get_pages( array( 'child_of' =>$id,'exclude_tree'=> $get_d->ID, 'sort_column' => 'post_date', 'sort_order' => 'asc' ) );
     foreach( $mypages as $page ) {		
		$content = $page->post_content;
	  ?>
      

    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $page->post_title; ?></div>
      <div class="collapsible-body">
      
       <?php echo $content; ?> 
         </div>
         </li>
	<?php
	}	
?> 

	</ul>
 
       
       </div>
     
	  
	  
	  <!-- noticias do curso -->
	  
	  
	   <div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Caracteristicas do Curso<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <ul class="collection">  
		   
   
           
            <?php 
			// pega o conteudo de caracteristicas do curso
			 $get_ds  =    get_pages('child_of=' . $id . '&post_title=caracteristicas-do-curso&hierarchical=5&number=1&parent='.$id);
				 
				 	  foreach ($get_ds as $get_d):
					  echo $get_d->post_content; 
					  endforeach;  ?>
                    </div>
               </div>
           </div> 
      </div>
   </div>
 </div><!-- FIM linha4 -->



<?php
get_footer();