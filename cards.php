
<article class="col s1 m2 l6">
<div class="card">	
        <div class="card-image waves-effect waves-block waves-light">
          <!-- <img class="activator" src=".jpg"> -->
          <? the_post_thumbnail(); ?>
        </div>
        
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4"><?  the_title(); ?><i class="mdi-navigation-more-vert right"></i></span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4"><?  the_title(); ?><i class="mdi-navigation-close right"></i></span>
          <p><?  the_content(); ?><?php odin_posted_on(); ?>.</p>
        </div>
 </div>	
</article>