<?php

function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}
function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'organisein' ),
		'two' => __( 'Two', 'organisein' ),
		'three' => __( 'Three', 'organisein' ),
		'four' => __( 'Four', 'organisein' ),
		'five' => __( 'Five', 'organisein' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'organisein' ),
		'two' => __( 'Pancake', 'organisein' ),
		'three' => __( 'Omelette', 'organisein' ),
		'four' => __( 'Crepe', 'organisein' ),
		'five' => __( 'Waffle', 'organisein' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Basic Settings', 'organisein' ),
		'type' => 'heading'
	);
    $options[] = array(
		'name' => __( 'Add Logo', 'organisein' ),
		'placeholder' => __( 'upload logo.', 'organisein' ),
		'id' => 'organisein_logo',
		'type' => 'upload'
	);

	    $options[] = array(
		'name' => __( 'Add Ratina Logo', 'organisein' ),
		'placeholder' => __( 'upload ratina logo.', 'organisein' ),
		'id' => 'ratina_logo',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Add Footer Logo', 'organisein' ),
		'placeholder' => __( 'upload Footer logo.', 'organisein' ),
		'id' => 'footer_logo',
		'type' => 'upload'
	);

		$options[] = array(
		'name' => __( 'Open Time Add', 'organisein' ),
		'placeholder' => __( 'Open Time link', 'organisein' ),
		'id' => 'time',
		'type' => 'text'
	);
	
	
	
	
	$options[] = array(
		'name' => __( 'Phone No:', 'organisein' ),
		'placeholder' => __( 'Enter Phone No.', 'organisein' ),
		'id' => 'phone',
		'std' => '+ 0406 583 082',
		'type' => 'text'
	);

	
	$options[] = array(
		'name' => __( 'Email:', 'organisein' ),
		'placeholder' => __( 'Enter Email Address.', 'organisein' ),
		'id' => 'email',
		'std' => 'azqualitycars.605belmore@gmail.com',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Address:', 'organisein' ),
		'placeholder' => __( 'Your Address.', 'organisein' ),
		'id' => 'address',
		'type' => 'textarea'
	);

		$options[] = array(
		'name' => __( 'organisein:', 'organisein' ),
		'placeholder' => __( 'organisein link.', 'organisein' ),
		'id' => 'organisein',
		'std' => '#',
		'type' => 'text'
	);

    $options[] = array(
		'name' => __( 'Facebook:', 'organisein' ),
		'placeholder' => __( 'Enter Facebook link.', 'organisein' ),
		'id' => 'facebook',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Instagram:', 'organisein' ),
		'placeholder' => __( 'Enter instagram link', 'organisein' ),
		'id' => 'instagram',
		'std' => '#',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Youtube:', 'organisein' ),
		'placeholder' => __( 'Enter Youtube link', 'organisein' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);

 $options[] = array(
		'name' => __( 'Twitter:', 'organisein' ),
		'placeholder' => __( 'Enter Twitter link.', 'organisein' ),
		'id' => 'twitter',
		'std' => '#',
		'type' => 'text'
	);

  $options[] = array(
		'name' => __( 'Linkedin:', 'organisein' ),
		'placeholder' => __( 'Enter Linkedin link.', 'organisein' ),
		'id' => 'linkedin',
		'std' => '#',
		'type' => 'text'
	);

   $options[] = array(
		'name' => __( 'Youtube:', 'organisein' ),
		'placeholder' => __( 'Enter Youtube link.', 'organisein' ),
		'id' => 'youtube',
		'std' => '#',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Footer Text', 'organisein' ),
		'type' => 'heading'
	);

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	$options[] = array(
		'name' => __( 'Footer About Text', 'organisein' ),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'organisein' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'footer_text',
		'type' => 'editor',
		'settings' => $wp_editor_settings
	);

	return $options;
}