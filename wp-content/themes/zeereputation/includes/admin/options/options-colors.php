<?php
	
	function themezee_get_colors_sections() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_colors_schemes",
					"name" => __('Predefined Color Schemes', 'themezee_lang'));
					
		$themezee_sections[] = array("id" => "themeZee_colors_custom",
					"name" => __('Custom Colors', 'themezee_lang'));
		
		return $themezee_sections;
	}
	
	function themezee_get_colors_settings() {
	
		$color_styles = array(
			'blue.css' => __('Blue', 'themezee_lang'),
			'brown.css' => __('Brown', 'themezee_lang'),
			'green.css' => __('Green', 'themezee_lang'),
			'grey.css' => __('Grey', 'themezee_lang'),
			'orange.css' => __('Orange', 'themezee_lang'),
			'purple.css' => __('Purple', 'themezee_lang'),
			'standard.css' => __('Standard', 'themezee_lang'),
			'teal.css' => __('Teal', 'themezee_lang'));
		
		$themezee_settings = array();
	
		### COLOR SETTINGS
		#######################################################################################
							
		$themezee_settings[] = array("name" => "Set Color Scheme",
						"desc" => __('Please select your color scheme here.', 'themezee_lang'),
						"id" => "themeZee_stylesheet",
						"std" => "standard.css",
						"type" => "select",
						'choices' => $color_styles,
						"section" => "themeZee_colors_schemes"
						);
		
		$themezee_settings[] = array("name" => __('Active Custom Colors?', 'themezee_lang'),
						"desc" => __('Check this to activate the Custom Color Function.', 'themezee_lang'),
						"id" => "themeZee_color_activate",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_colors_custom");	
						
		$themezee_settings[] = array("name" => __('Color', 'themezee_lang'),
						"desc" => __("Select the color of your theme here.", 'themezee_lang'),
						"id" => "themeZee_colors_full",
						"std" => "dd2222",
						"type" => "colorpicker",
						"section" => "themeZee_colors_custom");		
		
		return $themezee_settings;
	}

?>