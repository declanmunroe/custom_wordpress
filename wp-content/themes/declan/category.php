<?php get_header(); ?>

<section class="container">
    <div class="row">
        <h2>This is the category.php page</h2>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-6 col-md-offset-3">
            
                <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
