<?php
    get_header();
    global $post;
 ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php the_excerpt(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php endwhile; endif; ?>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
            $paged = get_query_var('page') ? get_query_var('page') : 1;
            $args = ['posts_per_page' => 10, 'paged' => $paged];
            query_posts($args); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post-preview">
                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                        </a>
                        <p class="post-meta">Posted on <?php the_date(); ?></p>
                    </div>
                    <hr>
                <?php endwhile; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <?php previous_posts_link('Newer posts'); ?>
                    </li>
                    <li class="next">
                        <?php next_posts_link('Older posts'); ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
