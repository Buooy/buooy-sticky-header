<?php 
/* These are all the option sections */
// ACTUAL DECLARATION OF SECTIONS
// General Settings
$this->sections[] = array(
	'title'     => __('General Settings', 'redux-framework-demo'),
	'desc'      => __('', 'redux-framework-demo'),
	'icon'      => 'el-icon-cogs',
	'fields'	=> array(
		// Essential Settings
		array(
			'id'        => 'bsh-essential-settings',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-start',
			'style'     => 'info',
			'title'     => __('Essential Settings', 'redux-framework-demo')
		),
		// Show After
		array(
			'id'            => 'bsh-show-after',
			'type'          => 'slider',
			'title'         => __('Show After', 'redux-framework-demo'),
			'subtitle'      => __('After the user has scrolled down this number of pixels, the plugin will fade in.', 'redux-framework-demo'),
			'desc'          => __('Slider description. Min: 0, max: 500, step: 5, slider 1 default value: 100, slider 2 default value: 300', 'redux-framework-demo'),
			'default'       => 300,
			'min'           => 0,
			'step'          => 5,
			'max'           => 1000,
			'display_value' => 'text'
		),
		// Append To
		array(
			'id'            => 'bsh-append-to',
			'type'          => 'text',
			'title'         => __('Element to Append To', 'redux-framework-demo'),
			'subtitle'      => __('Provide the element ID (preferred), class or tag.<br>Sticky header will attach directly after that element', 'redux-framework-demo'),
			'default'       => 'body'
		),
		// More options
		array(
			'id'        => 'bsh-go-pro',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-unlock',
			'style'     => 'critical',
			'title'     => __('Want more options?<br>
								<a href="http://aaronstevensonlee.me/buooy-sticky-header" target="_blank">Upgrade to our Pro version (coming soon)!</a>', 'redux-framework-demo')
		),
	)
);

// Styling Settings
$this->sections[] = array(
	'title'     => __('Styling Settings', 'redux-framework-demo'),
	'desc'      => __('', 'redux-framework-demo'),
	'icon'      => 'el-icon-brush',
	'fields'	=> array(
		// Include default CSS
		array(
			'id'        => 'bsh-include-default-css',
			'type'      => 'checkbox',
			'title'     => __('Include default stylesheet', 'redux-framework-demo'),
			'desc'      => __('Uncheck this to remove the stylesheet.<br>WARNING: removing the stylesheet means you must code and add your own stylesheet. Uncheck only if you know what you are doing', 'redux-framework-demo'),
			'default'   => '1'// 1 = on | 0 = off
		),
		// More options
		array(
			'id'        => 'bsh-go-pro',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-unlock',
			'style'     => 'critical',
			'title'     => __('Want more styling options?<br>
								<a href="http://aaronstevensonlee.me/buooy-sticky-header" target="_blank">Upgrade to our Pro version (coming soon)!</a>', 'redux-framework-demo')
		),
	)
);

// Social Media
$this->sections[] = array(
	'title'     => __('Social Media', 'redux-framework-demo'),
	'desc'      => __('', 'redux-framework-demo'),
	'icon'      => 'el-icon-facebook',
	// 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
	'fields'    => array(
		//Choose Social Media to show
		array(
			'id'        => 'bsh-choose-social-media',
			'type'      => 'checkbox',
			'title'     => __('Choose Social Media', 'redux-framework-demo'),
			'subtitle'  => __('Choose which social media will appear in the sticky header', 'redux-framework-demo'),
			'options'   => array(
				'facebook' => '<i class="el-icon-facebook icon-small"></i>&nbsp;Facebook', 
				'twitter' => '<i class="el-icon-twitter icon-small"></i>&nbsp;Twitter'
			),
			'default'   => array(
				'facebook' => '1', 
				'twitter' => '1'
			)
		),
		// Facebook Settings
		array(
			'id'        => 'bsh-facebook-settings',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-facebook',
			'style'     => 'info',
			'title'     => __('Facebook Settings', 'redux-framework-demo')
		),
		array(
			'id'        => 'bsh-facebook-app-id',
			'type'      => 'text',
			'title'     => __('Enter your Facebook App ID here', 'redux-framework-demo'),
			'subtitle'  => __('This must be a alpha numeric only.', 'redux-framework-demo'),
			'desc'      => __('The App ID can be retrieved from <a href="https://developers.facebook.com/apps/" target="_blank">https://developers.facebook.com/apps/</a>', 'redux-framework-demo'),
			'validate'  => 'no_special_chars',
			'default'   => 'My Facebook ID here'
		),
		array(
			'id'        => 'bsh-facebook-share-text',
			'type'      => 'text',
			'title'     => __('Enter your Facebook share text here', 'redux-framework-demo'),
			'subtitle'  => __('', 'redux-framework-demo'),
			'desc'      => __('', 'redux-framework-demo'),
			'validate'  => '',
			'default'   => 'Share'
		),
		
		// Twitter Settings
		array(
			'id'        => 'bsh-twitter-settings',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-twitter',
			'style'     => 'warning',
			'title'     => __('Twitter Settings', 'redux-framework-demo')
		),
		array(
			'id'        => 'bsh-twitter-screen-name',
			'type'      => 'text',
			'title'     => __('Enter your Twitter screen name here', 'redux-framework-demo'),
			'subtitle'  => __('', 'redux-framework-demo'),
			'desc'      => __('', 'redux-framework-demo'),
			'validate'  => '',
			'default'   => 'My Twitter screen name here'
		),
		array(
			'id'        => 'bsh-twitter-share-text',
			'type'      => 'text',
			'title'     => __('Enter your Twitter share text here', 'redux-framework-demo'),
			'subtitle'  => __('', 'redux-framework-demo'),
			'desc'      => __('', 'redux-framework-demo'),
			'validate'  => '',
			'default'   => 'Tweet'
		),
		// More Social Media
		array(
			'id'        => 'bsh-go-pro',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-unlock',
			'style'     => 'critical',
			'title'     => __('Want more Social Media including&nbsp;
								<i class=" el-icon-googleplus"></i>&nbsp;
								<i class=" el-icon-linkedin"></i>&nbsp;
								<i class=" el-icon-pinterest"></i>&nbsp;
								<i class=" el-icon-wordpress"></i>&nbsp;
								<i class=" el-icon-blogger"></i>&nbsp;
								?<br>
								<a href="http://aaronstevensonlee.me/buooy-sticky-header" target="_blank">Upgrade to our Pro version (coming soon)!</a>', 'redux-framework-demo')
		),
	)
);
global $current_user;
get_currentuserinfo();
$pro_description = 	'<h1>Hi '.$current_user->display_name.'!</h1>';
$pro_description .= '<h4>We just really want to start by thanking you for using Buooy Sticky Header and we are working day and night to build better and more robust plugins that will help you and your organisation grow further in strength.</h4>';
$pro_description .= '<p>If you have loved what you are using so far and want more, we are coming up with a Pro version really soon!</p>';
$pro_description .= '<p>Learn more about the Pro version at <a target="_blank" href="http://aaronstevensonlee.me/buooy-sticky-header/">http://aaronstevensonlee.me/buooy-sticky-header/</a> and remember to subscribe to our newsletter for the latest updates.</p>';

$this->sections[] = array(
	'title'     => __('Upgrade to Pro', 'redux-framework-demo'),
	'desc'      => __($pro_description, 'redux-framework-demo'),
	'icon'      => ' el-icon-unlock',
	'fields'    => array(
		// More options
		array(
			'id'        => 'bsh-go-pro',
			'type'      => 'info',
			'notice'    => true,
			'icon'		=> 'el-icon-unlock',
			'style'     => 'critical',
			'title'     => __('If you want more options, we would love to help!<br>
								<a href="http://aaronstevensonlee.me/buooy-sticky-header" target="_blank">Upgrade to our Pro version (coming soon)!</a>', 'redux-framework-demo')
		)
	)
);

/*
// SAMPLE DECLARATION OF SECTIONS
$this->sections[] = array(
	'title'     => __('Home Settings', 'redux-framework-demo'),
	'desc'      => __('Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo'),
	'icon'      => 'el-icon-home',
	// 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
	'fields'    => array(

		array(
			'id'        => 'opt-web-fonts',
			'type'      => 'media',
			'title'     => __('Web Fonts', 'redux-framework-demo'),
			'compiler'  => 'true',
			'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc'      => __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
			'subtitle'  => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			'hint'      => array(
				//'title'     => '',
				'content'   => 'This is a <b>hint</b> tool-tip for the webFonts field.<br/><br/>Add any HTML based text you like here.',
			)
		),
		array(
			'id'        => 'section-media-start',
			'type'      => 'section',
			'title'     => __('Media Options', 'redux-framework-demo'),
			'subtitle'  => __('With the "section" field you can create indent option sections.', 'redux-framework-demo'),
			'indent'    => true // Indent all options below until the next 'section' option is set.
		),
		array(
			'id'        => 'opt-media',
			'type'      => 'media',
			'url'       => true,
			'title'     => __('Media w/ URL', 'redux-framework-demo'),
			'compiler'  => 'true',
			//'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
			'desc'      => __('Basic media uploader with disabled URL input field.', 'redux-framework-demo'),
			'subtitle'  => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
			'default'   => array('url' => 'http://s.wordpress.org/style/images/codeispoetry.png'),
			//'hint'      => array(
			//    'title'     => 'Hint Title',
			//    'content'   => 'This is a <b>hint</b> for the media field with a Title.',
			//)
		),
		array(
			'id'        => 'section-media-end',
			'type'      => 'section',
			'indent'    => false // Indent all options below until the next 'section' option is set.
		),
		array(
			'id'        => 'media-no-url',
			'type'      => 'media',
			'title'     => __('Media w/o URL', 'redux-framework-demo'),
			'desc'      => __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo'),
			'subtitle'  => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
		),
		array(
			'id'        => 'media-no-preview',
			'type'      => 'media',
			'preview'   => false,
			'title'     => __('Media No Preview', 'redux-framework-demo'),
			'desc'      => __('This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'redux-framework-demo'),
			'subtitle'  => __('Upload any media using the WordPress native uploader', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-gallery',
			'type'      => 'gallery',
			'title'     => __('Add/Edit Gallery', 'so-panels'),
			'subtitle'  => __('Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'so-panels'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'            => 'opt-slider-label',
			'type'          => 'slider',
			'title'         => __('Slider Example 1', 'redux-framework-demo'),
			'subtitle'      => __('This slider displays the value as a label.', 'redux-framework-demo'),
			'desc'          => __('Slider description. Min: 1, max: 500, step: 1, default value: 250', 'redux-framework-demo'),
			'default'       => 250,
			'min'           => 1,
			'step'          => 1,
			'max'           => 500,
			'display_value' => 'label'
		),
		array(
			'id'            => 'opt-slider-text',
			'type'          => 'slider',
			'title'         => __('Slider Example 2 with Steps (5)', 'redux-framework-demo'),
			'subtitle'      => __('This example displays the value in a text box', 'redux-framework-demo'),
			'desc'          => __('Slider description. Min: 0, max: 300, step: 5, default value: 75', 'redux-framework-demo'),
			'default'       => 75,
			'min'           => 0,
			'step'          => 5,
			'max'           => 300,
			'display_value' => 'text'
		),
		array(
			'id'            => 'opt-slider-select',
			'type'          => 'slider',
			'title'         => __('Slider Example 3 with two sliders', 'redux-framework-demo'),
			'subtitle'      => __('This example displays the values in select boxes', 'redux-framework-demo'),
			'desc'          => __('Slider description. Min: 0, max: 500, step: 5, slider 1 default value: 100, slider 2 default value: 300', 'redux-framework-demo'),
			'default'       => array(
				1 => 100,
				2 => 300,
			),
			'min'           => 0,
			'step'          => 5,
			'max'           => '500',
			'display_value' => 'select',
			'handles'       => 2,
		),
		array(
			'id'            => 'opt-slider-float',
			'type'          => 'slider',
			'title'         => __('Slider Example 4 with float values', 'redux-framework-demo'),
			'subtitle'      => __('This example displays float values', 'redux-framework-demo'),
			'desc'          => __('Slider description. Min: 0, max: 1, step: .1, default value: .5', 'redux-framework-demo'),
			'default'       => .5,
			'min'           => 0,
			'step'          => .1,
			'max'           => 1,
			'resolution'    => 0.1,
			'display_value' => 'text'
		),
		array(
			'id'        => 'opt-spinner',
			'type'      => 'spinner',
			'title'     => __('JQuery UI Spinner Example 1', 'redux-framework-demo'),
			'desc'      => __('JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'redux-framework-demo'),
			'default'   => '40',
			'min'       => '20',
			'step'      => '20',
			'max'       => '100',
		),
		array(
			'id'        => 'switch-on',
			'type'      => 'switch',
			'title'     => __('Switch On', 'redux-framework-demo'),
			'subtitle'  => __('Look, it\'s on!', 'redux-framework-demo'),
			'default'   => true,
		),
		array(
			'id'        => 'switch-off',
			'type'      => 'switch',
			'title'     => __('Switch Off', 'redux-framework-demo'),
			'subtitle'  => __('Look, it\'s on!', 'redux-framework-demo'),
			'default'   => false,
		),
		array(
			'id'        => 'switch-custom',
			'type'      => 'switch',
			'title'     => __('Switch - Custom Titles', 'redux-framework-demo'),
			'subtitle'  => __('Look, it\'s on! Also hidden child elements!', 'redux-framework-demo'),
			'default'   => 0,
			'on'        => 'Enabled',
			'off'       => 'Disabled',
		),
		array(
			'id'        => 'switch-fold',
			'type'      => 'switch',
			'required'  => array('switch-custom', '=', '1'),
			'title'     => __('Switch - With Hidden Items (NESTED!)', 'redux-framework-demo'),
			'subtitle'  => __('Also called a "fold" parent.', 'redux-framework-demo'),
			'desc'      => __('Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'redux-framework-demo'),
			'default'   => false,
		),
		array(
			'id'        => 'opt-patterns',
			'type'      => 'image_select',
			'tiles'     => true,
			'required'  => array('switch-fold', 'equals', '0'),
			'title'     => __('Images Option (with pattern=>true)', 'redux-framework-demo'),
			'subtitle'  => __('Select a background pattern.', 'redux-framework-demo'),
			'default'   => 0,
			'options'   => $sample_patterns
		,
		),
		array(
			'id'        => 'opt-homepage-layout',
			'type'      => 'sorter',
			'title'     => 'Layout Manager Advanced',
			'subtitle'  => 'You can add multiple drop areas or columns.',
			'compiler'  => 'true',
			'options'   => array(
				'enabled'   => array(
					'highlights'    => 'Highlights',
					'slider'        => 'Slider',
					'staticpage'    => 'Static Page',
					'services'      => 'Services'
				),
				'disabled'  => array(
				),
				'backup'    => array(
				),
			),
			'limits' => array(
				'disabled'  => 1,
				'backup'    => 2,
			),
		),
		
		array(
			'id'        => 'opt-homepage-layout-2',
			'type'      => 'sorter',
			'title'     => 'Homepage Layout Manager',
			'desc'      => 'Organize how you want the layout to appear on the homepage',
			'compiler'  => 'true',
			'options'   => array(
				'disabled'  => array(
					'highlights'    => 'Highlights',
					'slider'        => 'Slider',
				),
				'enabled'   => array(
					'staticpage'    => 'Static Page',
					'services'      => 'Services'
				),
			),
		),
		array(
			'id'        => 'opt-slides',
			'type'      => 'slides',
			'title'     => __('Slides Options', 'redux-framework-demo'),
			'subtitle'  => __('Unlimited slides with drag and drop sortings.', 'redux-framework-demo'),
			'desc'      => __('This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo'),
			'placeholder'   => array(
				'title'         => __('This is a title', 'redux-framework-demo'),
				'description'   => __('Description Here', 'redux-framework-demo'),
				'url'           => __('Give us a link!', 'redux-framework-demo'),
			),
		),
		array(
			'id'        => 'opt-presets',
			'type'      => 'image_select',
			'presets'   => true,
			'title'     => __('Preset', 'redux-framework-demo'),
			'subtitle'  => __('This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo'),
			'default'   => 0,
			'desc'      => __('This allows you to set a json string or array to override multiple preferences in your theme.', 'redux-framework-demo'),
			'options'   => array(
				'1'         => array('alt' => 'Preset 1', 'img' => ReduxFramework::$_url . '../sample/presets/preset1.png', 'presets' => array('switch-on' => 1, 'switch-off' => 1, 'switch-custom' => 1)),
				'2'         => array('alt' => 'Preset 2', 'img' => ReduxFramework::$_url . '../sample/presets/preset2.png', 'presets' => '{"slider1":"1", "slider2":"0", "switch-on":"0"}'),
			),
		),
		array(
			'id'            => 'opt-typography',
			'type'          => 'typography',
			'title'         => __('Typography', 'redux-framework-demo'),
			//'compiler'      => true,  // Use if you want to hook in your own CSS compiler
			'google'        => true,    // Disable google fonts. Won't work if you haven't defined your google api key
			'font-backup'   => true,    // Select a backup non-google font in addition to a google font
			//'font-style'    => false, // Includes font-style and weight. Can use font-style or font-weight to declare
			//'subsets'       => false, // Only appears if google is true and subsets not set to false
			//'font-size'     => false,
			//'line-height'   => false,
			//'word-spacing'  => true,  // Defaults to false
			//'letter-spacing'=> true,  // Defaults to false
			//'color'         => false,
			//'preview'       => false, // Disable the previewer
			'all_styles'    => true,    // Enable all Google Font style/weight variations to be added to the page
			'output'        => array('h2.site-description'), // An array of CSS selectors to apply this font style to dynamically
			'compiler'      => array('h2.site-description-compiler'), // An array of CSS selectors to apply this font style to dynamically
			'units'         => 'px', // Defaults to px
			'subtitle'      => __('Typography option with each property can be called individually.', 'redux-framework-demo'),
			'default'       => array(
				'color'         => '#333',
				'font-style'    => '700',
				'font-family'   => 'Abel',
				'google'        => true,
				'font-size'     => '33px',
				'line-height'   => '40px'),
			'preview' => array('text' => 'ooga booga'),
		),
	),
);

$this->sections[] = array(
	'type' => 'divide',
);

$this->sections[] = array(
	'icon'      => 'el-icon-cogs',
	'title'     => __('General Settings', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-layout',
			'type'      => 'image_select',
			'compiler'  => true,
			'title'     => __('Main Layout', 'redux-framework-demo'),
			'subtitle'  => __('Select main content and sidebar alignment. Choose between 1, 2 or 3 column layout.', 'redux-framework-demo'),
			'options'   => array(
				'1' => array('alt' => '1 Column',       'img' => ReduxFramework::$_url . 'assets/img/1col.png'),
				'2' => array('alt' => '2 Column Left',  'img' => ReduxFramework::$_url . 'assets/img/2cl.png'),
				'3' => array('alt' => '2 Column Right', 'img' => ReduxFramework::$_url . 'assets/img/2cr.png'),
				'4' => array('alt' => '3 Column Middle','img' => ReduxFramework::$_url . 'assets/img/3cm.png'),
				'5' => array('alt' => '3 Column Left',  'img' => ReduxFramework::$_url . 'assets/img/3cl.png'),
				'6' => array('alt' => '3 Column Right', 'img' => ReduxFramework::$_url . 'assets/img/3cr.png')
			),
			'default'   => '2'
		),
		array(
			'id'        => 'opt-textarea',
			'type'      => 'textarea',
			'required'  => array('layout', 'equals', '1'),
			'title'     => __('Tracking Code', 'redux-framework-demo'),
			'subtitle'  => __('Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'redux-framework-demo'),
			'validate'  => 'js',
			'desc'      => 'Validate that it\'s javascript!',
		),
		array(
			'id'        => 'opt-ace-editor-css',
			'type'      => 'ace_editor',
			'title'     => __('CSS Code', 'redux-framework-demo'),
			'subtitle'  => __('Paste your CSS code here.', 'redux-framework-demo'),
			'mode'      => 'css',
			'theme'     => 'monokai',
			'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
			'default'   => "#header{\nmargin: 0 auto;\n}"
		),
		array(
			'id'        => 'opt-ace-editor-js',
			'type'      => 'ace_editor',
			'title'     => __('JS Code', 'redux-framework-demo'),
			'subtitle'  => __('Paste your JS code here.', 'redux-framework-demo'),
			'mode'      => 'javascript',
			'theme'     => 'chrome',
			'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
			'default'   => "jQuery(document).ready(function(){\n\n});"
		),
		array(
			'id'        => 'opt-ace-editor-php',
			'type'      => 'ace_editor',
			'title'     => __('PHP Code', 'redux-framework-demo'),
			'subtitle'  => __('Paste your PHP code here.', 'redux-framework-demo'),
			'mode'      => 'php',
			'theme'     => 'chrome',
			'desc'      => 'Possible modes can be found at <a href="http://ace.c9.io" target="_blank">http://ace.c9.io/</a>.',
			'default'   => '<?php\nisset ( $redux ) ? true : false;\n?>'
		),
		array(
			'id'        => 'opt-editor',
			'type'      => 'editor',
			'title'     => __('Footer Text', 'redux-framework-demo'),
			'subtitle'  => __('You can use the following shortcodes in your footer text: [wp-url] [site-url] [theme-url] [login-url] [logout-url] [site-title] [site-tagline] [current-year]', 'redux-framework-demo'),
			'default'   => 'Powered by Redux Framework.',
		),
		array(
			'id'        => 'password',
			'type'      => 'password',
			'username'  => true,
			'title'     => 'SMTP Account',
			//'placeholder' => array('username' => 'Enter your Username')
		)
	)
);

$this->sections[] = array(
	'icon'      => 'el-icon-website',
	'title'     => __('Styling Options', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-select-stylesheet',
			'type'      => 'select',
			'title'     => __('Theme Stylesheet', 'redux-framework-demo'),
			'subtitle'  => __('Select your themes alternative color scheme.', 'redux-framework-demo'),
			'options'   => array('default.css' => 'default.css', 'color1.css' => 'color1.css'),
			'default'   => 'default.css',
		),
		array(
			'id'        => 'opt-color-background',
			'type'      => 'color',
			'output'    => array('.site-title'),
			'title'     => __('Body Background Color', 'redux-framework-demo'),
			'subtitle'  => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
			'default'   => '#FFFFFF',
			'validate'  => 'color',
		),
		array(
			'id'        => 'opt-background',
			'type'      => 'background',
			'output'    => array('body'),
			'title'     => __('Body Background', 'redux-framework-demo'),
			'subtitle'  => __('Body background with image, color, etc.', 'redux-framework-demo'),
			//'default'   => '#FFFFFF',
		),
		array(
			'id'        => 'opt-color-footer',
			'type'      => 'color',
			'title'     => __('Footer Background Color', 'redux-framework-demo'),
			'subtitle'  => __('Pick a background color for the footer (default: #dd9933).', 'redux-framework-demo'),
			'default'   => '#dd9933',
			'validate'  => 'color',
		),
		array(
			'id'        => 'opt-color-rgba',
			'type'      => 'color_rgba',
			'title'     => __('Color RGBA - BETA', 'redux-framework-demo'),
			'subtitle'  => __('Gives you the RGBA color. Still quite experimental. Use at your own risk.', 'redux-framework-demo'),
			'default'   => array('color' => '#dd9933', 'alpha' => '1.0'),
			'output'    => array('body'),
			'mode'      => 'background',
			'validate'  => 'colorrgba',
		),
		array(
			'id'        => 'opt-color-header',
			'type'      => 'color_gradient',
			'title'     => __('Header Gradient Color Option', 'redux-framework-demo'),
			'subtitle'  => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default'   => array(
				'from'      => '#1e73be', 
				'to'        => '#00897e'
			)
		),
		array(
			'id'        => 'opt-link-color',
			'type'      => 'link_color',
			'title'     => __('Links Color Option', 'redux-framework-demo'),
			'subtitle'  => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			//'regular'   => false, // Disable Regular Color
			//'hover'     => false, // Disable Hover Color
			//'active'    => false, // Disable Active Color
			//'visited'   => true,  // Enable Visited Color
			'default'   => array(
				'regular'   => '#aaa',
				'hover'     => '#bbb',
				'active'    => '#ccc',
			)
		),
		array(
			'id'        => 'opt-header-border',
			'type'      => 'border',
			'title'     => __('Header Border Option', 'redux-framework-demo'),
			'subtitle'  => __('Only color validation can be done on this field type', 'redux-framework-demo'),
			'output'    => array('.site-header'), // An array of CSS selectors to apply this font style to
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default'   => array(
				'border-color'  => '#1e73be', 
				'border-style'  => 'solid', 
				'border-top'    => '3px', 
				'border-right'  => '3px', 
				'border-bottom' => '3px', 
				'border-left'   => '3px'
			)
		),
		array(
			'id'            => 'opt-spacing',
			'type'          => 'spacing',
			'output'        => array('.site-header'), // An array of CSS selectors to apply this font style to
			'mode'          => 'margin',    // absolute, padding, margin, defaults to padding
			'all'           => true,        // Have one field that applies to all
			//'top'           => false,     // Disable the top
			//'right'         => false,     // Disable the right
			//'bottom'        => false,     // Disable the bottom
			//'left'          => false,     // Disable the left
			//'units'         => 'em',      // You can specify a unit value. Possible: px, em, %
			//'units_extended'=> 'true',    // Allow users to select any type of unit
			//'display_units' => 'false',   // Set to false to hide the units if the units are specified
			'title'         => __('Padding/Margin Option', 'redux-framework-demo'),
			'subtitle'      => __('Allow your users to choose the spacing or margin they want.', 'redux-framework-demo'),
			'desc'          => __('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'redux-framework-demo'),
			'default'       => array(
				'margin-top'    => '1px', 
				'margin-right'  => '2px', 
				'margin-bottom' => '3px', 
				'margin-left'   => '4px'
			)
		),
		array(
			'id'                => 'opt-dimensions',
			'type'              => 'dimensions',
			'units'             => 'em',    // You can specify a unit value. Possible: px, em, %
			'units_extended'    => 'true',  // Allow users to select any type of unit
			'title'             => __('Dimensions (Width/Height) Option', 'redux-framework-demo'),
			'subtitle'          => __('Allow your users to choose width, height, and/or unit.', 'redux-framework-demo'),
			'desc'              => __('You can enable or disable any piece of this field. Width, Height, or Units.', 'redux-framework-demo'),
			'default'           => array(
				'width'     => 200, 
				'height'    => 100,
			)
		),
		array(
			'id'        => 'opt-typography-body',
			'type'      => 'typography',
			'title'     => __('Body Font', 'redux-framework-demo'),
			'subtitle'  => __('Specify the body font properties.', 'redux-framework-demo'),
			'google'    => true,
			'default'   => array(
				'color'         => '#dd9933',
				'font-size'     => '30px',
				'font-family'   => 'Arial,Helvetica,sans-serif',
				'font-weight'   => 'Normal',
			),
		),
		array(
			'id'        => 'opt-custom-css',
			'type'      => 'textarea',
			'title'     => __('Custom CSS', 'redux-framework-demo'),
			'subtitle'  => __('Quickly add some CSS to your theme by adding it to this block.', 'redux-framework-demo'),
			'desc'      => __('This field is even CSS validated!', 'redux-framework-demo'),
			'validate'  => 'css',
		),
		array(
			'id'        => 'opt-custom-html',
			'type'      => 'textarea',
			'title'     => __('Custom HTML', 'redux-framework-demo'),
			'subtitle'  => __('Just like a text box widget.', 'redux-framework-demo'),
			'desc'      => __('This field is even HTML validated!', 'redux-framework-demo'),
			'validate'  => 'html',
		),
	)
);

// **
// *  Note here I used a 'heading' in the sections array construct
// *  This allows you to use a different title on your options page
// * instead of reusing the 'title' value.  This can be done on any
// * section - kp
// *
$this->sections[] = array(
	'icon'      => 'el-icon-bullhorn',
	'title'     => __('Field Validation', 'redux-framework-demo'),
	'heading'   => __('Validate ALL fields within Redux.', 'redux-framework-demo'),
	'desc'      => __('<p class="description">This is the Description. Again HTML is allowed2</p>', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-text-email',
			'type'      => 'text',
			'title'     => __('Text Option - Email Validated', 'redux-framework-demo'),
			'subtitle'  => __('This is a little space under the Field Title in the Options table, additional info is good in here.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'email',
			'msg'       => 'custom error message',
			'default'   => 'test@test.com',
//                        'text_hint' => array(
//                            'title'     => 'Valid Email Required!',
//                            'content'   => 'This field required a valid email address.'
//                        )
		),
		array(
			'id'        => 'opt-text-post-type',
			'type'      => 'text',
			'title'     => __('Text Option with Data Attributes', 'redux-framework-demo'),
			'subtitle'  => __('You can also pass an options array if you want. Set the default to whatever you like.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data'      => 'post_type',
		),
		array(
			'id'        => 'opt-multi-text',
			'type'      => 'multi_text',
			'title'     => __('Multi Text Option - Color Validated', 'redux-framework-demo'),
			'validate'  => 'color',
			'subtitle'  => __('If you enter an invalid color it will be removed. Try using the text "blue" as a color.  ;)', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-text-url',
			'type'      => 'text',
			'title'     => __('Text Option - URL Validated', 'redux-framework-demo'),
			'subtitle'  => __('This must be a URL.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'url',
			'default'   => 'http://reduxframework.com',
//                        'text_hint' => array(
//                            'title'     => '',
//                            'content'   => 'Please enter a valid <strong>URL</strong> in this field.'
//                        )
		),
		array(
			'id'        => 'opt-text-numeric',
			'type'      => 'text',
			'title'     => __('Text Option - Numeric Validated', 'redux-framework-demo'),
			'subtitle'  => __('This must be numeric.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'numeric',
			'default'   => '0',
		),
		array(
			'id'        => 'opt-text-comma-numeric',
			'type'      => 'text',
			'title'     => __('Text Option - Comma Numeric Validated', 'redux-framework-demo'),
			'subtitle'  => __('This must be a comma separated string of numerical values.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'comma_numeric',
			'default'   => '0',
		),
		array(
			'id'        => 'opt-text-no-special-chars',
			'type'      => 'text',
			'title'     => __('Text Option - No Special Chars Validated', 'redux-framework-demo'),
			'subtitle'  => __('This must be a alpha numeric only.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'no_special_chars',
			'default'   => '0'
		),
		array(
			'id'        => 'opt-text-str_replace',
			'type'      => 'text',
			'title'     => __('Text Option - Str Replace Validated', 'redux-framework-demo'),
			'subtitle'  => __('You decide.', 'redux-framework-demo'),
			'desc'      => __('This field\'s default value was changed by a filter hook!', 'redux-framework-demo'),
			'validate'  => 'str_replace',
			'str'       => array(
				'search'        => ' ', 
				'replacement'   => 'thisisaspace'
			),
			'default'   => 'This is the default.'
		),
		array(
			'id'        => 'opt-text-preg_replace',
			'type'      => 'text',
			'title'     => __('Text Option - Preg Replace Validated', 'redux-framework-demo'),
			'subtitle'  => __('You decide.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'preg_replace',
			'preg'      => array(
				'pattern'       => '/[^a-zA-Z_ -]/s', 
				'replacement'   => 'no numbers'
			 ),
			'default'   => '0'
		),
		array(
			'id'                => 'opt-text-custom_validate',
			'type'              => 'text',
			'title'             => __('Text Option - Custom Callback Validated', 'redux-framework-demo'),
			'subtitle'          => __('You decide.', 'redux-framework-demo'),
			'desc'              => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate_callback' => 'redux_validate_callback_function',
			'default'           => '0'
		),
		array(
			'id'        => 'opt-textarea-no-html',
			'type'      => 'textarea',
			'title'     => __('Textarea Option - No HTML Validated', 'redux-framework-demo'),
			'subtitle'  => __('All HTML will be stripped', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'no_html',
			'default'   => 'No HTML is allowed in here.'
		),
		array(
			'id'        => 'opt-textarea-html',
			'type'      => 'textarea',
			'title'     => __('Textarea Option - HTML Validated', 'redux-framework-demo'),
			'subtitle'  => __('HTML Allowed (wp_kses)', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
			'default'   => 'HTML is allowed in here.'
		),
		array(
			'id'            => 'opt-textarea-some-html',
			'type'          => 'textarea',
			'title'         => __('Textarea Option - HTML Validated Custom', 'redux-framework-demo'),
			'subtitle'      => __('Custom HTML Allowed (wp_kses)', 'redux-framework-demo'),
			'desc'          => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'      => 'html_custom',
			'default'       => '<p>Some HTML is allowed in here.</p>',
			'allowed_html'  => array('') //see http://codex.wordpress.org/Function_Reference/wp_kses
		),
		array(
			'id'        => 'opt-textarea-js',
			'type'      => 'textarea',
			'title'     => __('Textarea Option - JS Validated', 'redux-framework-demo'),
			'subtitle'  => __('JS will be escaped', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'validate'  => 'js'
		),
	)
);

$this->sections[] = array(
	'icon'      => 'el-icon-check',
	'title'     => __('Radio/Checkbox Fields', 'redux-framework-demo'),
	'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-checkbox',
			'type'      => 'checkbox',
			'title'     => __('Checkbox Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'default'   => '1'// 1 = on | 0 = off
		),
		array(
			'id'        => 'opt-multi-check',
			'type'      => 'checkbox',
			'title'     => __('Multi Checkbox Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			//Must provide key => value pairs for multi checkbox options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			),
			
			//See how std has changed? you also don't need to specify opts that are 0.
			'default'   => array(
				'1' => '1', 
				'2' => '0', 
				'3' => '0'
			)
		),
		array(
			'id'        => 'opt-checkbox-data',
			'type'      => 'checkbox',
			'title'     => __('Multi Checkbox Option (with menu data)', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data'      => 'menu'
		),
		array(
			'id'        => 'opt-checkbox-sidebar',
			'type'      => 'checkbox',
			'title'     => __('Multi Checkbox Option (with sidebar data)', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data'      => 'sidebars'
		),
		array(
			'id'        => 'opt-radio',
			'type'      => 'radio',
			'title'     => __('Radio Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			 //Must provide key => value pairs for radio options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			),
			'default'   => '2'
		),
		array(
			'id'        => 'opt-radio-data',
			'type'      => 'radio',
			'title'     => __('Multi Checkbox Option (with menu data)', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'data'      => 'menu'
		),
		array(
			'id'        => 'opt-image-select',
			'type'      => 'image_select',
			'title'     => __('Images Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			//Must provide key => value(array:title|img) pairs for radio options
			'options'   => array(
				'1' => array('title' => 'Opt 1', 'img' => 'images/align-none.png'),
				'2' => array('title' => 'Opt 2', 'img' => 'images/align-left.png'),
				'3' => array('title' => 'Opt 3', 'img' => 'images/align-center.png'),
				'4' => array('title' => 'Opt 4', 'img' => 'images/align-right.png')
			), 
			'default'   => '2'
		),
		array(
			'id'        => 'opt-image-select-layout',
			'type'      => 'image_select',
			'title'     => __('Images Option for Layout', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo'),
			
			//Must provide key => value(array:title|img) pairs for radio options
			'options'   => array(
				'1' => array('alt' => '1 Column',        'img' => ReduxFramework::$_url . 'assets/img/1col.png'),
				'2' => array('alt' => '2 Column Left',   'img' => ReduxFramework::$_url . 'assets/img/2cl.png'),
				'3' => array('alt' => '2 Column Right',  'img' => ReduxFramework::$_url . 'assets/img/2cr.png'),
				'4' => array('alt' => '3 Column Middle', 'img' => ReduxFramework::$_url . 'assets/img/3cm.png'),
				'5' => array('alt' => '3 Column Left',   'img' => ReduxFramework::$_url . 'assets/img/3cl.png'),
				'6' => array('alt' => '3 Column Right',  'img' => ReduxFramework::$_url . 'assets/img/3cr.png')
			), 
			'default' => '2'
		),
		array(
			'id'        => 'opt-sortable',
			'type'      => 'sortable',
			'title'     => __('Sortable Text Option', 'redux-framework-demo'),
			'subtitle'  => __('Define and reorder these however you want.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options'   => array(
				'si1' => 'Item 1',
				'si2' => 'Item 2',
				'si3' => 'Item 3',
			)
		),
		array(
			'id'        => 'opt-check-sortable',
			'type'      => 'sortable',
			'mode'      => 'checkbox', // checkbox or text
			'title'     => __('Sortable Text Option', 'redux-framework-demo'),
			'subtitle'  => __('Define and reorder these however you want.', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'options'   => array(
				'si1' => 'Item 1',
				'si2' => 'Item 2',
				'si3' => 'Item 3',
			)
		),
	)
);

$this->sections[] = array(
	'icon'      => 'el-icon-list-alt',
	'title'     => __('Select Fields', 'redux-framework-demo'),
	'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-select',
			'type'      => 'select',
			'title'     => __('Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			//Must provide key => value pairs for select options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			),
			'default'   => '2'
		),
		array(
			'id'        => 'opt-multi-select',
			'type'      => 'select',
			'multi'     => true,
			'title'     => __('Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			//Must provide key => value pairs for radio options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			), 
			'required'  => array('select', 'equals', array('1', '3')),
			'default'   => array('2', '3')
		),
		array(
			'id'        => 'opt-select-image',
			'type'      => 'select_image',
			'title'     => __('Select Image', 'redux-framework-demo'),
			'subtitle'  => __('A preview of the selected image will appear underneath the select box.', 'redux-framework-demo'),
			'options'   => $sample_patterns,
			// Alternatively
			//'options'   => Array(
			//                'img_name' => 'img_path'
			//             )
			'default' => 'tree_bark.png',
		),
		array(
			'id'    => 'opt-info',
			'type'  => 'info',
			'desc'  => __('You can easily add a variety of data from WordPress.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-categories',
			'type'      => 'select',
			'data'      => 'categories',
			'title'     => __('Categories Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-categories-multi',
			'type'      => 'select',
			'data'      => 'categories',
			'multi'     => true,
			'title'     => __('Categories Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-pages',
			'type'      => 'select',
			'data'      => 'pages',
			'title'     => __('Pages Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-pages',
			'type'      => 'select',
			'data'      => 'pages',
			'multi'     => true,
			'title'     => __('Pages Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-tags',
			'type'      => 'select',
			'data'      => 'tags',
			'title'     => __('Tags Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-tags',
			'type'      => 'select',
			'data'      => 'tags',
			'multi'     => true,
			'title'     => __('Tags Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-menus',
			'type'      => 'select',
			'data'      => 'menus',
			'title'     => __('Menus Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-menus',
			'type'      => 'select',
			'data'      => 'menu',
			'multi'     => true,
			'title'     => __('Menus Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-post-type',
			'type'      => 'select',
			'data'      => 'post_type',
			'title'     => __('Post Type Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-post-type',
			'type'      => 'select',
			'data'      => 'post_type',
			'multi'     => true,
			'title'     => __('Post Type Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-sortable',
			'type'      => 'select',
			'data'      => 'post_type',
			'multi'     => true,
			'sortable'  => true,
			'title'     => __('Post Type Multi Select Option + Sortable', 'redux-framework-demo'),
			'subtitle'  => __('This field also has sortable enabled!', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-posts',
			'type'      => 'select',
			'data'      => 'post',
			'title'     => __('Posts Select Option2', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-multi-select-posts',
			'type'      => 'select',
			'data'      => 'post',
			'multi'     => true,
			'title'     => __('Posts Multi Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-roles',
			'type'      => 'select',
			'data'      => 'roles',
			'title'     => __('User Role Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-capabilities',
			'type'      => 'select',
			'data'      => 'capabilities',
			'multi'     => true,
			'title'     => __('Capabilities Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
		),
		array(
			'id'        => 'opt-select-elusive',
			'type'      => 'select',
			'data'      => 'elusive-icons',
			'title'     => __('Elusive Icons Select Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('Here\'s a list of all the elusive icons by name and icon.', 'redux-framework-demo'),
		),
	)
);

$theme_info  = '<div class="redux-framework-section-desc">';
$theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . __('<strong>Theme URL:</strong> ', 'redux-framework-demo') . '<a href="' . $this->theme->get('ThemeURI') . '" target="_blank">' . $this->theme->get('ThemeURI') . '</a></p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-author">' . __('<strong>Author:</strong> ', 'redux-framework-demo') . $this->theme->get('Author') . '</p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-version">' . __('<strong>Version:</strong> ', 'redux-framework-demo') . $this->theme->get('Version') . '</p>';
$theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get('Description') . '</p>';
$tabs = $this->theme->get('Tags');
if (!empty($tabs)) {
	$theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . __('<strong>Tags:</strong> ', 'redux-framework-demo') . implode(', ', $tabs) . '</p>';
}
$theme_info .= '</div>';

if (file_exists(dirname(__FILE__) . '/../README.md')) {
	$this->sections['theme_docs'] = array(
		'icon'      => 'el-icon-list-alt',
		'title'     => __('Documentation', 'redux-framework-demo'),
		'fields'    => array(
			array(
				'id'        => '17',
				'type'      => 'raw',
				'markdown'  => true,
				'content'   => file_get_contents(dirname(__FILE__) . '/../README.md')
			),
		),
	);
}

// You can append a new section at any time.
$this->sections[] = array(
	'icon'      => 'el-icon-eye-open',
	'title'     => __('Additional Fields', 'redux-framework-demo'),
	'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-datepicker',
			'type'      => 'date',
			'title'     => __('Date Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo')
		),
		array(
			'id'    => 'opt-divide',
			'type'  => 'divide'
		),
		array(
			'id'        => 'opt-button-set',
			'type'      => 'button_set',
			'title'     => __('Button Set Option', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			
			//Must provide key => value pairs for radio options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			), 
			'default'   => '2'
		),
		array(
			'id'        => 'opt-button-set-multi',
			'type'      => 'button_set',
			'title'     => __('Button Set, Multi Select', 'redux-framework-demo'),
			'subtitle'  => __('No validation can be done on this field type', 'redux-framework-demo'),
			'desc'      => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
			'multi'     => true,
			
			//Must provide key => value pairs for radio options
			'options'   => array(
				'1' => 'Opt 1', 
				'2' => 'Opt 2', 
				'3' => 'Opt 3'
			), 
			'default'   => array('2', '3')
		),
		array(
			'id'        => 'opt-info-field',
			'type'      => 'info',
			'required'  => array('18', 'equals', array('1', '2')),
			'desc'      => __('This is the info field, if you want to break sections up.', 'redux-framework-demo')
		),
		array(
			'id'    => 'opt-info-warning',
			'type'  => 'info',
			'style' => 'warning',
			'title' => __('This is a title.', 'redux-framework-demo'),
			'desc'  => __('This is an info field with the warning style applied and a header.', 'redux-framework-demo')
		),
		array(
			'id'    => 'opt-info-success',
			'type'  => 'info',
			'style' => 'success',
			'icon'  => 'el-icon-info-sign',
			'title' => __('This is a title.', 'redux-framework-demo'),
			'desc'  => __('This is an info field with the success style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'    => 'opt-info-critical',
			'type'  => 'info',
			'style' => 'critical',
			'icon'  => 'el-icon-info-sign',
			'title' => __('This is a title.', 'redux-framework-demo'),
			'desc'  => __('This is an info field with the critical style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-raw_info',
			'type'      => 'info',
			'required'  => array('18', 'equals', array('1', '2')),
			'raw_html'  => true,
			'desc'      => $sampleHTML,
		),
		array(
			'id'        => 'opt-info-normal',
			'type'      => 'info',
			'notice'    => true,
			'title'     => __('This is a title.', 'redux-framework-demo'),
			'desc'      => __('This is an info notice field with the normal style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-notice-info',
			'type'      => 'info',
			'notice'    => true,
			'style'     => 'info',
			'title'     => __('This is a title.', 'redux-framework-demo'),
			'desc'      => __('This is an info notice field with the info style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-notice-warning',
			'type'      => 'info',
			'notice'    => true,
			'style'     => 'warning',
			'icon'      => 'el-icon-info-sign',
			'title'     => __('This is a title.', 'redux-framework-demo'),
			'desc'      => __('This is an info notice field with the warning style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-notice-success',
			'type'      => 'info',
			'notice'    => true,
			'style'     => 'success',
			'icon'      => 'el-icon-info-sign',
			'title'     => __('This is a title.', 'redux-framework-demo'),
			'desc'      => __('This is an info notice field with the success style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-notice-critical',
			'type'      => 'info',
			'notice'    => true,
			'style'     => 'critical',
			'icon'      => 'el-icon-info-sign',
			'title'     => __('This is a title.', 'redux-framework-demo'),
			'desc'      => __('This is an notice field with the critical style applied, a header and an icon.', 'redux-framework-demo')
		),
		array(
			'id'        => 'opt-custom-callback',
			'type'      => 'callback',
			'title'     => __('Custom Field Callback', 'redux-framework-demo'),
			'subtitle'  => __('This is a completely unique field type', 'redux-framework-demo'),
			'desc'      => __('This is created with a callback function, so anything goes in this field. Make sure to define the function though.', 'redux-framework-demo'),
			'callback'  => 'redux_my_custom_field'
		),
	)
);

$this->sections[] = array(
	'title'     => __('Import / Export', 'redux-framework-demo'),
	'desc'      => __('Import and Export your Redux Framework settings from file, text or URL.', 'redux-framework-demo'),
	'icon'      => 'el-icon-refresh',
	'fields'    => array(
		array(
			'id'            => 'opt-import-export',
			'type'          => 'import_export',
			'title'         => 'Import Export',
			'subtitle'      => 'Save and restore your Redux options',
			'full_width'    => false,
		),
	),
);                     
		
$this->sections[] = array(
	'type' => 'divide',
);

$this->sections[] = array(
	'icon'      => 'el-icon-info-sign',
	'title'     => __('Theme Information', 'redux-framework-demo'),
	'desc'      => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo'),
	'fields'    => array(
		array(
			'id'        => 'opt-raw-info',
			'type'      => 'raw',
			'content'   => $item_info,
		)
	),
);

if (file_exists(trailingslashit(dirname(__FILE__)) . 'README.html')) {
	$tabs['docs'] = array(
		'icon'      => 'el-icon-book',
		'title'     => __('Documentation', 'redux-framework-demo'),
		'content'   => nl2br(file_get_contents(trailingslashit(dirname(__FILE__)) . 'README.html'))
	);
}
*/
?>
