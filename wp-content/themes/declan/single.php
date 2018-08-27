<?php get_header(); ?>

<section class="container">
    <div class="row">
        <h2>This is the single.php page</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- Blog Post Content Column -->
            <div class="col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-1 post">
                <div class="col-sm-4">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive center-block'));?>
						<?php else: ?>
							<i style="color: #005d30" class="fa fa-globe fa-5x"></i>
						<?php endif; ?>
                    </a>
                </div>
                <div class="col-sm-8">
                    <?php the_content(); ?>
					<div class="col-xs-12">
						Published by <?php the_author();?> on <?php the_date();?>
					</div>
                </div>
                <div class="col-xs-12">
                    <hr class="clearfix"/>    
                </div>
            </div>
			<?php endwhile; else: ?>
				<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "lovecraft"); ?></p>
			<?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
