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
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>	
			</div>
		</div>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p class="editthis">', '</p>'); ?>
</div>
<?php get_sidebar(); ?>
</div> 
</div>
<?php get_footer(); ?>