<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DevelopHour_Blog_Site
 */

get_header();
?>
<?php
	while ( have_posts() ) :
		the_post();
?>
<div class="wrapper">
	<div class="page-header page-header-small">
		<div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
	</div>
	<section class="section section-news">
		<div class="container single-content" id="single-content">
			<div class="text-center" style="margin-bottom: 50px;">
				<h1 class="title mb-0"><?php echo get_the_title(); ?></h1>
				<div class="entry-meta">
				<?php
					develophour_blog_site_posted_on();
					develophour_blog_site_posted_by();
				?>
				</div><!-- .entry-meta -->
			</div>
			<?php echo get_the_content(); ?>
		</div>
		<div class="container single-pagination" id="single-pagination">
			<div class="row"style="margin-top: 50px;">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<?php
					$next_post = get_previous_post();
						if (!empty( $next_post )): 
					?>
					<a class="btn btn-lg btn-info btn-round single-pagination-prev" href="<?php echo get_permalink($next_post) ?>"><i class="fa fa-angle-double-left" style="margin-right: 10px; pointer-events:"></i><?php echo $next_post->post_title; ?></a>
					<?php
						else:
							$first = new WP_Query('post_type=post&posts_per_page=1&order=DESC'); $first->the_post();
					?>
					<a class="btn btn-lg btn-info btn-round single-pagination-prev" href="<?php echo get_permalink() ?>"><i class="fa fa-angle-double-left" style="margin-right: 10px; "></i><?php echo get_the_title(); ?></a>
					<?php 
						wp_reset_query();
						endif; 
					?>
				</div>
				<div class="col-md-3">
					<?php
					$prev_post = get_next_post();
						if (!empty( $prev_post )): 
					?>
						<a class="btn btn-lg btn-info btn-round single-pagination-next" href="<?php echo get_permalink($prev_post) ?>"><?php echo $prev_post->post_title; ?><i class="fa fa-angle-double-right" style="margin-left: 10px; "></i></a>
					<?php
						else:
							$last = new WP_Query('post_type=post&posts_per_page=1&order=ASC'); $last->the_post();
					?>
						<a class="btn btn-lg btn-info btn-round single-pagination-next" href="<?php echo get_permalink() ?>"><?php echo get_the_title(); ?><i class="fa fa-angle-double-right" style="margin-left: 10px; "></i></a>
					<?php 
						wp_reset_query();
						endif; 
					?>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>
</div>
<?php endwhile; ?>

<?php
get_sidebar();
get_footer();
