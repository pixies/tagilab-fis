<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
        <img alt="Vestibular 2015.2" src="<?php echo get_template_directory_uri(); ?>/assets/images/slide1.jpg"> <!-- random image -->
        <div class="caption center-align"></div>
      </li>
      
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12">
	  
<div class="col s12 m12 l9"><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
<div class="row "><!-- Inicio linha2 -->  

<div class="col s12 m6 l6"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
     <!-- loop da categoria FIS -->
      
      <div class="card">
      <div class="slider" style=" height:377px;  margin: 0.5rem 0 1rem 0;">
        <ul class="slides" style=" height:340px; margin: 0.5rem 0 1rem 0;">
      <?php 
        $recent = new WP_Query("category_name=Destaque&showposts=3"); 
        while($recent->have_posts()) : $recent->the_post();
      ?> 
               
                  
       <li class="effect-honey"><a href="<?php echo get_permalink($recent->ID); ?>"> 
         <?php the_post_thumbnail('recent-posts',array('class'=>'img-responsive')); ?></a>
        <div class="caption center-align">
          <h4><strong><?php the_title(); ?></strong></h4>
          
        </div>
      </li>
      
      
   
      <?php endwhile; // Fim :: loop da categoria FIS ?>

     </ul> 
  </div> </div>
  </div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->

 
<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->
  <!-- faco o loop so da categoria 20 e trago 1 so post -->
  
 <div class="card"
> <a href="prouni" title="PROUNI">
    <div class="card-image waves-effect waves-block waves-light">
     <img alt="Icone PROUNI" src="<?php echo get_template_directory_uri(); ?>/assets/images/Post-ProUni.png" style="height: 185px;">
    </div>
   </a>
  </div>
 
    <div class="card">
    <a href="fies" title="FIES">
    <div class="card-image waves-effect waves-block waves-light">
     <img alt="Icone fies" src="<?php echo get_template_directory_uri(); ?>/assets/images/fies-saldo-devedor-e-juros.png" style="height: 185px;">
    </div>
   </a>
  </div>  

</div><!-- Cards Coluna Principal -->



</div><!-- row -->
<div class="row"><!-- Inicio linha2 -->


<div class="col s12 m6 l6"><!-- Cards Coluna Principal -->

<div class="card">
        <div class="card-content blue darken-1">
          <span class="card-title  text-darken-4">TV FIS<i class="material-icons alinha-icone right">live_tv</i></span>
        </div>
          <div class="video-container no-controls">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" style="border:0;" allowfullscreen></iframe>
        </div>
      </div>


   <div class="card">
        <div class="card-content  blue darken-1 ">
          <span class="card-title menor">Calendário Acadêmico<i class="material-icons alinha-icone right">perm_contact_calendar</i>
          
          
          </span>
        </div>
      <?php if ( dynamic_sidebar('calendario_fis') ) : else : endif; ?>
      </div>

   


</div><!-- Cards Coluna Principal -->

<div class="col s12 m6 l6">

<div class="card">
        <div class="card-content blue darken-1">
          <span class="card-title white-text text-darken-4 menor">Últimas Notícias<i class="material-icons alinha-icone right">today</i></span>
        </div>  

      <?php 
        $recent = new WP_Query("category_name=Noticias&showposts=10"); 
        while($recent->have_posts()) : $recent->the_post();
      ?> 
               
                  

      
      <div class="collection">
      <a class="collection-item" href="<?php echo get_permalink($recent->ID); ?>"><?php the_title(); ?></a>
      </div>
            
   
      <?php endwhile; // Fim :: loop da categoria FIS ?>  


      </div>

</div>
</div><!-- row -->

</div><!-- FIM Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->







 <div class="col s12 m12 l3 "><!-- Conteudo Principal :: Acaba antes do parallax com os icones dos cursos -->
 
