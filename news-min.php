<?php
/*
Plugin Name: WP Easy BreakingNews
Plugin URI: http://prowpexpert.com/
Description: This plugin will enable WP Easy BreakingNews in your wordpress site. You can use regular wordpress shortcode, just you have to add "easy" before the shortcode. Easy, right?
Author: sohelwpexpert
Version: 1.1
Author URI: http://prowpexpert.com/
*/


/*Some Set-up*/
define('PRO_NEWS_STICKER_WORDPRESS', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );




function pro_single_news_plugin_function_test() {
/**
 * Register global styles & scripts.
 */
wp_register_style('my-styles', PRO_NEWS_STICKER_WORDPRESS.'css/style.css');
wp_register_style('news-sticker-css', PRO_NEWS_STICKER_WORDPRESS.'css/BreakingNews.css');

wp_register_script('BreakingNews-js-demo', PRO_NEWS_STICKER_WORDPRESS.'js/demo.js', array( 'jquery' ));
wp_register_script('BreakingNews-js-d', PRO_NEWS_STICKER_WORDPRESS.'js/BreakingNews.js', array( 'jquery' ));
wp_register_script('scripts', PRO_NEWS_STICKER_WORDPRESS.'js/florida-custom.js', array( 'jquery' ));
wp_register_script('new-admin', PRO_NEWS_STICKER_WORDPRESS.'js/admin_tab.js', array( 'jquery' ));


/**
 * Enqueue global styles & scripts.
 */

wp_enqueue_style('news-sticker-css');
wp_enqueue_style('BreakingNews');
wp_enqueue_style('my-styles');

wp_enqueue_script('BreakingNews-js-demo');
wp_enqueue_script('new-admin');
wp_enqueue_script('BreakingNews-js-d');
wp_enqueue_script('scripts');
wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'pro_single_news_plugin_function_test' );



// News shortcode
function pro_single_news_tickr_list_shortcode($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'post_type' => 'post',
		'count' => '5',
		'id' => '',
		'text' => 'Latest News',
	), $atts, 'projects' ) );
	
	
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $post_type, 'category_name' => $category)
        );		
		
		
	$list = '<div class="BreakingNewsStyle easing " id="breakingnews'.$id.'">
		<div class="bn-title"></div>
		<ul><marquee scrollamount="5">';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$list .= '
		
			
			
		<li class="breakingnews_test"><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		
			
			
		';        
	endwhile;
	$list.= '</marquee></ul>
			
	</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('breakingnews', 'pro_single_news_tickr_list_shortcode');


function pro_single_news_tickr_list_shortcode_one($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'post_type' => 'post',
		'count' => '5',
		'id' => '1',
		'text' => 'Latest News',
	), $atts, 'projects' ) );
	
	
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $post_type, 'category_name' => $category)
        );		
		
		
	$list = '<div class="BreakingNewsStyle easing" id="breakingnews'.$id.'">
		<div class="bn-title"></div>
		<ul>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$list .= '
		
			
			
			<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		
			
			
		';        
	endwhile;
	$list.= '</ul>
		<div class="bn-arrows"><span class="bn-arrows-left"></span><span class="bn-arrows-right"></span></div>	
	</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('breakingnews1', 'pro_single_news_tickr_list_shortcode_one');



// News shortcode
function pro_single_news_tickr_list_shortcode_two($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'post_type' => 'post',
		'count' => '5',
		'id' => '2',
		'text' => 'Latest News',
	), $atts, 'projects' ) );
	
	
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $post_type, 'category_name' => $category)
        );		
		
		
	$list = '<div class="BreakingNewsStyle easing" id="breakingnews'.$id.'">
		<div class="bn-title"></div>
		<ul><marquee scrollamount="5">';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$list .= '
		
			
			<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		
			
			
		';        
	endwhile;
	$list.= '</marquee></ul>
		
	</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('breakingnews2', 'pro_single_news_tickr_list_shortcode_two');



