<?php
/**
 * Template Name: beer page
 */
get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <header class="intro-header" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); margin-bottom: 0px;">
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

<div class="iframe-container">
	<iframe src="/timeline" scrolling="no" allowfullscreen onload="resizeIframe(this)"></iframe>
</div>
<script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
</script>

<?php get_footer(); ?>
