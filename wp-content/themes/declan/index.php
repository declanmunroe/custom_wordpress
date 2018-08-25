<?php get_header(); ?>

<section class="container">
    <?php $counter = 1 ?>
    <div class="row">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3" >
            <div class="post-block">
                
                <?php the_title(); ?>
                <br><br>
                   
                <?php the_content(); ?>
                by <?php the_author(); ?>
                   
            </div>
        </div>
        <?php if ($counter % 4 == 0) { echo '</div><div class="row">'; } $counter++; ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
