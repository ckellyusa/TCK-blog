<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = 'Destro';
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$magpro_slider_start = array("false" => __("No", 'Destro' ),"true" => __("Yes", 'Destro' ));
	
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/admin/images/';
		
	$options = array();
		
		
							
	$options[] = array( "name" => "country1",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Adsense", 'Destro' ),
							"type" => "groupcontaineropen");	

				$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
										"desc" => __("Upgrade to Pro version to enable adsense.", 'Destro' ),
										"type" => "tabheading");						

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Select a Skin", 'Destro' ),
							"type" => "groupcontaineropen");	

				$options[] = array( "name" => __("Select a Skin", 'Destro' ),
										"desc" => __("Images for skins.", 'Destro' ),
										"id" => "skin_style",
										"std" => "destro",
										"type" => "images",
										"options" => array(
											'destro' => $imagepath . 'destro.png',
											'azurite' => $imagepath . 'azurite.png',
											'blaze' => $imagepath . 'blaze.png',
											'mead' => $imagepath . 'mead.png',
											'kawfee' => $imagepath . 'kawfee.png')
										);						

										
		$options[] = array( "type" => "groupcontainerclose");		
		
		
					
		
	$options[] = array( "type" => "innertabclose");	


	$options[] = array( "name" => "country2",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Social Settings", 'Destro' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Twitter", 'Destro' ),
										"desc" => __("Enter your twitter id", 'Destro' ),
										"id" => "twitter_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Redditt", 'Destro' ),
										"desc" => __("Enter your reddit url", 'Destro' ),
										"id" => "redit_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Delicious", 'Destro' ),
										"desc" => __("Enter your delicious url", 'Destro' ),
										"id" => "delicious_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Technorati", 'Destro' ),
										"desc" => __("Enter your technorati url", 'Destro' ),
										"id" => "technorati_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Facebook", 'Destro' ),
										"desc" => __("Enter your facebook url", 'Destro' ),
										"id" => "facebook_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("StumbleUpon", 'Destro' ),
										"desc" => __("Enter your stumbleupon url", 'Destro' ),
										"id" => "stumble_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Youtube", 'Destro' ),
										"desc" => __("Enter your youtube url", 'Destro' ),
										"id" => "youtube_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Flickr", 'Destro' ),
										"desc" => __("Enter your flickr url", 'Destro' ),
										"id" => "flickr_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("LinkedIn", 'Destro' ),
										"desc" => __("Enter your linkedin url", 'Destro' ),
										"id" => "linkedin_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Google", 'Destro' ),
										"desc" => __("Enter your google url", 'Destro' ),
										"id" => "google_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Digg", 'Destro' ),
										"desc" => __("Enter your digg url", 'Destro' ),
										"id" => "digg_id",
										"std" => "",
										"type" => "text");

							
		$options[] = array( "type" => "groupcontainerclose");											
														
	$options[] = array( "type" => "innertabclose");
	
	
	$options[] = array( "name" => "country3",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Slider Settings", 'Destro' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
										"desc" => __("Only one slider is available in Lite version. Upgrade to Pro version to get 6 additional sliders.", 'Destro' ),
										"type" => "tabheading");

					$options[] = array( "name" => __("Select Category", 'Destro' ),
										"desc" => __("Posts from this category will be shown in the slider.", 'Destro' ),
										"id" => "magpro_slidercat",
										"std" => "true",
										"type" => "select",
										"options" => $options_categories);

					$options[] = array( "name" => __("Show slider on homepage", 'Destro' ),
										"desc" => __("Select yes if you want to show slider on homepage.", 'Destro' ),
										"id" => "show_magpro_slider_home",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);
										
					$options[] = array( "name" => __("Show slider on Single post page", 'Destro' ),
										"desc" => __("Select yes if you want to show slider on single post page.", 'Destro' ),
										"id" => "show_magpro_slider_single",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show slider on Pages", 'Destro' ),
										"desc" => __("Select yes if you want to show slider on pages.", 'Destro' ),
										"id" => "show_magpro_slider_page",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show slider on Category Pages", 'Destro' ),
										"desc" => __("Select yes if you want to show slider on category pages.", 'Destro' ),
										"id" => "show_magpro_slider_archive",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);																														
										
					$options[] = array( "name" => __("How many slides?", 'Destro' ),
										"desc" => __("Enter a number. Ex: 5 or 7", 'Destro' ),
										"id" => "magpro_slidernumposts",
										"std" => "5",
										"class" => "mini",
										"type" => "text");										
			

										
		$options[] = array( "type" => "groupcontainerclose");							
						
	$options[] = array( "type" => "innertabclose");	
	
								

	$options[] = array( "name" => "country4",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
							"desc" => __("Only standard blog layout is available in Lite version. Upgrade to Pro version to get 3 additional magazine layouts.", 'Destro' ),
							"type" => "tabheading");				

	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country6",
						"type" => "innertabopen");

		$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
							"desc" => __("MagPro layout is available only in PRO version. Upgrade now.", 'Destro' ),
							"type" => "tabheading");									
						
	$options[] = array( "type" => "innertabclose");		
	
	$options[] = array( "name" => "country7",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
							"desc" => __("Mag layout is available only in PRO version. Upgrade now.", 'Destro' ),
							"type" => "tabheading");	
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country8",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
							"desc" => __("MagLite layout is available only in PRO version. Upgrade now.", 'Destro' ),
							"type" => "tabheading");	
																
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country9",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Standard Blog Layout Settings", 'Destro' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Show ratings?", 'Destro' ),
										"desc" => __("Select yes if you want to show ratings.", 'Destro' ),
										"id" => "show_ratings_stand",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);		
										
					$options[] = array( "name" => __("Show category/tags?", 'Destro' ),
										"desc" => __("Select yes if you want to show category/tags.", 'Destro' ),
										"id" => "show_ratings_ctags",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);																		
										
		$options[] = array( "type" => "groupcontainerclose");		

	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country5",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Sidebar Settings", 'Destro' ),
							"type" => "groupcontaineropen");	

			$options[] = array( "name" => __("Upgrade to Pro", 'Destro' ),
								"desc" => __("These options are available only in PRO version. Upgrade now.", 'Destro' ),
								"type" => "tabheading");		
																											
										
		$options[] = array( "type" => "groupcontainerclose");	
								
	$options[] = array( "type" => "innertabclose");		
	
		
							
						

							
		
	return $options;
}