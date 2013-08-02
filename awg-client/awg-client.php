<?php

/*
Plugin Name: awg-client
Plugin URI: http://awesomewebguy.com/awg-client-plugin/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=plugin-uri
Description: Adding helpful links for Awesome Web Guy design and support clients.
Version: 0.3
Author: Gedaly Guberek
Author URI: http://gedaly.com/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=author-uri
*/


// Add custom footer in admin section

function awg_custom_footer_admin () {
    echo 'Built by <a href="http://awesomewebguy.com/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=footer-link" target="_blank">Awesome Web Guy</a> | <a href="mailto:gedaly@awesomewebguy.com">Email Support</a></p>';
    }

    add_filter('admin_footer_text', 'awg_custom_footer_admin');



// Add Dropdown Menu to WordPress Admin Bar

add_action('admin_bar_menu', 'awg_add_toolbar_items', 100);
function awg_add_toolbar_items($admin_bar){
	$admin_bar->add_menu( array(
		'id'    => 'awg-menu',
		'title' => 'Awesome Web Guy',
		'href'  => 'http://awesomewebguy.com/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=wp-admin-bar-link',	
		'meta'  => array(
			'title' => __('Awesome Web Guy'),	
			'target' => '_blank',		
		),
	));
	$admin_bar->add_menu( array(
		'id'    => 'awg-support',
		'parent' => 'awg-menu',
		'title' => 'Support',
		'href'  => 'http://awesomewebguy.com/contact/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=wp-admin-bar-link',
		'meta'  => array(
			'title' => __('Support'),
			'target' => '_blank',
			'class' => 'awg_menu_item_class'
		),
	));
	$admin_bar->add_menu( array(
		'id'    => 'awg-wp-tutorials',
		'parent' => 'awg-menu',
		'title' => 'Blog & Tutorials',
		'href'  => 'http://awesomewebguy.com/blog/?utm_source=wp-awg-plugin&utm_medium=link&utm_campaign=wp-admin-bar-link',
		'meta'  => array(
			'title' => __('Blog & Tutorials'),
			'target' => '_blank',
			'class' => 'awg_menu_item_class'
		),
	));
}


// Add WP Lifeguard Tutorial Video Section

add_action('admin_menu', 'lgap_add_pages');


function lgap_add_pages()  {
add_menu_page(__('Help Videos','menu-test'), __('Help Videos','menu-test'), 'read', 'lifeguard-assistant-plugin', 'lgap_main_page' );
}

function lgap_main_page() {echo "<h2>" . __( 'Help Videos', 'menu-test' ) . "</h2>";


     echo '<style type="text/css">#wplg { font-family: "Varela",Helvetica,Trebuchet MS,Verdana,"DejaVu Sans",sans-serif; }#wplg a:link,#wplg a:visited { color: #21759b; text-decoration: none; }#wplg a:hover { color: #d54e21; }.wplg-video { background: #f6f6f6; border: 1px solid #dadada; padding: 12px; margin: 0 12px 12px 0; float: left; }.wplg-clear { clear: both; }.wplg-green-button { box-shadow:inset 0 0 3px rgba(0,0,0,.1); font-size: 20px; line-height: 32px; height: 32px; width: 434px; margin: 0 12px 12px 0; text-align: center; display: block; border: 2px solid #9abf89; background: #7da742; color: #f1ffeb !important; text-shadow: 0 0 3px rgba(125,167,66,.75); }.wplg-green-button:hover { border: 2px solid #c0e1aa; background: #8ac636; }.wplg-green-button:active { border: 2px solid #88a65e; background: #5d822a; }</style><link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" type="text/css"><div id="wplg"><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32852753?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32856785?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857648?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32860297?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32872861?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32878118?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32881530?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32864178?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32863614?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32862744?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857481?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-clear"></div></div>';}         


// Include github updater code
// REF: https://github.com/jkudish/WordPress-GitHub-Plugin-Updater


add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

	include_once 'updater.php';

	define( 'WP_GITHUB_FORCE_UPDATE', true );

	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

		$config = array(
			'slug' => awg-client( __FILE__ ),
			'proper_folder_name' => 'awg-client',
			'api_url' => 'https://api.github.com/repos/gedaly/AWG-ClientPlugin',
			'raw_url' => 'https://raw.github.com/gedaly/AWG-ClientPlugin/master',
			'github_url' => 'https://github.com/gedaly/AWG-ClientPlugin',
			'zip_url' => 'https://github.com/gedaly/AWG-ClientPlugin/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.6',
			'readme' => 'README.md',
			'access_token' => '',
		);

		new WP_GitHub_Updater( $config );

	}

}




