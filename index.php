<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php
while ( have_posts() ) :
  the_post();
  ?>

<article id="post-<?php the_ID(); ?>"
         <?php post_class('region spot-color-secondary'); ?>>
  <div class="wrapper flow prose border-2 ">

    <h1>wp-excellent-starter — <span class="wpexcellent-version"></span></h1>

    <p>This starter for Wordpress is based on the workflow to build flexible front-ends, as described in <a
         href="https://buildexcellentwebsit.es/">buildexcellentwebsit.es</a> by Andy Bell.

    <p>Modify index.php and the files in the src folder to start creating your theme! Have fun!</p>
  </div>
</article>

<?php endwhile; ?>

<?php endif; ?>

<?php
get_footer();