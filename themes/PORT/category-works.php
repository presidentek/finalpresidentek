
<?php get_header(); ?>
        <div class="menu">
          <ul class="menu2" id="filters">
            <li><a href="#" data-filter=".category-motion">Motion</a></li>
            <li><a href="#" data-filter=".category-photo">Photo</a></li>
            <li><a href="#" data-filter=".category-illustration">Illustration</a></li>
            <li><a href="#" data-filter=".category-design">Design</a></li>
          </ul>
        </div>
        <div id="content">
         <?php 
          $randomra = new WP_Query( array ( 'orderby' => 'rand') );
      
          if($randomra->have_posts()): while($randomra->have_posts()): $randomra->the_post(); ?>
            <div <?php post_class('small'); ?>>
                <a href="<?php the_permalink(); ?>" target="_blank"><?php the_post_thumbnail(); ?></a>

            </div>
          <?php endwhile; endif; ?>
    </div>
<?php get_footer(); ?>