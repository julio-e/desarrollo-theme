<main role="main" class="container">

<?php 
    get_template_part('templates/content', 'jumbotron');
    ?>

  <div class="row">
  <?php
  if(have_posts()){
      while(have_posts()){
          the_post();
          //etiquetas de contenido
          //the_title();
          ?>
          <div class="col-md-4">
         <?php get_template_part('templates/content'); ?>
         </div>
        <?php
      }
}else{
      get_template_part('templates/content', 'none');
  
}
  ?>

</div>
  
  
  



</main>