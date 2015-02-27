<?php /*Start of Theme Options*/
 
$themename = "Anime Visual";
$shortname = "x12";
$header_i = array("","1","2","3","4","5");
$options = array (
 
    array( "name" => "Anime Visual 选项",
	"type" => "title"),
 
    array( "type" => "open"),

    array(  "name" => "标题图片",
        "desc" => "选择网站的标题图片(留空使用默认)。",
        "id" => $shortname."_header_image",
        "std" => "",
        "type" => "select",
		"options" => $header_i),

    array(  "name" => "幻灯片分类",
        "desc" => "输入需要在幻灯片中显示的分类目录（ID）。",
        "id" => $shortname."_featured_slide",
        "std" => "",
        "type" => "text"),

    array(  "name" => "特色文章分类 #1",
        "desc" => "输入需要在首页里左侧特色文章中显示的分类（ID）（多个分类目录用逗号隔开）。",
        "id" => $shortname."_featured_left",
        "std" => "",
        "type" => "text"),
		
    array(  "name" => "特色文章分类 #2",
        "desc" => "输入需要在首页里右侧特色文章中显示的分类（ID）（多个分类目录用逗号隔开）。",
        "id" => $shortname."_featured_right",
        "std" => "",
        "type" => "text"),
		
    array(  "name" => "页面隐藏",
        "desc" => "输入需要在首页顶部菜单隐藏的页面ID（逗号隔开）。",
        "id" => $shortname."_exclude_pages",
        "std" => "",
        "type" => "text"),
		
    array(  "name" => "分类隐藏",
        "desc" => "输入需要在边栏的分类目录中隐藏的分类ID（逗号隔开）。",
        "id" => $shortname."_exclude_categories",
        "std" => "",
        "type" => "text"),
		
    array(  "name" => "友情链接",
        "desc" => "输入友情链接的地址（例： http://mysite.com/contact/ 或者 mailto:name@domain.com）。",
        "id" => $shortname."_your_mail",
        "std" => "",
        "type" => "text"),
 
    array( "name" => "关于文本",
    	"desc" => "输入一些关于你网站的描述，使用 &lt;br /&gt 来换行。",
    	"id" => $shortname."_about_text",
    	"type" => "textarea",
    	"std" => ""),
	
    array( "name" => "隐藏关于文本",
	   "desc" => "如果您想隐藏关于文本，请勾选。",
	   "id" => $shortname."_show_text",
	   "type" => "checkbox",
	   "std" => "false"),
	
    array( "name" => "728x90 AdSense Code",
    	"desc" => "如果您拥有 Google AdSense Code ，请在这里输入。",
    	"id" => $shortname."_adsense_code",
    	"type" => "textarea",
    	"std" => ""),
	
    array( "name" => "关闭网站",
    	"desc" => "如果您想把网站关闭，请勾选。 网站关闭后，将会显示Off界面。",
    	"id" => $shortname."_turn_off",
    	"type" => "checkbox",
    	"std" => "false"),
 
    array( "type" => "close")
 
);
function mytheme_add_admin() {

    global $themename, $shortname, $options;
 
    if ( $_GET['page'] == basename(__FILE__) ) {
 
        if ( 'save' == $_REQUEST['action'] ) {
 
            foreach ($options as $value) {
            if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
 
                header("Location: themes.php?page=functions.php&saved=true");
                die;
        }
        else if( 'reset' == $_REQUEST['action'] ) {
 
            foreach ($options as $value) {
                delete_option( $value['id'] ); 
            }
 
            header("Location: themes.php?page=functions.php&reset=true");
            die;
        }
    }
    add_theme_page($themename." Options", "".$themename." 选项", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}
 
function mytheme_admin() {
 
    global $themename, $shortname, $options;
 
    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 设置已保存。</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 已经回复默认设置。</strong></p></div>';
 
?>
    <div class="wrap">
    <h2><?php echo $themename; ?> 设置</h2>
 
    <form method="post">
 
<?php
    foreach ($options as $value) {
        switch ( $value['type'] ) {
            case "open":
?>
            <table width="100%" border="0" style="background-color:#eef5fb; padding:10px;">
<?php
            break;
            case "close":
?> 
            </table>
<?php
            break;
            case "title":
?>
            <table width="100%" border="0" style="background-color:#dceefc; padding:5px 10px;">
            <tr>
                <td colspan="2">
                    <h3 style="font-family:Georgia,'Times New Roman',Times,serif;">
                    <?php echo $value['name'];?>
                    </h3>
                </td>
            </tr>
<?php
            break;
            case 'text':
?>
            <tr>
                <td width="15%" rowspan="2" valign="middle">
                    <strong>
                    <?php echo $value['name']; ?>
                    </strong>
                </td>
                <td width="85%">
                    <input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <small>
                    <?php echo $value['desc'];?>
                    </small>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;
                </td>
            </tr>
<?php
            break;
            case 'textarea':
?> 
            <tr>
            <td width="15%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="85%"><textarea name="<?php echo $value['id']; ?>" style="width:400px; height:200px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'] )); } else { echo $value['std']; } ?></textarea></td>
            </tr>
     
            <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
            </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php
            break;
            case 'select':
?>
            <tr>
            <td width="15%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="85%"><select style="width:50px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?></select></td>
            </tr>
     
            <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
            </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php
            break;
            case "checkbox":
?>
            <tr>
            <td width="15%" rowspan="2" valign="middle"><strong><?php echo $value['name']; ?></strong></td>
            <td width="85%"><?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
            </td>
            </tr>
     
            <tr>
            <td><small><?php echo $value['desc']; ?></small></td>
            </tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px dotted #000000;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr> 
<?php
            break;
        }
    }
?>
    <table width="100%" border="0">
        <tr>
            <td width="10%">
                <p class="submit">
                    <input name="save" type="submit" value="保存修改" />
                    <input type="hidden" name="action" value="save" />
                </p>
                </form>
            </td>
            <td width="90%">
                <form method="post">
                <p class="submit">
                <input name="reset" type="submit" value="恢复默认" />
                <input type="hidden" name="action" value="reset" />
                </p>
                </form> 
            </td>
        </tr>
    </talbe>
<?php
}
add_action('admin_menu', 'mytheme_add_admin');
?>
<?php
if ( function_exists('register_sidebars') )
    register_sidebar(array(
        'before_widget' => '<div class="sidebar-top"><div class="sidebar-bottom">',
        'after_widget' => '</div></div>',
    ));
?>
<?php
function ani_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

    if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>";
        echo $content;
        echo "...";
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>".$more_link_text."</a>";
        echo "</p>";
    }
    else {
        echo "<p>";
        echo $content;
        echo "&nbsp;<a href='";
        the_permalink();
        echo "'>"."</a>";
        echo "</p>";
   }
}

?>