<?php get_header(); ?>
<?php global $woo_options; ?>

<section id="content">

	<div class="inner-content">
	
		<?php do_action('before_content'); ?>
		
		<?php
			$term_slug = get_query_var('knowledgebase_category');
			$term = get_term_by( 'slug', $term_slug, 'knowledgebase_category');
			$title = sprintf ( __('Category: %s', 'woothemes') , wptexturize($term->name));
		?>

		<h1 class="title"><?php echo $title; ?></h1>

		<form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>" class="knowledgebase-search">
			<div>
				<label for="Search" for="s"><span><?php _e('Search', 'woothemes'); ?></span><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="input-text" placeholder="<?php _e('Search knowledgebase', 'woothemes'); ?>" /><input type="hidden" name="post_type" value="knowledgebase" /><input type="submit" id="searchsubmit" value="Search"></label>
			</div>
		</form>
		
		<?php
			get_template_part('loop', 'knowledgebase'); 
			
			do_action('after_knowledgebase_query');
		?>
		
	</div><!--/inner-content-->

</section><!--/content-->
		
<?php get_sidebar('knowledgebase'); ?>
		
<?php get_footer(); ?>
