<?php get_header(); ?>

<section class="container">
    <h2 style="color: black;">This is the single.php page</h2>
    <div class="row border">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Blog Post Content Column -->
            
                <div class="col-sm-12 title">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-sm-6 col-sm-offset-3 image">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'img-responsive'));?>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="col-sm-6 col-sm-offset-3 content">
                    <?php the_content(); ?>
                </div>
                <div class="col-sm-6 col-sm-offset-3 published">
                    <h4>Published by <?php the_author();?> on <?php the_date();?></h4>
                </div>
            
        <?php endwhile; else: ?>
                <p><?php _e("We couldn't find any posts that matched your query. Please try again.", "lovecraft"); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
