<?php get_header() ?>

<h1>Hello, WordPress!</h1>
<style>body { max-width: none; }</style>
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
