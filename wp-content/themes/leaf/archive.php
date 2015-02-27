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

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="pagetitle">Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
		
		<?php /* If this is a daily archive */ } elseif (is_tag()) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="pagetitle">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="topleftpost"><div class="topright"><div class="bottomleft"><div class="bottomright">
			<div class="hpost" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="headerlist">
				<span class="metadata date"><?php the_time("M j, Y"); ?> at <?php the_time("g:i a"); ?></span>
				<span class="metadata cats">Posted by <?php the_author_posts_link() ?></span>
				<span class="metadata"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'commentslink', ''); ?></span>
				<span class="metadata editlink"><?php edit_post_link('edit','',''); ?></span>
				</div>
				<div class="entry">
					<?php if( get_post_meta($post->ID, "postimage", true) ): ?>
<a href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, 'postimage', $single = true); ?>&amp;w=70&amp;h=70&amp;zc=1&amp;q=100" class="postimage" alt="<?php the_title(); ?>" /></a>
				<?php else: ?>
				   	<a href="<?php the_permalink() ?>" rel="bookmark"><img class="postimage" src="<?php bloginfo('template_url'); ?>/images/postimage.png" alt="<?php the_title(); ?>" /></a>			<?php endif; ?>
<?php ani_content_limit(260, "Read More &rarr;"); ?>
				</div>
				<div class="clear"></div>
				<p class="metadata tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></p>
			</div>
</div></div></div></div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&lt; Previous Entries &lt;') ?></div>
			<div class="alignright"><?php previous_posts_link('&gt; Next Entries &gt;') ?></div>
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