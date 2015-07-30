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
.collection-item.avatar {
  height: auto !important;}
  
 .noticia{  margin-right:1px;
  margin-left: -21px;
  margin-top: -20px;
  max-height: 500px;
  height: auto !important;}
  @media (max-width:632px) {
   .noticia{  margin-right: -21px;
  margin-left: -21px;
  margin-top: -20px;
  max-height: 500px;
  height: auto !important;}
}
</style>


<!-- main content -->
<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">

    <div class="row">
        <div class="col l9 ">
            <div class="card medium noticia">
                 
                  <?php  the_post_thumbnail('recent-posts', array('class'=>'responsive-image')); ?>
				  </div>
              
               <div class="col offset-l1 l11 s12 white" style="margin-top:-5%; position:relative; min-height:500px;">     

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
         
                
               


              
				<?php	get_template_part( 'content', get_post_format() );	endwhile;
			?>
		     </div>
              
			

        </div>
        <div class="col l3" style="margin-top:-21px;">
            <div id="aside">
              
     
<?php     get_sidebar(); ?>
            
               
            </div>

        </div>

    </div>
</div>
 


<?php
 //
get_footer();
