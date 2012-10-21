<?php
/*
	Theme Name: Sandbox 
	Theme URI: http://www.dig.ital.me
	Description: A Simple blog theme
	Version: 1.0.0
*/
get_header(); 
$format = get_post_format();
?>

	<div id="blog-container">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<!-- $BEGIN ARTICLE ENTRY -->					    
			<article class="entry clearfix">
				<?php the_post_thumbnail(); ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>				
				<?php the_content(''); ?>
			</article>
		<!-- $END ARTICLE ENTRY -->	
		
		</section>
			
		<?php endwhile; ?>
		<?php else : ?>		
		<?php endif; ?>	
		
	</div>
<?php get_footer();?>