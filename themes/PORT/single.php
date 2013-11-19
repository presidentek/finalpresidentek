<?php get_header(); ?>
          <ul id='sitebar'>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_title(); ?>
          </ul>
        </div>
      <div>
     
      <div id='resumen'>
       <p><?php the_content(); ?><p>
      </div>


  <div class="imagensingle">
    <?php 
      $id_thumb = get_post_thumbnail_id( $post->ID );
      $args = array (
          'post_type' => 'attachment',
          'post_parent' => $post->ID,
          'numberposts' => -1,
          'exclude' => $id_thumb
        );

      $imagenes = get_posts($args);
      foreach ($imagenes as $imagen):
        $src = wp_get_attachment_url( $imagen->ID );
        ?>
        <img id='tamanoimgsingle' src="<?php echo $src ?>" >
  </div>
<?php endforeach; endwhile; endif; ?>
<?php get_footer(); ?>