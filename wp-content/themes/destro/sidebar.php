
                        <div id="sidebar_section">
                            
                            <?php if(of_get_option('facebook_id') || of_get_option('twitter_id')) : ?>
                            <div id="feed_social">
                            
											
                                            
                                            <?php if(of_get_option('facebook_id')) : ?>
                                            <div id="sidebar_facebook">
                                            
                                            	<p><a href="<?php echo of_get_option('facebook_id'); ?>"><?php _e('Be A Fan On Facebook', 'Destro') ?></a></p>
                                            
                                            </div>
                                            <?php endif; ?>
                                            
                                            <?php if(of_get_option('twitter_id')) : ?>
                                            <div id="sidebar_twitter">

                                            	<p><a href="http://www.twitter.com/<?php echo of_get_option('twitter_id'); ?>"><?php _e('Follow Us On Twitter', 'Destro') ?></a></p>                                            
                                            
                                            </div>   
                                            
                                            
                                            <div id="sidebar_twitter_updates">
                                            
	                                            <div id="twitter_update_list_1985"></div>
                                            
                                            </div>   
                                            <?php endif; ?>                                         
                                            
                                                                        
                            </div>
                            <?php endif; ?>
                            
                            
                            <div id="sidebar">


                            			                 
                            
                            
                            
										<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('default') ){
																			} else { ?>
																		<div class="sidebar_widget">
																			<div class="sidebar_widget_top"></div>
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Categories', 'Destro') ?></h3>
																				<ul>
																					<?php wp_list_categories('show_count=0&title_li='); ?>
																				</ul>	
																			</div>
																			<div class="sidebar_widget_bottom"></div>
																		</div><!-- /widget -->
																		
																		<div class="sidebar_widget">
																			<div class="sidebar_widget_top"></div>
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Archives', 'Destro') ?></h3>
																				<ul>
																					<?php wp_get_archives('type=monthly'); ?>
																				</ul>
																			</div>
																			<div class="sidebar_widget_bottom"></div>
																		</div><!-- /widget -->
																		
																		<div class="sidebar_widget">
																			<div class="sidebar_widget_top"></div>
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Blogrolls', 'Destro') ?></h3>
																				<ul>
																					<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
																				</ul>
																			</div>
																			<div class="sidebar_widget_bottom"></div>
																		</div><!-- /widget -->
				
																		
																					
										<?php } ?>                           
                            
                            
                            
                            
                            </div> 
               
                        </div>	
