<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Buooy_Sticky_Header
 * @author    Buooy <ahoy@buooy.com>
 * @license   GPL-2.0+
 * @link      http://buooy.com
 * @copyright 2014 Buooy
 */
 
Class Sticky_Header_View{
	
	private $sticky_header  = '';
	private $bsh_social_media = array();

	public function __construct(){
	
		$this->sticky_header = get_option('sticky_header');
		//print_r($this->sticky_header);
		if( !empty($this->sticky_header['bsh-choose-social-media']) ){
			foreach( $this->sticky_header['bsh-choose-social-media'] as $ss => $show ){
				if($show) array_push($this->bsh_social_media, $ss);
			}
			$this->bsh_social_media = array_reverse($this->bsh_social_media);
		}
	}
	
	/* 	Build sticky header
	 * 	This javascript will build the sticky header
	 *
	 *	Args:
	 *	$args['post_title']
	 *
	 *	Filters:
	 *	bsh_container_class
	 *	bsh_content_class
	 *	bsh_title_class
	 *	bsh_social_container_class
	 *	bsh_social_indv_class
	 */
	public function build_sticky_header($args){
		
		extract($args);
		
		$bsh_container_class = '';
		$bsh_container_class = apply_filters( 'bsh_container_class', $bsh_container_class );
		$bsh_content_class = '';
		$bsh_content_class = apply_filters( 'bsh_content_class', $bsh_content_class );
		$bsh_title_class = '';
		$bsh_title_class = apply_filters( 'bsh_title_class', $bsh_title_class );
		
		$sticky_header = 	"<div id='bsh' class='bsh-container ".$bsh_container_class."'>";
		$sticky_header .=		"<div class='bsh-content ".$bsh_content_class."'>";
		
		$sticky_header .=			"<div class='bsh-title ".$bsh_title_class."'><h1>".$post_title."</h1></div>";
		
		// Adds the different social media plugins
		$sticky_header .=				$this->build_ss_buttons($this->bsh_social_media);
		
		$sticky_header .=		"</div>";
		$sticky_header .= 	"</div>";
		
		return $sticky_header;
	}
	
	/*
	 *	Builds the social media share
	 */
	public function build_ss_buttons( $bsh_social_media ){
		$bsh_social_container_class = '';
		$bsh_social_container_class = apply_filters( 'bsh_social_container_class', $bsh_social_container_class );
		
		$ss_buttons = 	"<div class='bsh-ss-container ".$bsh_social_container_class."'>";
		foreach( $bsh_social_media as $social_media ){
			$ss_buttons .=	$this->build_ss_button($social_media);
		}
		$ss_buttons .= 	"</div>";
		
		return $ss_buttons;
	}
	// Build Individual Social Media Shares
	public function build_ss_button( $social_media ){
		$bsh_social_indv_class = '';
		$bsh_social_indv_class= apply_filters( 'bsh_social_indv_class', $bsh_social_indv_class );
			
		$ss_btn = '<div class="bsh-ss-button bsh-'.$social_media.' '.$bsh_social_indv_class.'">';
		$ss_btn .= '<span class="bsh-ss-button-text"><img src="'.plugins_url( 'assets/img/'.$social_media.'.png' , dirname(__FILE__) ).'" alt="Share on '.$social_media.'">&nbsp;'.$this->sticky_header['bsh-'.$social_media.'-share-text'].'</span>';
		$ss_btn .= '</div>';
		return $ss_btn;
	}
	
	/*
	 *	Displays the sticky header on the post
	 */
	public function display_sticky_header(){
	
		// checks if the current template is post or not
		if( is_single() ){
			
			$postid = url_to_postid( "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
		
			$args['post_title'] = get_the_title( $postid);
			echo $this->build_sticky_header($args);
		}
		
	}
	
	/* All JS APIs for social sharing */
	public function pull_ss_scripts(){
		foreach( $this->bsh_social_media as $ss ){
			if( $ss == 'facebook' ){	echo $this->pull_fb_script();	}
		}
	}
	public function pull_fb_script(){
		return "<script>
			  window.fbAsyncInit = function() {
				FB.init({
				  appId      : bsh_facebook_app_id,
				  xfbml      : true,
				  version    : 'v2.0'
				});
			  };

			  (function(d, s, id){
				 var js, fjs = d.getElementsByTagName(s)[0];
				 if (d.getElementById(id)) {return;}
				 js = d.createElement(s); js.id = id;
				 js.src = '//connect.facebook.net/en_US/sdk.js';
				 fjs.parentNode.insertBefore(js, fjs);
			   }(document, 'script', 'facebook-jssdk'));
			</script>";
	}
	
	/* Append Location */
	public function bsh_variables(){
	
		$bsh_variables = 	"<script>";
		$bsh_variables .= 	"var bsh_append_location		='".$this->sticky_header['bsh-append-to']."';";
		$bsh_variables .= 	"var bsh_show_position			='".$this->sticky_header['bsh-show-after']."';";
		$bsh_variables .= 	"var bsh_facebook_app_id		='".$this->sticky_header['bsh-facebook-app-id']."';";
		$bsh_variables .= 	"var bsh_twitter_screen_name	='".$this->sticky_header['bsh-twitter-screen-name']."';";
		$bsh_variables .=	"</script>";
		echo $bsh_variables;
	}
}

// Does everything you need to do here
$Sticky_Header_View = new Sticky_Header_View;
add_action('wp_head', array($Sticky_Header_View,'bsh_variables'));
add_action('wp_head', array($Sticky_Header_View,'pull_ss_scripts'));
add_action('wp_head', array($Sticky_Header_View,'display_sticky_header'));
?>
