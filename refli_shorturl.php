<?php
/*
Plugin Name: WP URL Shortener
Plugin URI: http://www.thesetemplates.com/2013/07/wordpress-shorten-url-plugin.html
Description: Shortens URLS of your blog posts via ref.li service for twitter and can be used to hide referer
Version: 2.0
Author: WPFIXIT
Author URI: http://microlancer.com/user/alisaleem252
*/

// use Api key input
$var_Apikey = get_option('new_Api_key');

define('DEFAULT_API_URL', 'http://ref.li/api?api='.$var_Apikey.'&format=text&url=%s');
define('refli_plugin_path', plugin_dir_path(__FILE__) );
/* returns a result from url */
if ( ! function_exists( 'curl_get_url' ) ){
  function curl_get_url($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
 }
}

if ( ! function_exists( 'get_refli_url' ) ){ /* what's the odds of that? */
function get_refli_url($url,$format='txt') {
   global $var_Apikey;
   $connectURL = 'http://ref.li/api?api='.$var_Apikey.'&format=text&url='.$url;
   return curl_get_url($connectURL);
   
 }
}

if ( ! function_exists( 'refli_show_url' ) ){
 function refli_show_url($showurl) { /* use with echo statement */
  $url_create = get_refli_url(get_permalink( $id ));

  $kshort .= '<a href="'.$url_create.'" target="_blank">'.$url_create.'</a>';
  return $kshort;
 }
}

if ( ! function_exists( 'refli_shortcode_handler' ) ){
 function refli_shortcode_handler( $atts, $text = null, $code = "" ) {
	extract( shortcode_atts( array( 'u' => null ), $atts ) );
	
	$url = get_refli_url( $u );
	$rurl = refli_show_url($showurl); 

	if( !$u )
		return $rurl;
	if( !$text )
		return '<a href="' .$url. '">' .$url. '</a>';
	
	return '<a href="' .$url. '">' .$text. '</a>';
 }
}
add_shortcode('refli-url', 'refli_shortcode_handler');

class refli_Short_URL
{
    const META_FIELD_NAME='Shorter link';	
	
    /**
     * List of short URL website API URLs (only refli.net for now)
     */
    function api_urls()
    {
        return array(
            array(
                'name' => 'ref.li Safe Url Shortener',
                'url'  => 'http://ref.li/api?api='.$var_Apikey.'&format=text&url=%s',
                )
            );
    }

