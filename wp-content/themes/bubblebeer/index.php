<?php
    /**
     * Template Name: home page
     */
    get_header();
    global $post;
 ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php the_title(); ?></h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
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
                $posts = get_posts();
                if ( $posts ): foreach ($posts as $post): setup_postdata( $post ); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <h3 class="post-subtitle"><?php the_excerpt(); ?></h3>
                    </a>
                    <p class="post-meta">Posted on <?php the_time(); ?></p>
                </div>
                <hr>
            <?php endforeach; endif; ?>
			<!-- Pager -->
			<ul class="pager">
				<li class="next">
					<a href="#">Older Posts &rarr;</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php get_footer(); ?>
