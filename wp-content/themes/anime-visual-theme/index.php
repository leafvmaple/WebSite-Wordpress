<?php
get_header();
?>
<div id="overcontent">
	<div id="contentarea"><?php
$ani_adsense_code = get_option('x12_adsense_code');
if ($ani_adsense_code == "" || $ani_adsense_code == " "):
?><?php
else:
?>
		<div id="adsense"><?php
    echo stripslashes($ani_adsense_code);
?></div><?php
endif;
?>
	<div id="content"><?php
if (is_home() && !is_paged()) {
?>
			<!-- Tab -->
			<div id="anicontainer">
				<div id="aninav">
					<ul>
						<li id="featuredtab"><a href="javascript:void(0);" rel="featuredouter"> </a></li>
						<li id="latesttab"><a href="javascript:void(0);" rel="latest"> </a></li>
						<li id="populartab"><a href="javascript:void(0);" rel="popular"> </a></li>
					</ul>
				</div>
		
				<!-- Sub Menus container. Do not remove -->
				<div id="ani_inner">
					<div id="featuredouter" class="innercontent">
						<div id="featured" >
			  				<ul class="ui-tabs-nav" id="featuredlist"><?php
    $ani_featured_slide = get_option('x12_featured_slide');
    $my_query           = new WP_Query("cat=" . $ani_featured_slide . "&showposts=5");
    while ($my_query->have_posts()):
        $my_query->the_post();
?>
		        				<li class="ui-tabs-nav-item" id="nav-fragment-<?php
        the_ID();
?>">
		        					<a rel="fragment-<?php
        the_ID();
?>">
		        					<img src="<?php
        bloginfo('template_url');
?>/thumb.php?src=<?php
        echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=50&amp;h=44&amp;zc=1&amp;q=100" alt="" />
		        					</a>
		        				</li><?php
    endwhile;
?>
		      				</ul><?php
    $my_query = new WP_Query("cat=" . $ani_featured_slide . "&showposts=5");
    while ($my_query->have_posts()):
        $my_query->the_post();
        $do_not_duplicate = $post->ID;
?>
		   						<!-- Slide Content -->
							    <div id="fragment-<?php
        the_ID();
?>" class="ui-tabs-panel">
									<img src="<?php
        bloginfo('template_url');
?>/thumb.php?src=<?php
        echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=368&amp;h=256&amp;zc=1&amp;q=100" alt="" />
									 <div class="info" >
										<h2>
											<a href="<?php
        the_permalink();
?>"><?php
        the_title();
?></a>
										</h2>
										<p><?php
        ani_content_limit(150, "Read More &rarr;");
?></p>
									 </div>
							    </div><?php
    endwhile;
?>

						</div>
					</div>
					<div id="latest" class="innercontent"><?php
    $recent = new WP_Query("showposts=6");
    while ($recent->have_posts()):
        $recent->the_post();
?>
						<div class="latestpost"><?php
        if (get_post_meta($post->ID, "postimage", true)):
?>
								<a href="<?php
            the_permalink();
?>" rel="bookmark">
									<img src="<?php
            bloginfo('template_url');
?>/thumb.php?src=<?php
            echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=70&amp;h=70&amp;zc=1&amp;q=100" class="latestpostimage" alt="<?php
            the_title();
?>" />
								</a><?php
        else:
?>
						   		<a href="<?php
            the_permalink();
?>" rel="bookmark">
						   			<img class="latestpostimage" src="<?php
            bloginfo('template_url');
?>/images/postimage.png" alt="<?php
            the_title();
?>" />
						   		</a><?php
        endif;
?>
							<h2>
								<a href="<?php
        the_permalink();
?>" rel="bookmark" title="Permanent Link to <?php
        the_title_attribute();
?>"><?php
        the_title();
?>
								</a>
							</h2>
							<div class="shortstory">
								<?php
        ani_content_limit(55, "Read More &rarr;");
?>
							</div>
						</div>			<?php
    endwhile;
?>
					</div>

					<div id="popular" class="innercontent">
						<div id="populartags">
							<ul>
								<li>
									<?php
    wp_tag_cloud('smallest=9&largest=25&number=40');
?>
								</li>
							</ul>
						</div>
					</div>

			<!-- End Sub Menus container -->
			</div>

		</div>

		<script type="text/javascript">
			anitabs.init("aninav", 0)
			anifeatured.init("featuredlist", 0)
		</script>
		<!-- // Tab --><?php
    $ani_featured_left  = get_option('x12_featured_left');
    $ani_featured_right = get_option('x12_featured_right');
?>
		<div id="leftposts" style="display: none;">
			<?php
    $recent = new WP_Query("cat=" . $ani_featured_left . "&showposts=2");
    while ($recent->have_posts()):
        $recent->the_post();
?>
			<div class="topleft">
				<div class="topright">
				<div class="bottomleft">
					<div class="bottomright">
						<div class="homepost" id="homeleftpost-<?php
        the_ID();
?>">
							<h2><a href="<?php
        the_permalink();
?>" rel="bookmark" title="Permanent Link to <?php
        the_title_attribute();
?>"><?php
        the_title();
?></a></h2>
							<div class="headerlist">
								<span class="metadata date"><?php
        the_time("M j, Y");
?> at <?php
        the_time("g:i a");
?></span>
								<span class="metadata cats">Posted by <?php
        the_author_posts_link();
?></span>
							</div>
						<div class="altentry"><?php
        if (get_post_meta($post->ID, "postimage", true)):
?>
							<a href="<?php
            the_permalink();
?>" rel="bookmark">
								<img src="<?php
            bloginfo('template_url');
?>/thumb.php?src=<?php
            echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=70&amp;h=70&amp;zc=1&amp;q=100" class="postimage" alt="<?php
            the_title();
?>" />
							</a><?php
        else:
?>
					   		<a href="<?php
            the_permalink();
?>" rel="bookmark"><img class="postimage" src="<?php
            bloginfo('template_url');
?>/images/postimage.png" alt="<?php
            the_title();
?>" /></a><?php
        endif;
?><?php
        ani_content_limit(180, "");
?>
						<div class="clear_head"></div>
						<div style="width:240px;">
							<div class="alignleftcomments"><?php
        comments_popup_link('Add comment', '1 Comment', '% Comments', 'commentsbutton', '');
?>
							</div>
							<div class="alignrightmore"><a href="<?php
        the_permalink();
?>">More</a>
							</div>
						</div>
						</div>
						</div>
					</div>
				</div>
				</div>
			</div><?php
    endwhile;
?>
		</div>	
								
							
					<div id="rightposts"  style="display: none;"><?php
    $recent = new WP_Query("cat=" . $ani_featured_right . "&showposts=2");
    while ($recent->have_posts()):
        $recent->the_post();
?>
					<div class="topleft"><div class="topright"><div class="bottomleft"><div class="bottomright">
					<div class="homepost" id="homerightpost-<?php
        the_ID();
?>">
					<h2><a href="<?php
        the_permalink();
?>" rel="bookmark" title="Permanent Link to <?php
        the_title_attribute();
?>"><?php
        the_title();
?></a></h2>
					<div class="headerlist">
						<span class="metadata date"><?php
        the_time("M j, Y");
?> at <?php
        the_time("g:i a");
?></span>
						<span class="metadata cats">Posted by <?php
        the_author_posts_link();
?></span>
					</div>
					<div class="altentry"><?php
        if (get_post_meta($post->ID, "postimage", true)):
?>
							<a href="<?php
            the_permalink();
?>" rel="bookmark"><img src="<?php
            bloginfo('template_url');
?>/thumb.php?src=<?php
            echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=70&amp;h=70&amp;zc=1&amp;q=100" class="postimage" alt="<?php
            the_title();
?>" /></a><?php
        else:
?>
					   		<a href="<?php
            the_permalink();
?>" rel="bookmark">
					   			<img class="postimage" src="<?php
            bloginfo('template_url');
?>/images/postimage.png" alt="<?php
            the_title();
?>" />
					   		</a><?php
        endif;
?>
						<?php
        ani_content_limit(180, "");
?>
						<div class="clear_head"></div>
						<div style="width:240px;">
							<div class="alignleftcomments">
								<?php
        comments_popup_link('Add comment', '1 Comment', '% Comments', 'commentsbutton', '');
?>
							</div>
							<div class="alignrightmore"><a href="<?php
        the_permalink();
?>">More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>				<?php
    endwhile;
?>
</div>
<div class="clear"></div><?php
}
?><?php
if (have_posts()):
?>	
					<?php
    while (have_posts()):
        the_post();
