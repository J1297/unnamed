<?php get_header(); ?>

    <div id="main">

       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <div id="meta">
                        <p>erstellt am: <?php the_date('d.m.Y'); ?> |
                        <!--von: <?php the_author(); ?> |-->
                        Kategorien: <?php the_category(', '); ?></p>

                        <?php comments_template(); ?>
            </div>
            <div class="entry">
                <?php the_content(); ?>
            </div>
       <?php endwhile; ?>

        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>

       <?php endif; ?>

    </div>


<?php get_footer(); ?>