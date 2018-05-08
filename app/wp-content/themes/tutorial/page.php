<?php get_header(); ?>

   <div id="main">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
         <div class="entry">
            <?php the_content(); ?>
         </div>
      <?php endwhile; endif; ?>

      <?php
         /*
          * Kommentare sind auf Seiten deaktiviert.
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */

         //comments_template();
      ?>

   </div><!-- main -->

   <div id="sidebar">
      <?php get_sidebar(); ?>
   </div><!-- sidebar -->

<?php get_footer(); ?>