/**
 * Configuration assistant for updating from private repositories.
 * Do not include this in your plugin once you get your access token.
 *
 * @see /wp-admin/plugins.php?page=github-updater
 */
class WPGitHubUpdaterSetup {

	/**
	 * Full file system path to the main plugin file
	 *
	 * @var string
	 */
	var $plugin_file;

	/**
	 * Path to the main plugin file relative to WP_CONTENT_DIR/plugins
	 *
	 * @var string
	 */
	var $plugin_basename;

	/**
	 * Name of options page hook
	 *
	 * @var string
	 */
	var $options_page_hookname;

	function __construct() {

		// Full path and plugin basename of the main plugin file
		$this->plugin_file = __FILE__;
		$this->plugin_basename = plugin_basename( $this->plugin_file );

		add_action( 'admin_init', array( $this, 'settings_fields' ) );
		add_action( 'admin_menu', array( $this, 'add_page' ) );
		add_action( 'network_admin_menu', array( $this, 'add_page' ) );

		add_action( 'wp_ajax_set_github_oauth_key', array( $this, 'ajax_set_github_oauth_key' ) );
	}

	/**
	 * Add the options page
	 *
	 * @return none
	 */
	function add_page() {
		if ( current_user_can ( 'manage_options' ) ) {
			$this->options_page_hookname = add_plugins_page ( __( 'Github Updates', 'github_plugin_updater' ), __( 'Github Updates', 'github_plugin_updater' ), 'manage_options', 'github-updater', array( $this, 'admin_page' ) );
			add_filter( "network_admin_plugin_action_links_{$this->plugin_basename}", array( $this, 'filter_plugin_actions' ) );
			add_filter( "plugin_action_links_{$this->plugin_basename}", array( $this, 'filter_plugin_actions' ) );
		}
	}

	/**
	 * Add fields and groups to the settings page
	 *
	 * @return none
	 */
	public function settings_fields() {
		register_setting( 'ghupdate', 'ghupdate', array( $this, 'settings_validate' ) );

		// Sections: ID, Label, Description callback, Page ID
		add_settings_section( 'ghupdate_private', 'Private Repositories', array( $this, 'private_description' ), 'github-updater' );

		// Private Repo Fields: ID, Label, Display callback, Menu page slug, Form section, callback arguements
		add_settings_field(
			'client_id', 'Client ID', array( $this, 'input_field' ), 'github-updater', 'ghupdate_private',
			array(
				'id' => 'client_id',
				'type' => 'text',
				'description' => '',
			)
		);
		add_settings_field(
			'client_secret', 'Client Secret', array( $this, 'input_field' ), 'github-updater', 'ghupdate_private',
			array(
				'id' => 'client_secret',
				'type' => 'text',
				'description' => '',
			)
		);
		add_settings_field(
			'access_token', 'Access Token', array( $this, 'token_field' ), 'github-updater', 'ghupdate_private',
			array(
				'id' => 'access_token',
			)
		);
		add_settings_field(
			'gh_authorize', '<p class="submit"><input class="button-primary" type="submit" value="'.__( 'Authorize with Github', 'github_plugin_updater' ).'" /></p>', null, 'github-updater', 'ghupdate_private', null
		);

	}

	public function private_description() {
?>
		<p>Updating from private repositories requires a one-time application setup and authorization. These steps will not need to be repeated for other sites once you receive your access token.</p>
		<p>Follow these steps:</p>
		<ol>
			<li><a href="https://github.com/settings/applications/new" target="_blank">Create an application</a> with the <strong>Main URL</strong> and <strong>Callback URL</strong> both set to <code><?php echo bloginfo( 'url' ) ?></code></li>
			<li>Copy the <strong>Client ID</strong> and <strong>Client Secret</strong> from your <a href="https://github.com/settings/applications" target="_blank">application details</a> into the fields below.</li>
			<li><a href="javascript:document.forms['ghupdate'].submit();">Authorize with Github</a>.</li>
		</ol>
		<?php
	}

	public function input_field( $args ) {
		extract( $args );
		$gh = get_option( 'ghupdate' );
		$value = $gh[$id];
?>
		<input value="<?php esc_attr_e( $value )?>" name="<?php esc_attr_e( $id ) ?>" id="<?php esc_attr_e( $id ) ?>" type="text" class="regular-text" />
		<?php echo $description ?>
		<?php
	}