    /**
     * Create short URL based on post URL
     */
    function create($post_id)
    {
        if (!$apiURL = get_option('refliShortUrlApiUrl')) {
            $apiURL = DEFAULT_API_URL;
        }

        // For some reason the post_name changes to /{id}-autosave/ when a post is autosaved
        $post = get_post($post_id);
        $pos = strpos($post->post_name, 'autosave');
        if ($pos !== false) {
            return false;
        }
        $pos = strpos($post->post_name, 'revision');
        if ($pos !== false) {
            return false;
        }

        $apiURL = str_replace('%s', urlencode(get_permalink($post_id)), $apiURL);

        $result = false;

        if (ini_get('allow_url_fopen')) {
            if ($handle = @fopen($apiURL, 'r')) {
                $result = fread($handle, 4096);
                fclose($handle);
            }
        } elseif (function_exists('curl_init')) {
            $ch = curl_init($apiURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            $result = @curl_exec($ch);
            curl_close($ch);
        }

        if ($result !== false) {
            delete_post_meta($post_id, 'refliShortURL');
            $res = add_post_meta($post_id, 'refliShortURL', $result, true);
            return true;
        }
    }

    /**
     * Option list (default settings)
     */
    
    function options()
    {
        return array(
           'ApiUrl'         => DEFAULT_API_URL,
           'Display'        => 'Y',
           'TwitterLink'    => 'Y',
           );
    }
    
    /**
     * Plugin settings
     *
     */
    
    function settings()
    {
        $apiUrls = $this->api_urls();
        $options = $this->options();
        $opt = array();

        if (!empty($_POST)) {
            foreach ($options AS $key => $val)
            {
                if (!isset($_POST[$key])) {
                    continue;
                }
                update_option('refliShortURL' . $key, $_POST[$key]);
            }
        }
        foreach ($options AS $key => $val)
        {
            $opt[$key] = get_option('refliShortURL' . $key);
        }
        include refli_plugin_path . 'template/settings.tpl.php';
    }
    
    /**
     *
     */
    
    function admin_menu()
    {
        add_options_page('WP Short URLs by Ref.li', 'WP URLs Shorten', 10, 'refli_shorturl-settings', array(&$this, 'settings'));
    }
    
    /**
     * Display the short URL
     */
    function display($content)
    {

        global $post;

        if ($post->ID <= 0) {
            return $content;
        }

        $options = $this->options();
	//$options = array();

        foreach ($options AS $key => $val)
        {
            $opt[$key] = get_option('refliShortURL' . $key);
        }

        $shortUrl = get_post_meta($post->ID, 'refliShortURL', true);

        if (empty($shortUrl)) {
            return $content;
        }

        $shortUrlEncoded = urlencode($shortUrl);

        ob_start();
        include refli_plugin_path . 'template/public.tpl.php';
        $content .= ob_get_contents();
        ob_end_clean();

        return $content;
    }

    public function pre_get_shortlink($false, $id, $context=null, $allow_slugs=null) /* Thanks to Rob Allen */
    {
        // get the post id
        global $wp_query;
        if ($id == 0) {
            $post_id = $wp_query->get_queried_object_id();
        } else {
            $post = get_post($id);
            $post_id = $post->ID;
        }

        $short_link = get_post_meta($post_id, self::META_FIELD_NAME, true);
        if('' == $short_link) {
            $short_link = $post_id;
        }

        $url = get_refli_url(get_permalink( $id ));
        if (!empty($url)) {
            $short_link = $url;
        } else {
            $short_link = home_url($short_link);
        }
        return $short_link;
    }

}

$refli = new refli_Short_URL;

if (is_admin()) {
    add_action('edit_post', array(&$refli, 'create'));
    add_action('save_post', array(&$refli, 'create'));
    add_action('publish_post', array(&$refli, 'create'));
    add_action('admin_menu', array(&$refli, 'admin_menu'));
    add_filter('pre_get_shortlink',  array(&$refli, 'pre_get_shortlink'), 10, 4);
} else {
    add_filter('the_content', array(&$refli, 'display'));
}

   //Api key input admin menu page
// create custom plugin settings menu
add_action('admin_menu', 'shortlink_create_menu');
function shortlink_create_menu() {

	//create new top-level menu
	add_menu_page('Ref.li Plugin Settings', 'Ref.li', 'administrator', __FILE__, 'short_link_settings_page',plugins_url('icon.png', __FILE__));
	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}
function register_mysettings() {
	//register our settings
	register_setting( 'shortlink-settings-group', 'new_Api_key' );
	
}
add_action( 'admin_init', 'register_mysettings' );

function  short_link_settings_page() {
?>
<div class="wrap">
<h2>Api key Setting</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'shortlink-settings-group' ); ?>
    <?php do_settings_sections( 'shortlink-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enter Api key</th>
        <td><input type="text" name="new_Api_key" value="<?php echo get_option('new_Api_key');?>" /> <a href="http://ref.li/user/register" target="_blank">Get API Key?</a></td>
        </tr>
    </table>
<?php submit_button(); ?>
</form>
</div>
<?php } 
register_activation_hook(__FILE__, 'refli_plugin_activate');
add_action('admin_init', 'refli_plugin_redirect');

function refli_plugin_activate() {
    add_option('refli_plugin_do_activation_redirect', true);
}

function refli_plugin_redirect() {
    if (get_option('refli_plugin_do_activation_redirect', false)) {
        delete_option('refli_plugin_do_activation_redirect');
        wp_redirect('options-general.php?page=wp-url-shorten/refli_shorturl.php');
    }
}
?>