<div class="col s12 m6 l12"><!-- Cards Coluna Principal -->
 <?php if ( dynamic_sidebar('search') ) : else : endif; ?>
 <div class="card">
       <div class="card-content  blue darken-1" style=" padding-right: 15px;">
          <span class="card-title activator text-darken-4 menor">Portal Acadêmico <i class="material-icons alinha-icone right">perm_identity</i></span>
        </div>
 
       
        <form class="col s12"  id="form2" name="form2" action="http://www8.qualinfonet.com.br/fis/acadweb.autentica.php" method="post">       
          <div class="row">
            <div class="input-field col s12">
              <input id="usuario" type="text" class="validate">              
              <label for="password">Usuário</label>
            </div>
          
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="email">Senha</label>
            </div>
           
              <input class="text-left" value="aluno" name="group1" type="radio" id="test1" />
              <label for="test1">Aluno</label>
            
              <input name="group1" value="professor" type="radio" id="test2" />
              <label for="test2">Professor</label>
           
              <input class="text-rigth" name="group1" type="radio" id="test3" />
              <label for="test3">Gestor</label>
              <p>
              <button type="submit" class="waves-effect waves-light btn right blue darken-1">Entrar</button>
              </p>
          </div>
        </form>
      </div>
 
</div><!-- Cards Coluna Principal -->

<div class="col s12 m6 l12"><!-- Cards Coluna Principal -->
  <div class="card">
          <div class="card-content blue darken-1">

          <span class="card-title menor">Departamentos<i class="material-icons alinha-icone right">account_balance</i></span>
        </div>
        
        <div class="collection white">
        <a href="biblioteca" class="opaco collection-item">Biblioteca</a>
        <a href="http://www.fis.edu.br/nupex/" class="opaco collection-item">NUPEX</a>
        <a href="escola-fisio" class="opaco collection-item">Escola Fisio</a>
        <a href="escola-fisio" class="opaco collection-item">PROCON</a>
        <a href="http://fis.edu.br/cpa/" class="opaco collection-item">CPA</a>
     
      </div>

  </div>
 
   <div class="card">
        <div class="card-content blue darken-1">
          <span class="card-title menor">Revistas e Periódicos <i class="material-icons alinha-icone right">book</i></span>
        </div>
        
      <div class="collection white">
        <a href="http://fis.edu.br/resac/" TARGET="_blank" class="opaco collection-item">Sociedade, Administração e Contemporaneidade</a>
        <a href="http://www.fis.edu.br/revistadireito3/" TARGET="_blank" class="opaco collection-item">Construindo Direito</a>
        <a href="http://www.fis.edu.br/revistaenfermagem/" TARGET="_blank" class="opaco collection-item">Saúde Coletiva em Debate</a>
        <a href="http://www.fis.edu.br/recones/" TARGET="_blank" class="opaco collection-item">Contabilidade & Negócios do Sertão</a>
      </div>

  </div>
</div><!-- Cards Coluna Principal -->


 </div>

 
 
 </div>
 </div>

 </div>
 

<div class="row blue"><!-- Inicio linha2 -->

 <div class="col offset-l1 l10 s12">
