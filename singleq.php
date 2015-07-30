<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<style>
body{  background-color: #fff  !important;}
 
@media (max-width:992px) {
    #aside.pinned, #aside.pin-bottom {
        
        top: auto !important;
    }
}
img[Attributes Style] {
  width: 100%;
  height: 441px;
}
.responsive-image{width: 105% !important; height:auto;}
h1{font-size:x-large !important;}
</style>


<!-- main content -->
<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">

    <div class="row">
        <div class="col l9 ">
            <div class="card medium" style="  margin: -20px; ">
                <div class="col s12 m12 l12" style="   margin-left: -20px; position:relative; ">
                  <?php  the_post_thumbnail('recent-posts', array('class'=>'responsive-image')); ?>
				  </div></div>
                  

          	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
                	<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>
         
                
               


              <div class="col s12 m12 l12" style="position:relative; margin-top:30px;">    
              
				<?php	get_template_part( 'content', get_post_format() );?>
                </div>
                <div class="col s12 m12 l12" style="position:relative;">  
				<?php	// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; echo '</div>';
				endwhile;
			?>
			

        </div>
        <div class="col l3">
            <div id="aside">
              
     
<?php     get_sidebar(); ?>
            
               
            </div>

        </div>

    </div>
</div>
 


<?php
 //
get_footer();