	public function token_field( $args ) {
		extract( $args );
		$gh = get_option( 'ghupdate' );
		$value = $gh[$id];

		if ( empty( $value ) ) {
?>
			<p>Input Client ID and Client Secret, then <a href="javascript:document.forms['ghupdate'].submit();">Authorize with Github</a>.</p>
			<input value="<?php esc_attr_e( $value )?>" name="<?php esc_attr_e( $id ) ?>" id="<?php esc_attr_e( $id ) ?>" type="hidden" />
			<?php
		}else {
?>
			<input value="<?php esc_attr_e( $value )?>" name="<?php esc_attr_e( $id ) ?>" id="<?php esc_attr_e( $id ) ?>" type="text" class="regular-text" />
			<p>Add to the <strong>$config</strong> array: <code>'access_token' => '<?php echo $value ?>',</code>
			<?php
		}
?>
		<?php
	}

	public function settings_validate( $input ) {
		if ( empty( $input ) ) {
			$input = $_POST;
		}
		if ( !is_array( $input ) ) {
			return false;
		}
		$gh = get_option( 'ghupdate' );
		$valid = array();

		$valid['client_id']     = strip_tags( $input['client_id'] );
		$valid['client_secret'] = strip_tags( $input['client_secret'] );
		$valid['access_token']  = strip_tags( $input['access_token'] );

		if ( empty( $valid['client_id'] ) ) {
			add_settings_error( 'client_id', 'no-client-id', __( 'Please input a Client ID before authorizing.', 'github_plugin_updater' ), 'error' );
		}
		if ( empty( $valid['client_secret'] ) ) {
			add_settings_error( 'client_secret', 'no-client-secret', __( 'Please input a Client Secret before authorizing.', 'github_plugin_updater' ), 'error' );
		}

		return $valid;
	}

	/**
	 * Add a settings link to the plugin actions
	 *
	 * @param array   $links Array of the plugin action links
	 * @return array
	 */
	function filter_plugin_actions( $links ) {
		$settings_link = '<a href="plugins.php?page=github-updater">' . __( 'Setup', 'github_plugin_updater' ) . '</a>';
		array_unshift( $links, $settings_link );
		return $links;
	}

	/**
	 * Output the setup page
	 *
	 * @return none
	 */
	function admin_page() {
		$this->maybe_authorize();
?>
		<div class="wrap ghupdate-admin">

			<div class="head-wrap">
				<?php screen_icon( 'plugins' ); ?>
				<h2><?php _e( 'Setup Github Updates' , 'github_plugin_updater' ); ?></h2>
			</div>

			<div class="postbox-container primary">
				<form method="post" id="ghupdate" action="options.php">
					<?php
		settings_errors();
		settings_fields( 'ghupdate' ); // includes nonce
		do_settings_sections( 'github-updater' );
?>
				</form>
			</div>

		</div>
		<?php
	}

	public function maybe_authorize() {
		$gh = get_option( 'ghupdate' );
		if ( 'false' == $_GET['authorize'] || 'true' != $_GET['settings-updated'] || empty( $gh['client_id'] ) || empty( $gh['client_secret'] ) ) {
			return;
		}

		$redirect_uri = urlencode( admin_url( 'admin-ajax.php?action=set_github_oauth_key' ) );

		// Send user to Github for account authorization

		$query = 'https://github.com/login/oauth/authorize';
		$query_args = array(
			'scope' => 'repo',
			'client_id' => $gh['client_id'],
			'redirect_uri' => $redirect_uri,
		);
		$query = add_query_arg( $query_args, $query );
		wp_redirect( $query );

		exit;

	}

	public function ajax_set_github_oauth_key() {
		$gh = get_option( 'ghupdate' );

		$query = admin_url( 'plugins.php' );
		$query = add_query_arg( array( 'page' => 'github-updater' ), $query );

		if ( isset( $_GET['code'] ) ) {
			// Receive authorized token
			$query = 'https://github.com/login/oauth/access_token';
			$query_args = array(
				'client_id' => $gh['client_id'],
				'client_secret' => $gh['client_secret'],
				'code' => $_GET['code'],
			);
			$query = add_query_arg( $query_args, $query );
			$response = wp_remote_get( $query, array( 'sslverify' => false ) );
			parse_str( $response['body'] ); // populates $access_token, $token_type

			if ( !empty( $access_token ) ) {
				$gh['access_token'] = $access_token;
				update_option( 'ghupdate', $gh );
			}

			wp_redirect( admin_url( 'plugins.php?page=github-updater' ) );
			exit;

		}else {
			$query = add_query_arg( array( 'authorize'=>'false' ), $query );
			wp_redirect( $query );
			exit;
		}
	}
}
add_action( 'init', create_function( '', 'global $WPGitHubUpdaterSetup; $WPGitHubUpdaterSetup = new WPGitHubUpdaterSetup();' ) );




?>