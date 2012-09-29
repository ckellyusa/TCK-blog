<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php global $query_string; ?><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Wrapper one starts here -->
	<div id="wrapper_one">	
    
    	<div id="wrapper_two">
        
        	<div id="wrapper_four">
    
			<!-- Wrapper one starts here -->
			<div id="wrapper_three">
            
					<!-- top_menu starts here -->
					<div id="top_menu">
	
						<div id="top_menu_left">
						</div>					
						<div id="top_menu_middle">
							
							<div id="rss">
								<p><a href="<?php echo get_feed_link( 'rss2' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.png" width="35" height="35" border="0" alt="Rss" /></a></p>
							</div>
							<?php get_search_form(); ?> 				
							
							<div id="social_section">
								<ul>
									

									<?php if(of_get_option('twitter_id')) : ?>
									<li><a href="http://www.twitter.com/<?php echo of_get_option('twitter_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('redit_id')) : ?>
									<li><a href="<?php echo of_get_option('redit_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/redit.png" alt="redit" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('delicious_id')) : ?>
									<li><a href="<?php echo of_get_option('delicious_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/delicious.png" alt="delicious" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('technorati_id')) : ?>
									<li><a href="<?php echo of_get_option('technorati_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/techno.png" alt="Technorati" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('facebook_id')) : ?>
									<li><a href="<?php echo of_get_option('facebook_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt="facebook" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('stumble_id')) : ?>
									<li><a href="<?php echo of_get_option('stumble_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/stumble.png" alt="stumble" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('youtube_id')) : ?>
									<li><a href="<?php echo of_get_option('youtube_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="youtube" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('flickr_id')) : ?>
									<li><a href="<?php echo of_get_option('flickr_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" alt="flickr" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('linkedin_id')) : ?>
									<li><a href="<?php echo of_get_option('linkedin_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" alt="linkedin" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('google_id')) : ?>
									<li><a href="<?php echo of_get_option('google_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/google.png" alt="google" /></a></li>
									<?php endif; ?>

									<?php if(of_get_option('digg_id')) : ?>
									<li><a href="<?php echo of_get_option('digg_id'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/digg.png" alt="digg" /></a></li>
									<?php endif; ?>
                                    
                                    <li></li>
																	
								</ul>
							</div>										
						
						
						</div>						
						<div id="top_menu_right">
						</div>						
					
					</div>
					<!-- top_menu ends here -->	
                			
                <!-- Logo Section starts here -->
                <div id="logo_section">
                
						<?php if ( of_get_option('header_logo') ) { ?>
                        <div id="logo">
							<p class="logo_title"><a href="<?php echo home_url(); ?>/"><img src="<?php echo of_get_option('header_logo'); ?>" alt="<?php bloginfo('name'); ?>"/></a></p>
						</div>                        
                        <?php } ?>
						<?php if ( !of_get_option('header_logo') ) { ?>
                        <div id="logo">
							<p class="logo_title"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></p>
							<p class="logo_desc"><?php bloginfo('description'); ?></p>
						</div>
                        <?php } ?>
						<div id="header_ad">

						</div>
                       
        
                </div>	
                <!-- Logo Section ends here -->	 
                  
                <!-- Content Section starts here -->
                <div id="content_section">
                    <!-- Menu Section starts here -->
                    <div id="menu_section">
            			<div id="menu">
							<?php wp_nav_menu( array( 'theme_location' => 'mainmenu', 'menu_class' => 'sf-menu', 'menu_id'=>'sf-menu', 'fallback_cb' => 'Destro_wp_page_menu', 'container'=>'') ); ?>			
                        </div>
                    </div>	
                    <!-- Menu Section ends here -->	 
                    
                    <!-- Inner Content Section starts here -->
                    <div id="inner_content_section">


								<?php if( is_home() ) : ?>
                                <?php if(!of_get_option('show_magpro_slider_home') || of_get_option('show_magpro_slider_home') == 'true') : ?>                    
                                <?php get_template_part( 'featured', 'posts' ); ?>
                                <?php endif; ?>         
                                <?php endif; ?> 
                        
								<?php if( is_archive() ) : ?>
                                <?php if(of_get_option('show_magpro_slider_archive') == 'true') : ?>                    
                                <?php get_template_part( 'featured', 'posts' ); ?>
                                <?php endif; ?> 
								<?php endif; ?>
								
								<?php if( is_page() ) : ?>
                                <?php if(of_get_option('show_magpro_slider_page') == 'true') : ?>                    
                                <?php get_template_part( 'featured', 'posts' ); ?>
                                <?php endif; ?> 
								<?php endif; ?>
								
								<?php if( is_single() ) : ?>
                                <?php if(of_get_option('show_magpro_slider_single') == 'true') : ?>                    
                                <?php get_template_part( 'featured', 'posts' ); ?>
                                <?php endif; ?> 
								<?php endif; ?>
                              
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                   