// News shortcode
function pro_single_news_tickr_list_shortcode_three($atts){
	extract( shortcode_atts( array(
		'category' => '',
		'post_type' => 'post',
		'count' => '5',
		'id' => '3',
		'text' => 'Latest News',
	), $atts, 'projects' ) );
	
	
	
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => $post_type, 'category_name' => $category)
        );		
		
		
	$list = '<div class="BreakingNewsStyle easing" id="breakingnews'.$id.'">
		<div class="bn-title"></div>
		<ul>';
	while($q->have_posts()) : $q->the_post();
		$idd = get_the_ID();
		$list .= '
		
			
			<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>
		
			
			
		';        
	endwhile;
	$list.= '</ul>
		<div class="bn-arrows"><span class="bn-arrows-left"></span><span class="bn-arrows-right"></span></div>	
	</div>';
	wp_reset_query();
	return $list;
}
add_shortcode('breakingnews3', 'pro_single_news_tickr_list_shortcode_three');




//menu item
add_action( 'admin_menu', 'pro_news_register_my_menu_item' );
function pro_news_register_my_menu_item() {
	 
    //add_menu_page('Add news option panel', 'Add news options', 'manage_options', 'Add news options level', 'pro_news_options_function_framwrork', plugins_url( '/images/icon.png', __FILE__  ), 22 );
	
	add_options_page('Add news option panel', 'Add BreakingNews options', 'manage_options', 'newsticker-settings','pro_news_options_function_framwrork');  
	
}

