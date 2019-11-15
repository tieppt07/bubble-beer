<?php get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1 style="font-size: 40px;"><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content(); ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php previous_post_link( '%link', '← Previous Post', true ); ?>
                    </li>
                    <li class="next">
                        <?php next_post_link( '%link', 'Next Post →', true ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
