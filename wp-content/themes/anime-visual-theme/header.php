<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php if(is_search()) { ?>Search Results for &quot;<?php echo wp_specialchars($s); ?>&quot; &#149; <?php } ?><?php wp_title(''); ?><?php if(is_home()) { ?><?php bloginfo('description'); ?> &#149; <?php } ?><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' &#149; '; } ?><?php bloginfo('name'); ?></title>

<script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.useso.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>
<!--<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>-->

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<?php
$ani_turn_off = get_option('x12_turn_off');
$ani_header_image = get_option('x12_header_image');
$ani_exclude_pages = get_option('x12_exclude_pages');
$ani_exclude_categories = get_option('x12_exclude_categories');
$ani_your_mail = get_option('x12_your_mail');
 ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/header<?php echo $ani_header_image ?>.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
<?php if ( is_home() && (!$ani_turn_off) ) { ?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/tab.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tab.js"></script><?php } ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/featured.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/misc.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
function Bookmark() {
	title = "<?php bloginfo('name'); ?>"; 
	url = "<?php echo get_option('siteurl'); ?>";
	if (window.sidebar) { // Mozilla Firefox Bookmark
		window.sidebar.addPanel(title, url,"");
	} else if( window.external ) { // IE Favorite
		window.external.AddFavorite( url, title); }
	else if(window.opera && window.print) { // Opera Hotlist
		var elem = document.createElement('a');
		elem.setAttribute('href',url);
		elem.setAttribute('title',title);
		elem.setAttribute('rel','sidebar');
		elem.click();
	}
}
/* ]]> */<?php
 if (!$ani_turn_off) : ?>
<!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}

}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]><?php endif ?>

</script>
<?php
 if ( $ani_turn_off ) : ?>
 <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/off/off.css" type="text/css" media="screen" /><?php endif ?>
<!--[if IE 6]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/iestyle.css" type="text/css" media="screen" />
<style type="text/css">
* html div#name {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/logo.png', sizingMethod='image');
	background-image:none;
	margin-right:12px;
}
* html div#say,
* html div#say2,
* html div#say3 {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/say.png', sizingMethod='image');
	background-image: none;
}
* html img#toprss {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/toprss.png', sizingMethod='scale');
	background-image: none;
}
* html img#topbookmark {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/topbookmark.png', sizingMethod='scale');
	background-image: none;
}
* html img#topcontact {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php bloginfo('template_url'); ?>/images/topcontact.png', sizingMethod='scale');
	background-image: none;
}
</style>
<script src="<?php bloginfo('template_url'); ?>/js/iefix.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
DD_belatedPNG.fix('.roundcorners, #searchbar, #titles, #offbg');
/* ]]> */
</script>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>
</head>
<body>
<?php
if ( $ani_turn_off ) { include(TEMPLATEPATH . '/off/off.php'); } ?>
<div id="wrapper">

<div id="header">

<div id="navigation">
<ul>
<li
<?php if ( is_home() ) { ?> class="current_page_item"<?php } ?>><a href="<?php bloginfo('siteurl');?>">Home</a></li>
<?php wp_list_pages('sort_column=menu_order&depth=1&exclude='.$ani_exclude_pages.'&title_li='); ?>
</ul>
</div>

<div id="top_extras">
	<a href="<?php bloginfo('rss2_url'); ?>" onmouseover="showTalkArea();" onmouseout="hideTalkArea();">
		<img src="<?php bloginfo('template_url'); ?>/images/blank.gif" id="toprss" width="89" height="89" alt="" border="0" />
	</a>
	<a href="javascript:Bookmark();" onmouseover="showTalkArea2();" onmouseout="hideTalkArea2();">
		<img src="<?php bloginfo('template_url'); ?>/images/blank.gif" id="topbookmark" width="89" height="89" alt="" border="0" />
	</a>
	<a href="<?php echo $ani_your_mail ?>" onmouseover="showTalkArea3();" onmouseout="hideTalkArea3();">
		<img src="<?php bloginfo('template_url'); ?>/images/blank.gif" id="topcontact" width="89" height="89" alt="" border="0" />
	</a>
</div>

<div id="titles">
<div id="name"><h1><?php bloginfo('name'); ?></h1></div>
<div id="description"><?php bloginfo('description'); ?></div>
</div>

<div id="say">
Stay in touch<br /> 
Subscribe to our RSS!
</div>

<div id="say2">
Oh c'mon<br /> 
Bookmark us!
</div>

<div id="say3">
Have a question?<br /> 
Get an answer!
</div>

<span id="loadQuoteImage"></span>

</div>

<div id="undertop">
<div id="showcategories">

<ul id="nav">
<?php wp_list_categories('exclude='.$ani_exclude_categories.'&title_li=&depth=2'); ?>
</ul>

</div>

<div id="searchbar"><form method="get" action="<?php bloginfo('url'); ?>/">
<input type="text" onfocus="doClear(this)" value="<?php
if (is_search()) {
echo wp_specialchars($s);
} else {
echo "Search";
}
?>" name="s" id="searchterm" /><input type="submit" id="anibutton" value=" &nbsp; " />
</form>
</div>

</div>