<?php
/**
 * Template Name: timeline page
 */
get_header(); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <hr class="small">
                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="cd-timeline js-cd-timeline">
	<div class="container-fluid max-width-lg cd-timeline__container">
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

<?php get_footer(); ?>
