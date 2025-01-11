<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux' ) ) {
	return;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'redux_demo';  // YOU MUST CHANGE THIS.  DO NOT USE 'redux_demo' IN YOUR PROJECT!!!

// Uncomment to disable demo mode.
/* Redux::disable_demo(); */  // phpcs:ignore Squiz.PHP.CommentedOutCode

$dir = __DIR__ . DIRECTORY_SEPARATOR;

/*
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 */

// Background Patterns Reader. 
$sample_patterns      = array();

if ( is_dir( $sample_patterns_path ) ) {
	$sample_patterns_dir = opendir( $sample_patterns_path );

	if ( $sample_patterns_dir ) {

		// phpcs:ignore Generic.CodeAnalysis.AssignmentInCondition.FoundInWhileCondition
		while ( false !== ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) ) {
			if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
				$name              = explode( '.', $sample_patterns_file );
				$name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
				$sample_patterns[] = array(
					'alt' => $name,
					'img' => $sample_patterns_url . $sample_patterns_file,
				);
			}
		}
	}
}

// Used to except HTML tags in description arguments where esc_html would remove.
$kses_exceptions = array(
	'a'      => array(
		'href' => array(),
	),
	'strong' => array(),
	'br'     => array(),
	'code'   => array(),
);


/**
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://devs.redux.io/core/arguments/
 */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

// TYPICAL → Change these values as you need/desire.
$args = array(
	// This is where your data is stored in the database and also becomes your global variable name.
	'opt_name'                  => $opt_name,

	// Name that appears at the top of your panel.
	'display_name'              => $theme->get( 'Name' ),

	// Version that appears at the top of your panel.
	'display_version'           => $theme->get( 'Version' ),

	// Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
	'menu_type'                 => 'menu',

	// Show the sections below the admin menu item or not.
	'allow_sub_menu'            => true,

	// The text to appear in the admin menu.
	'menu_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// The text to appear on the page title.
	'page_title'                => esc_html__( 'Theme Options', 'your-textdomain-here' ),

	// Disable to create your own Google fonts loader.
	'disable_google_fonts_link' => false,

	// Show the panel pages on the admin bar.
	'admin_bar'                 => true,

	// Icon for the admin bar menu.
	'admin_bar_icon'            => 'dashicons-portfolio',

	// Priority for the admin bar menu.
	'admin_bar_priority'        => 50,

	// Sets a different name for your global variable other than the opt_name.
	'global_variable'           => $opt_name,

	// Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
	'dev_mode'                  => true,

	// Enable basic customizer support.
	'customizer'                => true,

	// Allow the panel to open expanded.
	'open_expanded'             => false,

	// Disable the save warning when a user changes a field.
	'disable_save_warn'         => false,

	// Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
	'page_priority'             => 90,

	// For a full list of options, visit: https://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
	'page_parent'               => 'themes.php',

	// Permissions needed to access the options panel.
	'page_permissions'          => 'manage_options',

	// Specify a custom URL to an icon.
	'menu_icon'                 => '',

	// Force your panel to always open to a specific tab (by id).
	'last_tab'                  => '',

	// Icon displayed in the admin panel next to your menu_title.
	'page_icon'                 => 'icon-themes',

	// Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
	'page_slug'                 => $opt_name,

	// On load save the defaults to DB before user clicks save.
	'save_defaults'             => true,

	// Display the default value next to each field when not set to the default value.
	'default_show'              => false,

	// What to print by the field's title if the value shown is default.
	'default_mark'              => '*',

	// Shows the Import/Export panel when not used as a field.
	'show_import_export'        => true,

	 
	// The time transients will expire when the 'database' arg is set.
	'transient_time'            => 60 * MINUTE_IN_SECONDS,

	// Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
	'output'                    => true,

	// Allows dynamic CSS to be generated for customizer and google fonts,
	// but stops the dynamic CSS from going to the page head.
	'output_tag'                => true,

	// Disable the footer credit of Redux. Please leave if you can help it.
	'footer_credit'             => '',

	// If you prefer not to use the CDN for ACE Editor.
	// You may download the Redux Vendor Support plugin to run locally or embed it in your code.
	'use_cdn'                   => true,

	// Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
	'admin_theme'               => 'wp',

	// Enable or disable flyout menus when hovering over a menu with submenus.
	'flyout_submenus'           => true,

	// Mode to display fonts (auto|block|swap|fallback|optional)
	// See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
	'font_display'              => 'swap',

	// HINTS.
	'hints'                     => array(
		'icon'          => 'el el-question-sign',
		'icon_position' => 'right',
		'icon_color'    => 'lightgray',
		'icon_size'     => 'normal',
		'tip_style'     => array(
			'color'   => 'red',
			'shadow'  => true,
			'rounded' => false,
			'style'   => '',
		),
		'tip_position'  => array(
			'my' => 'top left',
			'at' => 'bottom right',
		),
		'tip_effect'    => array(
			'show' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'mouseover',
			),
			'hide' => array(
				'effect'   => 'slide',
				'duration' => '500',
				'event'    => 'click mouseleave',
			),
		),
	),

	// FUTURE → Not in use yet, but reserved or partially implemented.
	// Use at your own risk.
	// Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
	'database'                  => '',
	'network_admin'             => true,
	'search'                    => true,
);


