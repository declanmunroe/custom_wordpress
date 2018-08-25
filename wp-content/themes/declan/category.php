<?php get_header(); ?>

<section class="container">
    <div class="row">
        <h4>This is the category page which uses the category.php file in my custom theme</h4>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-6 col-md-offset-3">
            
                <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
