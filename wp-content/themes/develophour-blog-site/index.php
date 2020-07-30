<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevelopHour_Blog_Site
 */

get_header();
?>

<div class="wrapper">
	<div class="page-header page-header-small">
		<div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/landing-image/home.jpg');">
		</div>
		<div class="content-center">
		<div class="container">
			<h1 class="title landing-title">DevelopHour</h1>
			<h5 class="landing-description">Check our latest news.</h5>
		</div>
		</div>
	</div>
	<section class="section section-news">
		<div class="container">
			<div class="row">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); $content = get_the_content(); ?>
						<div class="col-md-4">
							<article class="card mb-3">
								<img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="Card image cap">
								<div class="card-body">
									<h4 class="card-title"><?php echo the_title(); ?></h4>
									<p class="card-text"><?php echo wp_trim_words($content, 30, NULL); ?></p>
									<p class="card-text"><small><?php echo get_the_date('F d, Y'); ?></small></p>
									<a href="<?php echo the_permalink(); ?>" class="btn btn-info">Read More</a>
								</div>
							</article>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
</div>

<?php
get_sidebar();
get_footer();
