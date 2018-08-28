<?php

/* Template Name: TrainingPage */

get_header(); ?>

<div class="container">
    <div class="row">
        <h2 style="color: black;">This is the training_page.php page which is a template running off training_page.php</h2>

            <div class="col-md-9 col-sm-8">
                    <?php
                      // set up or arguments for a custom query
                      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                      $query_args = array(
                            'post_type' => 'post',
                            'category_name' => 'Blog',
                            'posts_per_page' => 4,
                            'paged' => $paged
                      );
                      // create a new instance of WP_Query
                      $the_query = new WP_Query( $query_args );
                    ?>

                     <?php //query_posts('cat=9'); ?>	 							        
                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts()) : $the_query->the_post(); ?>
                    <!-- Blog Post Content Column -->
                    <div class="col-md-6 post">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <div class="col-lg-12 post-title">
                                    <!-- Blog Post -->

                                    <!-- Title -->
                                    <h4><?php the_title(); ?></h4>

                                    <!-- Author -->
                                    <p >
                                            by <?php the_author(); ?>
                                    </p>
                            </div>
                            </a>
                            <hr class="visible-lg">
                            <div class="col-lg-12 time">
                                    <!-- Date/Time -->

                                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_date(); ?> at <?php the_time(); ?></p>
                            </div>
                            <hr class="visible-lg">

                            <!-- Preview Image 
                            <img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
                            <?php the_post_thumbnail('large', array('class' => 'img-responsive'));?>
                            <hr class="visible-lg">

                            <!-- Post Content -->
                            <p class="lead"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a></p>


                            <hr>

                            <!-- Blog Comments -->
                    </div>

                            <?php endwhile; ?>
                                    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
                                    <nav class="nav navbar-nav center-block pagination">
                                            <div class="btn btn-lg ribbon">
                                              <?php echo get_next_posts_link( 'Older Posts', $the_query->max_num_pages ); // display older posts link ?>
                                            </div>
                                            <div class="btn btn-lg ribbon">
                                              <?php echo get_previous_posts_link( 'Newer Posts' );// display newer posts link ?> 
                                            </div>
                                    </nav>
                                    <?php } ?>
                            <?php endif; ?>

            </div>
            <div class="col-md-3 col-sm-4">
                    <?php get_sidebar(); ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>

