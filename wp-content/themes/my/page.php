<?php get_header() ?>
<main>
  <?php
    while ( have_posts() ) :
      the_post();
      // get_template_part( 'content', get_post_format() );

      echo '<h1>';
      the_title();
      echo '</h1>';

      the_content();
    endwhile;
  ?>
</main>
<?php get_footer() ?>