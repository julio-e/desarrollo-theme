<?php
get_header();

get_template_part('templates/content', 'navbar')


?>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
                //etiquetas de contenido
                ?>
                <div class="col-md-12">
                    <h2><?php the_title() ?></h2>
                    <p><?php the_content() ?></p>
                </div>
                <?php
            endwhile;
        else:
            get_template_parts('template/content', 'none');

        endif;
        ?>
      
      
        </div>   
      </div> <!-- /container -->

<?php  
get_sidebar();


get_footer();
?>