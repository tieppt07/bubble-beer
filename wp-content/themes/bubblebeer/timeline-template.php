<?php
    /**
     * Template Name: timeline page
     */
    global $wp_query;
 ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog</title>
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    <section class="cd-timeline js-cd-timeline">
        <div class="container max-width-lg cd-timeline__container">
	        <?php query_posts([
                'post_type' => 'post',
                'cat' => 'beer',
                'post_status' => 'publish',
            ]); ?>
	        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="cd-timeline__block">
                    <?php if (has_category('location')): ?>
                        <div class="cd-timeline__img cd-timeline__img--location">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-location.svg" alt="Location">
                        </div>
                    <?php elseif (has_category('video')): ?>
                        <div class="cd-timeline__img cd-timeline__img--movie">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-movie.svg" alt="Video">
                        </div>
                    <?php else: ?>
                        <div class="cd-timeline__img cd-timeline__img--picture">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-picture.svg" alt="Picture">
                        </div>
                    <?php endif; ?>

                    <div class="cd-timeline__content text-component">
                        <h2><?php the_title(); ?></h2>
                        <?php the_post_thumbnail('medium'); ?>
                        <p class="color-contrast-medium"><?php the_excerpt(); ?></p>

                        <div class="flex justify-between items-center">
                            <span class="cd-timeline__date"><?php the_date(); ?></span>
                            <a target="_parent" href="<?php the_permalink(); ?>" class="btn btn--subtle">Read more</a>
                        </div>
                    </div>
                </div>
	        <?php endwhile; endif; ?>
        </div>
    </section>
    <!-- <script src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/main.js"></script> -->
</body>
</html>
