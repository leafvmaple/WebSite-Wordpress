<?php get_header(); ?>
<div id="overcontent">

	<div id="contentarea">
	
	<div id="content">
	
	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results for "<?php echo wp_specialchars($s); ?>"</h2>

		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('l, F jS, Y') ?></small>
				
				<div class="entry">
					<?php the_excerpt() ?>
				</div>
		
				<p class="postmetadata">Posted in <?php the_category(', ') ?> <strong>|</strong> <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>
	
		<?php endwhile; ?>

		<div class="navigationpage">
			<div class="previouspage"><?php next_posts_link('&nbsp;') ?></div>
			<div class="nextpage"><?php previous_posts_link('&nbsp;') ?></div>
		</div>
	
	<?php else : ?>
<div class="topleftpost"><div class="topright"><div class="bottomleft"><div class="bottomright">
			<div class="hpost">
		<h2 class="center">Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div></div></div></div></div>
	<?php endif; ?>
		
</div>
<?php get_sidebar(); ?>
</div> 
</div>
<?php get_footer(); ?>