?>
					<?php
        if (is_home())
            if (in_category("" . $ani_featured_right . ""))
                continue;
        if (is_home())
            if (in_category("" . $ani_featured_left . ""))
                continue;
?>
	<div class="topleftpost"><div class="topright"><div class="bottomleft"><div class="bottomright">
				<div class="hpost" id="post-<?php
        the_ID();
?>">
					<h2><a href="<?php
        the_permalink();
?>" rel="bookmark" title="Permanent Link to <?php
        the_title_attribute();
?>"><?php
        the_title();
?></a></h2>
					<div class="headerlist">
					<span class="metadata date"><?php
        the_time("M j, Y");
?> at <?php
        the_time("g:i a");
?></span>
					<span class="metadata cats">Posted by <?php
        the_author_posts_link();
?> in <?php
        the_category(', ');
?></span>
					<span class="metadata"><?php
        comments_popup_link('0 Comments', '1 Comment', '% Comments', 'commentslink', '');
?></span>
					<span class="metadata editlink"><?php
        edit_post_link('edit', '', '');
?></span>
					</div>
					<div class="entry">
						<?php
        if (get_post_meta($post->ID, "postimage", true)):
?>
	<a href="<?php
            the_permalink();
?>" rel="bookmark"><img src="<?php
            bloginfo('template_url');
?>/thumb.php?src=<?php
            echo get_post_meta($post->ID, 'postimage', $single = true);
?>&amp;w=70&amp;h=70&amp;zc=1&amp;q=100" class="postimage" alt="<?php
            the_title();
?>" /></a>
					<?php
        else:
?>
					   	<a href="<?php
            the_permalink();
?>" rel="bookmark"><img class="postimage" src="<?php
            bloginfo('template_url');
?>/images/postimage.png" alt="<?php
            the_title();
?>" /></a>			<?php
        endif;
?>
	<?php
        ani_content_limit(260, "Read More &rarr;");
?>
					</div>
					<div class="clear"></div>
					<p class="metadata tags"><?php
        the_tags('Tags: ', ', ', '<br />');
?></p>
				</div>
	</div></div></div></div>

			<?php
    endwhile;
?>

			<div class="navigationpage">
				<div class="previouspage"><?php
    next_posts_link('&nbsp;');
?></div>
				<div class="nextpage"><?php
    previous_posts_link('&nbsp;');
?></div>
			</div>
		<?php
else:
?>

	<div class="topleftpost"><div class="topright"><div class="bottomleft"><div class="bottomright">
				<div class="hpost">
			<h2 class="center">Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php
    include(TEMPLATEPATH . '/searchform.php');
?>
	</div></div></div></div></div>

		<?php
endif;
?>


	</div>
	<?php
get_sidebar();
?>
	</div> 
</div>
<?php
get_footer();
?>