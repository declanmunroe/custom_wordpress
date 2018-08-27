<?php get_header(); ?>

<section class="container">
    <?php $counter = 1 ?>
    <div class="row">
        <h2>This is the index.php page</h2>
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-3" >
            <div class="post-block">
                
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                <br><br>
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));?>
                <?php endif; ?>
                </a>
                   
                <?php the_content(); ?>
                by <?php the_author(); ?>
                   
            </div>
        </div>
        <?php if ($counter % 4 == 0) { echo '</div><div class="row">'; } $counter++; ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