add_action( 'admin_enqueue_scripts', 'pro_single_news_wptuts_add_color_picker' );
function pro_single_news_wptuts_add_color_picker( $hook ) {
 
    if( is_admin() ) {
     
        // Add the color picker css file      
        wp_enqueue_style( 'wp-color-picker' );
         
        // Include our custom jQuery file with WordPress Color Picker dependency
        wp_enqueue_script( 'custom-script-handle', plugins_url( '/inc/color-pickr.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
    }
}

// Default options values
$pro_defalet_newstickr_options = array(
	'titlebgcolor' => '#5aa628 ',
	'thirdtitlebgcolor' => '#cf0c36 ',
	'secondtitlebgcolor' => '#099',
	'title' => 'Breaking News',
	'thirdtitle' => 'Breaking News',
	'secondtitle' => 'Breaking News',
	'timer' => '4000',
	'thirdtimer' => '4000',
	'secondtimer' => '4000',
	'newstickr_isbold_type' => 'false',
	'seconds_newstickr_animation_type' => 'slide',
	'third_newstickr_animation_type' => 'slide',
	'newstickr_animation_type' => 'slide'
);


// Store values in array
$newstickr_isbold_type = array(
	'isbold_one' => array(
		'value' => 'true',
		'label' => 'Fonts style blod'
	),
	'isbold_three' => array(
		'value' => 'false',
		'label' => 'Fonts style normal'
	),
);

$newstickr_animation_type = array(
	'effect_one' => array(
		'value' => 'slide',
		'label' => 'Slide animation'
	),
	'effect_three' => array(
		'value' => 'fade',
		'label' => 'Fade animation'
	),
);

// Store values in array
$seconds_newstickr_animation_type = array(
	'effect_one' => array(
		'value' => 'slide',
		'label' => 'Slide animation'
	),
	'effect_three' => array(
		'value' => 'fade',
		'label' => 'Fade animation'
	),
);

// Store values in array
$third_newstickr_animation_type = array(
	'effect_one' => array(
		'value' => 'slide',
		'label' => 'Slide animation'
	),
	'effect_three' => array(
		'value' => 'fade',
		'label' => 'Fade animation'
	),
);


if ( is_admin() ) : // Load only if we are viewing an admin page

// Register settings and call sanitation functions
function pro_newstickr_register_settings() {
	register_setting( 'pro_news_settings_fields_options', 'pro_defalet_newstickr_options', 'pro_newstickr_validate_options' );
}

add_action( 'admin_init', 'pro_newstickr_register_settings' );









function pro_admintab_function_active() {?>
  <style>
		div.rasel_option_panel ul.etabs {border-bottom: 1px solid #DDDDDD; list-style: none outside none; margin: 25px 0 0; overflow: hidden; padding: 0;}
		div.rasel_option_panel ul.etabs li{float: left;margin:0}
		div.rasel_option_panel ul.etabs li a{border: 1px solid #DDDDDD; display: block; margin-right: 10px; padding: 10px 20px;border-bottom:0px solid #ddd;text-decoration:none}
		div.rasel_option_panel ul.etabs li.active a{background:#0074A2;color:#fff}
		div.rasel_option_panel ul.etabs li a:hover{}
		div.rasel_option_panel .form-table input[type=text], .form-table textarea {border: 1px solid #DDDDDD; box-shadow: 0 0 0; min-width: 60%; padding: 6px;}
  </style>
	<?php
}
add_action('admin_head', 'pro_admintab_function_active');



// Function to generate options page
function pro_news_options_function_framwrork() {
	global $pro_defalet_newstickr_options, $newstickr_animation_type, $seconds_newstickr_animation_type ,$third_newstickr_animation_type, $newstickr_isbold_type;

	if ( ! isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>

	<div class="wrap">

	
	<h2> BreakiNgnews Options Panel</h2>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
	<?php endif; // If the form has just been submitted, this shows the notification ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'pro_defalet_newstickr_options', $pro_defalet_newstickr_options ); ?>
	
	<?php settings_fields( 'pro_news_settings_fields_options' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	
<div id="tab-container" class='tab-container rasel_option_panel'>
 <ul class='etabs'>
   
   <li class='tab'><a href="#cover_page_settings">BreakingNews settings One</a></li>
   <li class='tab'><a href="#inner_page_settings">BreakingNews settings Two</a></li>
   <li class='tab'><a href="#inner_another_page_settings">BreakingNews settings Three</a></li>
 </ul>
 <div class='panel-container'>
  <div id="cover_page_settings">
  
	<h2>BreakingNews Shortcode Style One</h2>
	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->
	
		
		<tr valign="top">
			<th scope="row"><label>Used Breaking News deflate Shortcode</label></th>
			<td>
				<p>Copy this shortcode and paste on page or post where you want to display Breaking News, Use PHP code to your themes file to display Breaking News.</p>
				<input type="text" onclick="this.select()" style="box-shadow:none;border:1px solid #E0E0E0;background:#E0E0E0;text-align:Center;font-family:'Courier New';font-size:10pt;pading:5px 10px;" size="25" value="[breakingnews]" readonly="readonly">
				<textarea onclick="this.select();" style="background:#E0E0E0">&lt;?php echo do_shortcode("[breakingnews]"); ?&gt;</textarea>
				
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label>Breaking News Shortcode</label></th>
			<td>
				<p>Place taken this shortcode code 
				<kbd>[breakingnews1]</kbd> and used of your chooses Page.  Or </br>
				</br>
				<kbd><</kbd><kbd>?php echo do_shortcode('[breakingnews1]'); ?></kbd>used this shortcode of your theme.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="title">Breaking News Title</label></th>
			<td>
				<input id="title" type="text" name="pro_defalet_newstickr_options[title]" value="<?php echo stripslashes($settings['title']); ?>" class="text-field" /><p class="description">Enter Breaking News Title here. You can also Change News Title.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="titlebgcolor">Title Background</label></th>
			<td>
				<input id="titlebgcolor" type="text" name="pro_defalet_newstickr_options[titlebgcolor]" value="<?php echo stripslashes($settings['titlebgcolor']); ?>" class="color-field" /><p class="description">Select Title Background color here. You can also add html HEX color code.</p>
			</td>
		</tr>
		
		<tr valign="top">
			<th scope="row"><label for="cursor_color">Timer Speed in BreakingNews</label></th>
			<td>
				<input id="timer" type="text" name="pro_defalet_newstickr_options[timer]" value="<?php echo stripslashes($settings['timer']); ?>" class="text-field" /><p class="description">Enter value for Timer speed. Only numeric values are acceptable. Please enter values in milie sec format. 3000 = 3 seconds, 5000 for 5 seconds.</p>
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row"><label for="newstickr_isbold_type">BreakingNews fonts style</label><p class="description"> Select your Choose fonts style.</p></th>
			<td>
				<?php foreach( $newstickr_isbold_type as $activate ) : ?>
				<input type="radio" id="<?php echo $activate['value']; ?>" name="pro_defalet_newstickr_options[newstickr_isbold_type]" value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $settings['newstickr_isbold_type'], $activate['value'] ); ?> />
				<label for="<?php echo $activate['value']; ?>"><?php echo $activate['label']; ?></label><br />
				<?php endforeach; ?>
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row"><label for="newstickr_animation_type">BreakingNews Animation</label><p class="description"> Select your Choose animation style.</p></th>
			<td>
				<?php foreach( $newstickr_animation_type as $activate ) : ?>
				<input type="radio" id="<?php echo $activate['value']; ?>" name="pro_defalet_newstickr_options[newstickr_animation_type]" value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $settings['newstickr_animation_type'], $activate['value'] ); ?> />
				<label for="<?php echo $activate['value']; ?>"><?php echo $activate['label']; ?></label><br />
				<?php endforeach; ?>
			</td>
		</tr>	
		
		

		

			
	</table>
  </div>
  
  
  <div id="inner_page_settings">
  
	<h2>BreakingNews Shortcode Style Two</h2>
	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->
	
		
		<tr valign="top">
			<th scope="row"><label>Breaking News Shortcode</label></th>
			<td>
				<p>Place taken this code shortcode <kbd>[breakingnews2]</kbd>
				and used of your chooses page  Or </br>
				</br>
				<kbd><</kbd><kbd>?php echo do_shortcode('[breakingnews2]');?> </kbd>used this shortcode of your theme.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="secondtitle">Breaking News Title</label></th>
			<td>
				<input id="secondtitle" type="text" name="pro_defalet_newstickr_options[secondtitle]" value="<?php echo stripslashes($settings['secondtitle']); ?>" class="text-field" /><p class="description">Enter Breaking News Title here. You can also Change News Title.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="secondtitlebgcolor">Title Background</label></th>
			<td>
				<input id="secondtitlebgcolor" type="text" name="pro_defalet_newstickr_options[secondtitlebgcolor]" value="<?php echo stripslashes($settings['secondtitlebgcolor']); ?>" class="color-field" /><p class="description">Select Title Background color here. You can also add html HEX color code.</p>
			</td>
		</tr>
		
		<tr valign="top">
			<th scope="row"><label for="secondtimer">Timer Speed in BreakingNews</</label></th>
			<td>
				<input id="secondtimer" type="text" name="pro_defalet_newstickr_options[secondtimer]" value="<?php echo stripslashes($settings['secondtimer']); ?>" class="text-field" /><p class="description">Enter value for Timer speed. Only numeric values are acceptable. Please enter values in milie sec format. 3000 = 3 seconds, 5000 for 5 seconds.</p>
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row"><label for="seconds_newstickr_animation_type">BreakingNews Animation</label><p class="description">  Select your Choose animation style.</p></th>
			<td>
				<?php foreach( $seconds_newstickr_animation_type as $activate ) : ?>
				<input type="radio" id="<?php echo $activate['value']; ?>" name="pro_defalet_newstickr_options[seconds_newstickr_animation_type]" value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $settings['seconds_newstickr_animation_type'], $activate['value'] ); ?> />
				<label for="<?php echo $activate['value']; ?>"><?php echo $activate['label']; ?></label><br />
				<?php endforeach; ?>
			</td>
		</tr>	
		
		

			
	</table>	
  </div>
  <div id="inner_another_page_settings">
	
	  
	<h2>BreakingNews Shortcode Style Three</h2>
	<table class="form-table"><!-- Grab a hot cup of coffee, yes we're using tables! -->
	
		
		<tr valign="top">
			<th scope="row"><label>Breaking News Shortcode</label></th>
			<td>
				<p>Place taken this code shortcode <kbd>[breakingnews3]</kbd> 
				and used of your chooses page  Or </br>
				</br>
				<kbd><</kbd><kbd>?php echo do_shortcode('[breakingnews3]');?> </kbd>used this shortcode of your theme.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="thirdtitle">Breaking News Title</label></th>
			<td>
				<input id="thirdtitle" type="text" name="pro_defalet_newstickr_options[thirdtitle]" value="<?php echo stripslashes($settings['thirdtitle']); ?>" class="text-field" /><p class="description">Enter Breaking News Title  here. You can also Change Title.</p>
			</td>
		</tr>
		<tr valign="top">
			<th scope="row"><label for="thirdtitlebgcolor">Title Background</label></th>
			<td>
				<input id="thirdtitlebgcolor" type="text" name="pro_defalet_newstickr_options[thirdtitlebgcolor]" value="<?php echo stripslashes($settings['thirdtitlebgcolor']); ?>" class="color-field" /><p class="description">Select Title Background color here. You can also add html HEX color code.</p>
			</td>
		</tr>
		
		<tr valign="top">
			<th scope="row"><label for="thirdtimer">Timer Speed in BreakingNews</label></th>
			<td>
				<input id="thirdtimer" type="text" name="pro_defalet_newstickr_options[thirdtimer]" value="<?php echo stripslashes($settings['thirdtimer']); ?>" class="text-field" /><p class="description">Enter value for Timer speed. Only numeric values are acceptable. Please enter values in milie sec format. 3000 = 3 seconds, 5000 for 5 seconds.</p>
			</td>
		</tr>	
		<tr valign="top">
			<th scope="row"><label for="third_newstickr_animation_type">BreakingNews Animation</label><p class="description">  Select your Choose animation style.</p></th>
			<td>
				<?php foreach( $third_newstickr_animation_type as $activate ) : ?>
				<input type="radio" id="<?php echo $activate['value']; ?>" name="pro_defalet_newstickr_options[third_newstickr_animation_type]" value="<?php esc_attr_e( $activate['value'] ); ?>" <?php checked( $settings['third_newstickr_animation_type'], $activate['value'] ); ?> />
				<label for="<?php echo $activate['value']; ?>"><?php echo $activate['label']; ?></label><br />
				<?php endforeach; ?>
			</td>
		</tr>	
		
		

			
	</table>
  </div>
 </div>
</div>

	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>

	</div>

	<?php
}

// functions validate options
function pro_newstickr_validate_options( $input ) {
	global $pro_defalet_newstickr_options, $newstickr_animation_type, $seconds_newstickr_animation_type, $third_newstickr_animation_type, $newstickr_isbold_type;


	$settings = get_option( 'pro_defalet_newstickr_options', $pro_defalet_newstickr_options );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS

	$input['titlebgcolor'] = wp_filter_post_kses( $input['titlebgcolor'] );
	$input['thirdtitlebgcolor'] = wp_filter_post_kses( $input['thirdtitlebgcolor'] );
	$input['secondtitlebgcolor'] = wp_filter_post_kses( $input['secondtitlebgcolor'] );
	$input['item_speed'] = wp_filter_post_kses( $input['item_speed'] );
	$input['thirditem_speed'] = wp_filter_post_kses( $input['thirditem_speed'] );
	$input['seconditem_speed'] = wp_filter_post_kses( $input['seconditem_speed'] );
	$input['title'] = wp_filter_post_kses( $input['title'] );
	$input['thirdtitle'] = wp_filter_post_kses( $input['thirdtitle'] );
	$input['secondtitle'] = wp_filter_post_kses( $input['secondtitle'] );

	
	
	// We select the previous value of the field, to restore it in case an invalid entry has been given
	$prev = $settings['layout_view'];
	// We verify if the given value exists in the layouts array
	if ( !array_key_exists( $input['layout_view'], $newstickr_animation_type ) )
	if ( !array_key_exists( $input['layout_view'], $seconds_newstickr_animation_type ) )
	if ( !array_key_exists( $input['layout_view'], $newstickr_isbold_type ) )
	if ( !array_key_exists( $input['layout_view'], $third_newstickr_animation_type ) )
		$input['layout_view'] = $prev;	

		
	
	return $input;
}

endif;  // EndIf is_admin()




// Active jquery script in footer
function  pro_single_news_active_script_one(){
  ?>

		
<?php global $pro_defalet_newstickr_options; $pro_newstickr_settings = get_option( 'pro_defalet_newstickr_options', $pro_defalet_newstickr_options ); ?>
	
	<script type="text/javascript">
		jQuery(function(){
		
			// breakingnews panel
			jQuery('#breakingnews').BreakingNews({
				title: '<?php echo $pro_newstickr_settings['title']; ?>',
				autoplay		:false
			});
			jQuery('#breakingnews1').BreakingNews({
				title: '<?php echo $pro_newstickr_settings['title']; ?>',
				titlebgcolor: '<?php echo $pro_newstickr_settings['titlebgcolor']; ?>',
				linkhovercolor: '<?php echo $pro_newstickr_settings['titlebgcolor']; ?>',
				border: '1px solid <?php echo $pro_newstickr_settings['titlebgcolor']; ?>',
				timer: <?php echo $pro_newstickr_settings['timer']; ?>,
					isbold			:<?php echo $pro_newstickr_settings['newstickr_isbold_type']; ?>,
				effect: '<?php echo $pro_newstickr_settings['newstickr_animation_type']; ?>'
			});
			jQuery('#breakingnews2').BreakingNews({
				title: '<?php echo $pro_newstickr_settings['secondtitle']; ?>',
				titlebgcolor: '<?php echo $pro_newstickr_settings['secondtitlebgcolor']; ?>',
				linkhovercolor: '<?php echo $pro_newstickr_settings['secondtitlebgcolor']; ?>',
				border: '1px solid <?php echo $pro_newstickr_settings['secondtitlebgcolor']; ?>',
				timer: <?php echo $pro_newstickr_settings['secondtimer']; ?>,
				autoplay		:false,
					isbold			:<?php echo $pro_newstickr_settings['newstickr_isbold_type']; ?>,
				effect: '<?php echo $pro_newstickr_settings['seconds_newstickr_animation_type']; ?>'
			});
			
			// breakingnews third panel
			jQuery('#breakingnews3').BreakingNews({
				title: '<?php echo $pro_newstickr_settings['thirdtitle']; ?>',
				titlebgcolor: '<?php echo $pro_newstickr_settings['thirdtitlebgcolor']; ?>',
				linkhovercolor: '<?php echo $pro_newstickr_settings['thirdtitlebgcolor']; ?>',
				border: '1px solid <?php echo $pro_newstickr_settings['thirdtitlebgcolor']; ?>',
				timer: <?php echo $pro_newstickr_settings['thirdtimer']; ?>,
					isbold			:<?php echo $pro_newstickr_settings['newstickr_isbold_type']; ?>,
				effect: '<?php echo $pro_newstickr_settings['third_newstickr_animation_type']; ?>'
			});

		});
		jQuery(function() {
			jQuery('marquee').mouseover(function() {
				jQuery(this).attr('scrollamount',0);
			}).mouseout(function() {
				 jQuery(this).attr('scrollamount',5);
			});

		});
	</script>
	
  <?php

}

add_action('wp_head', 'pro_single_news_active_script_one');

