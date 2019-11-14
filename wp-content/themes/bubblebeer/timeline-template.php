<?php
/**
 * Template Name: timeline page
 */
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
            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--picture">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Title of section 1</h2>
                    <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 14</span>
                        <a href="#0" class="btn btn--subtle">Read more</a>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Title of section 2</h2>
                    <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 18</span>
                        <a href="#0" class="btn btn--subtle">Read more</a>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--picture">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-picture.svg" alt="Picture">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Title of section 3</h2>
                    <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Jan 24</span>
                        <a href="#0" class="btn btn--subtle">Read more</a>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-location.svg" alt="Location">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Title of section 4</h2>
                    <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 14</span>
                        <a href="#0" class="btn btn--subtle">Read more</a>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--location">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-location.svg" alt="Location">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Title of section 5</h2>
                    <p class="color-contrast-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 18</span>
                        <a href="#0" class="btn btn--subtle">Read more</a>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->

            <div class="cd-timeline__block">
                <div class="cd-timeline__img cd-timeline__img--movie">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/cd-icon-movie.svg" alt="Movie">
                </div> <!-- cd-timeline__img -->

                <div class="cd-timeline__content text-component">
                    <h2>Final Section</h2>
                    <p class="color-contrast-medium">This is the content of the last section</p>

                    <div class="flex justify-between items-center">
                        <span class="cd-timeline__date">Feb 26</span>
                    </div>
                </div> <!-- cd-timeline__content -->
            </div> <!-- cd-timeline__block -->
        </div>
    </section> <!-- cd-timeline -->
    <!-- <script src="--><?php //echo get_template_directory_uri() ?><!--/assets/js/main.js"></script> -->
</body>
</html>
