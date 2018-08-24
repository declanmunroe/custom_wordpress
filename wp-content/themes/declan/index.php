<?php get_header(); ?>

<section class="container">
    <h4>This is the body content section</h4>
    <div class="row">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3">
            
                <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