// ADMIN BAR LINKS → Set up custom links in the admin bar menu as external items.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
$args['admin_bar_links'][] = array(
	'id'    => 'redux-docs',
	'href'  => '//devs.redux.io/',
	'title' => __( 'Documentation', 'your-textdomain-here' ),
);

$args['admin_bar_links'][] = array(
	'id'    => 'redux-support',
	'href'  => '//github.com/ReduxFramework/redux-framework/issues',
	'title' => __( 'Support', 'your-textdomain-here' ),
);

// SOCIAL ICONS → Set up custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THESE SETTINGS IN YOUR THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
 
// Panel Intro text → before the form.
if ( ! isset( $args['global_variable'] ) || false !== $args['global_variable'] ) {
	if ( ! empty( $args['global_variable'] ) ) {
		$v = $args['global_variable'];
	} else {
		$v = str_replace( '-', '_', $args['opt_name'] );
	}

	// translators:  Panel opt_name.
	$args['intro_text'] = '<p>' . sprintf( esc_html__( 'Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $%1$s', 'your-textdomain-here' ), '<strong>' . $v . '</strong>' ) . '<p>';
} else {
	$args['intro_text'] = '<p>' . esc_html__( 'This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . esc_html__( 'This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.', 'your-textdomain-here' ) . '</p>';

Redux::set_args( $opt_name, $args );
 

/*
 * ---> START HELP TABS
 */
$help_tabs = array(
	array(
		'id'      => 'redux-help-tab-1',
		'title'   => esc_html__( 'Theme Information 1', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
	array(
		'id'      => 'redux-help-tab-2',
		'title'   => esc_html__( 'Theme Information 2', 'your-textdomain-here' ),
		'content' => '<p>' . esc_html__( 'This is the tab content, HTML is allowed.', 'your-textdomain-here' ) . '</p>',
	),
);


Redux::set_help_tab( $opt_name, $help_tabs );

// Set the help sidebar.
$content = '<p>' . esc_html__( 'This is the sidebar content, HTML is allowed.', 'your-textdomain-here' ) . '</p>';

Redux::set_help_sidebar( $opt_name, $content );

 
// -> START Basic Fields
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Basic Fields', 'your-textdomain-here' ),
		'id'               => 'basic',
		'desc'             => esc_html__( 'These are really basic fields!', 'your-textdomain-here' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);
 
// -> START Editors.
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Editors', 'your-textdomain-here' ),
		'id'               => 'editor',
		'customizer_width' => '500px',
		'icon'             => 'el el-edit',
	)
);
 
// Header Options
Redux::setSection($opt_name, array(

	'title'   => 'Header Options',
	'id'	  => 'header_opt',
	'icon'    => 'el el-th',
	'desc'    => 'header all header Options',
	'fields'  => array(

		array(
		'title'   => 'Opening Hours',
		'id'      => 'op_hr',
		'type'    => 'text',
		'desc'    => 'set your opening hours time',
		'default' => 'Saturday to tuesday - 8am to 10pm'	 
		),

		array(
		'title'   => 'Favicon', 
		'desc'    => 'here you upload your favicon image',
		'type'    => 'media', 
		'id'      => 'favicon_upload',
		'default' => array(
			'url' => get_template_directory_uri().'/images/logo.png'
	      )
		),  

		  array(
			'title'   => 'logo Upload', 
			'desc'    => 'Here Upload your logo',
			'type'    => 'media', 
			'id'      => 'logo_upload',
			'default' => array(
				'url' => get_template_directory_uri().'/images/logo-2.png'
			)
		),

		array(
			'title'   => 'Text logo', 
			'desc'    => 'Here your write your website title',
			'type'    => 'text', 
			'id'      => 'text_logo', 
		),

		array(
			'title'   => 'Email', 
			'type'    => 'text',
			'id'      => 'header_email',
			'default' =>  'info@gmail.com'
		),
		array(
			'title'   => 'Phone Number', 
			'type'    => 'text',
			'id'      => 'header_phone',
			'default' =>  '+ (88017) - 123 - 4567'
		),
		array(
			'title'   => 'Button Text', 
			'type'    => 'text',
			'id'      => 'header_btn',
			'default' =>  'Appoinment'
		),
		array(
			'title'   => 'Button url', 
			'type'    => 'text',
			'id'      => 'header_btn_url',
			'default' =>  '#'
		),
		
   )
	
)); 
 
// Social links options
Redux::setSection($opt_name, array(
		'title'  => 'Social links',
		'id' 	 => 'Social_links',
		'icon' 	 => 'el el-share',
		'fields' => array(
		array( 
			'title' => 'Facebook URL',
			'id'    => 'fb_url',
			'type'  => 'text' 
		),
		array(
			'title' => 'Twitter URL',
			'id'    => 'tw_url',
			'type'  => 'text' 
		),
		array(
			'title' => 'Google Plus URL',
			'id'    => 'ge_url',
			'type'  => 'text' 
		),
		array(
			'title' => 'Instagram URL',
			'id'    => 'ins_url',
			'type'  => 'text' 
		),
		array(
			'title' => 'Pinterest URL',
			'id'    => 'pin_url',
			'type'  => 'text' 
		)
	)
));


// Footer Options
Redux::setSection($opt_name, array(
	'title' => 'Footer Options',
	'id'    => 'Footer_Opt',
	'icon'  => 'el el-screenshot'
));
           
Redux::setSection($opt_name, array(
	'title'      => 'Footer About',
	'id'         => 'footer_about',
	'subsection' => true,
	'fields'     => array(   
		array( 
			'title'   => 'Footer Logo', 
			'id'      => 'footer_logo',
			'type'    => 'media',
			'default' => array(
				'url' => get_template_directory_uri().'/images/logo-2.png'
			)
		), 

		array(
			'title'   => 'About Description',
			'id'      => 'f_abt_desc',
			'type'    => 'editor',    
			'default' =>  'lorem ipsum sit amet edilorem ipsum dolor sit amet consectetut'
		),

		array(
			'title'   => 'Address',
			'id'      => 'f_abt_address',
			'type'    => 'textarea',
			'default' => 'lorem ipsum dolor sit amet consectelorem ipsum dolor sit amet consectetutu'
		
	    ),

		array(
			'title'   => 'Email',
			'id'      => 'f_abt_email',
			'type'    => 'text',
			'default' => 'support@gmail.com'
		),

		array(
			'title' => 'Phone',
			'id'    => 'f_abt_phone',
			'type'  => 'text', 
			'default' => '++09738743874837' 
		)
	)
		 
));
 

Redux::setSection($opt_name, array(
	'title' => 'Copyright', 
	'id'    => 'f_copy',
	'subsection' => true, 
	'fields' => array(
		array(
			'title' => 'Copyright Text', 
			'type'  => 'editor', 
			'id'    => 'copy_text',
			'default' => '@ Copyright 2010 . All Right Reserved by <a href="https://www.google.com"> Coder It</a>'
		)
	)
));
 
