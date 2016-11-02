/*
*Template Name: Blank Template
*
*/

<?php get_header(); ?>



    <?php if ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-sm-12">
            <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php endif; ?>



<?php get_footer();