<div class="parallax-effect ">
		 
               <?php 
			// pega os ids das paginas
				 $graduacao = get_page_by_title( 'Bacharelado' );  
         $pos       = get_page_by_title( 'Pós/MBA' );
				 $tecnologo = get_page_by_title( 'Tecnológico' );
				
	           // pega as filhas de primeira ordem das paginas mae  
				 $get_graduacao  = get_pages( array( 'child_of' =>$graduacao->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $graduacao->ID ) );
				 $get_pos       = get_pages( array( 'child_of' => $pos->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $pos->ID  ) );
				 $get_tecnologo = get_pages( array( 'child_of' => $tecnologo->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc',
				 'parent'=> $tecnologo->ID  ) );
				 
		        
       ?>
         
               <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <div class="row">
      <h4 class="white-text darken-2 light center-align">ENSINO</h4><br>
                     <div class="col s12 grade">
                        <ul class="tabs">
                           <li class="tab col s3 blue-text text-darken-2"><a class="active" href="#graduacao"><b>Bacharelado</b></a></li>
                           <li class="tab col s3"><a href="#tecnologo"><b>Tecnológico</b></a></li>
                           <li class="tab col s3"><a  href="#posgraduacao"><b>Pós/MBA</b></a></li>
                        </ul>
                     </div>
                      <script>
				 
		           </script>
                      <div class="col s12">
                        <div id="graduacao" class="col s12 white z-depth-1">
                 <?php 
						// imprimir todos os elementos da graduação
				  foreach ($get_graduacao as $grad_name):
					  ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                         <a href="<?php echo get_page_link( $grad_name->ID ); ?>"> <span class="<?php print(mostraicone($grad_name->post_title));  ?>"> </span></a>
                                          <span class="title-cursos"><a href="<?php echo get_page_link( $grad_name->ID ); ?>"><?php echo $grad_name->post_title; ?></a></span>
                                  </div>
                           </div>
                 <?php	  endforeach; ?>
                       </div> <!---graduação-->
                        
                      <div id="posgraduacao" class="col s12 white z-depth-1">
                       <?php 
						// imprimir todos os elementos da graduação
				  foreach ($get_pos as $pos_name):
					  ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
        <a href="<?php echo get_page_link( $pos_name->ID ); ?>"> <span class="<?php print(mostraicone($pos_name->post_title));  ?>"> </span></a>
                            <span class="title-cursos"><a href="<?php echo get_page_link( $pos_name->ID ); ?>"><?php echo $pos_name->post_title; ?></a></span>
                                  </div>
                           </div>
                 <?php	  endforeach; ?>
                        </div>
                       <div id="tecnologo" class="col s12 white z-depth-1">
              <?php 
						// imprimir todos os elementos da graduação
				  foreach ($get_tecnologo as $tec_name):
					  ?>
						   <div class="col s12 m6 l4 margim-top-boton">
                                 <div class="valign-wrapper">
                                           <a href="<?php echo get_page_link( $tec_name->ID ); ?>"> <span class="<?php print(mostraicone($tec_name->post_title));  ?>"> </span></a>
                            <span class="title-cursos"><a href="<?php echo get_page_link( $tec_name->ID ); ?>"><?php echo $tec_name->post_title; ?></a></span>
                                  </div>
                           </div>
                 <?php	  endforeach; ?>
                       </div> <!---tecnologo-->
                 </div><!---row-->
   </div> <!---fim da grade dos cursos -->
                
			 
		</div>
	</div>
    
  </div><!-- Fim linha2 --> 
  
    
 


<div class="row white"><!-- Inicio linha4 -->
 <h4 class="blue-text darken-2 light center">FIS nas Redes Sociais</h4><br>
<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content blue darken-1">
          <span class="card-title white-text">Facebook<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <div class="video-container no-controls">
          <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0;autohide=1" style="border:0;" allowfullscreen></iframe>
        </div>
      </div>

</div>

<div class="col s12 m6 l4"><!-- Bloco de 3 Materias Principais - Primeira coluna -->
  <div class="card">
        <div class="card-content  blue darken-1">
          <span class="card-title  text-darken-4">TV FIS<i class="material-icons alinha-icone right">live_tv</i></span>
        </div>
         <?php if ( dynamic_sidebar('tv_fis') ) : else : endif; ?>
      </div>
</div><!-- FIM :: Bloco de 3 Materias Principais - Primeira coluna -->


<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content blue darken-1">
          <span class="card-title white-text text-darken-4 ">Instagran #FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <div class="video-container no-controls">
          <?php if ( dynamic_sidebar('insta_fis') ) : else : endif; ?>
        </div>
      </div>

</div>

</div><!-- FIM linha4 -->

<?php
get_footer();
