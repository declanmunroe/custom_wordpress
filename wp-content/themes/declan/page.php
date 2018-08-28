<?php get_header(); ?>

<section class="container">
    <?php $counter = 1 ?>
    <div class="row">
        <h2 style="color: black;">This is the page.php page</h2>
        <?php
        if (is_page( 'Blog' )) :
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query_args = array(
                  'post_type' => 'post',
                  'category_name' => 'Blog',
                  'posts_per_page' => 4,
                  'paged' => $paged
            );
            // create a new instance of WP_Query
            $the_query = new WP_Query( $query_args );
            
            if ( $the_query->have_posts() ) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-md-4" >
                <div class="card">
    <!--                <div class="container">-->
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
                      <br><br>
                      <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive'));?>
                      <?php endif; ?>
                      </a>

                      <h4><b><?php the_title(); ?></b></h4> 
                      <p>by <?php the_author(); ?></p> 
                    <!--</div>-->
                </div>
            </div>
            <?php if ($counter % 3 == 0) { echo '</div><div class="row">'; } $counter++; ?>
            <?php endwhile; endif;
            else :
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-12">
                <?php the_content(); ?>
            </div>
        <?php endwhile; endif; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
