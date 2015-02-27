<div id="sidebar">

<?php
$hide_text = get_option('x12_show_text');
if ( is_home() && (!$hide_text) ) {
?>
	<ul id="about">
		<li>
			<h2 id="abouttitle"> </h2>
			<ul><li>
			<img src="<?php echo get_option('siteurl'); ?>/wp-content/themes/anime-visual-theme/images/about.jpg" width="250" height="89" alt="" border="0" />
			<br />
<?php
			$ani_about_text = get_option('x12_about_text');
			if ($ani_about_text !=""):
				echo stripslashes($ani_about_text);
			else:
?>
				云如千年一瞬·镜花水月一夕<br />
				欢迎来到零度枫影的听枫阁·观叶亭。<br /><br />
				Email: leafvmaple@163.com<br />
				CopyRight(c) 2014-2015 落叶听枫@零度枫影<br />
				<div style="text-align:right;">
					祝玩得开心 ^_^<br />
					零度枫影
				</div>
<?php
			endif;
?>
			</li></ul>
		</li>
	</ul>
<?php
}
?>

<ul><li>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
		
<?php
$aniparenttitle = get_the_title($post->post_parent);
$anisubpageshack=wp_list_pages('echo=0&child_of=' . $post->ID . '&title_li=');
if ( !empty( $anisubpageshack ) && !is_404() && is_page() ) {
echo "<div class=\"sidebar-top\"><div class=\"sidebar-bottom\"><h2>".$aniparenttitle."</h2><ul>";
echo $anisubpageshack;
echo "</ul></div></div>";
}
 ?>

<div class="sidebar-top"><div class="sidebar-bottom"><h2>Pages</h2>
<ul><?php wp_list_pages('depth=1&title_li='); ?></ul></div></div>

<div class="sidebar-top"><div class="sidebar-bottom"><h2>Categories</h2>
<ul><?php wp_list_categories('hierarchical=0&title_li='); ?></ul></div></div>

<div class="sidebar-top"><div class="sidebar-bottom">
<ul><?php wp_list_bookmarks(); ?></ul>
</div></div>

<div class="sidebar-top"><div class="sidebar-bottom"><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
				</div></div>
		
	<?php endif; ?>
		</li></ul>
</div>

