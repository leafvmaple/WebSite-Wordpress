<?php get_header(); ?>
<div id="overcontent">

	<div id="contentarea">
		<?php 
	$ani_adsense_code = get_option('x12_adsense_code');
if ($ani_adsense_code =="" || $ani_adsense_code ==" ") :
?>
<?php else: ?>
	<div id="adsense"><?php echo stripslashes($ani_adsense_code); ?></div>
<?php endif ?>
	<div id="content">
	
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">
				
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="headerlist">
				<span class="metadata date"><?php the_time("M j, Y"); ?> at <?php the_time("g:i a"); ?></span>
				<span class="metadata cats">Posted by <?php the_author_posts_link() ?> in <?php the_category(', '); ?></span>
				<span class="metadata commentslink"><?php comments_number('No Comments','1 Comment','% Comments'); ?></span>
				<?php edit_post_link('edit','<span class="metadata editlink">','</span>'); ?>
				</div>
	
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
		        <?php the_tags( '<p class="metadata tags">Tags: ', ', ', '</p>'); ?>
			</div>
		</div>
		
		<div class="navigation">
			<?php previous_post_link('<div class="alignleft">&lt; %link &lt;</div>') ?> 
			<?php next_post_link('<div class="alignright">&gt; %link &gt;</div>') ?>
		</div>
		<div class="clear"></div>
	<div id="commentinner"><?php comments_template(); ?></div>
	
	<?php endwhile; else: ?>
	
	<div class="topleftpost"><div class="topright"><div class="bottomleft"><div class="bottomright">
			<div class="hpost">
		<h2 class="center">Not Found</h2>
		<p>Sorry, no posts matched your criteria.</p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div></div></div></div></div>

	
<?php endif; ?>
	
</div>
<?php get_sidebar(); ?>
</div> 
</div>
<?php get_footer(); ?>
