<?php get_header(); ?>

<section class="container">
    <div class="row">
        <h2>This is the page.php page</h2>
        <?php
        if (is_page( 'Blog' )) :
            echo "The page you just clicked on is the blog page";
        else :
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-sm-12">
            
                <?php the_content(); ?>
        </div>
        <?php endwhile; endif; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
