<?php get_header(); ?>

								

                        
                        	             
                        <!-- Main Content Section starts here -->
                        <div id="main_content_section">
                

										<?php if (have_posts()) : ?>
											<?php $count = 0; while (have_posts()) : the_post(); $count++; ?>
												<!-- Actual Post starts here -->
												<div <?php post_class('actual_post') ?> id="post-<?php the_ID(); ?>">
													<div class="actual_post_title">
														<h2><?php the_title(); ?></h2>
													</div>
													<?php if (function_exists('the_ratings') && of_get_option('show_ratings_stand') == 'true'): ?>
                                                    <div class="actual_post_ratings">
                                                    	<?php the_ratings(); ?>
													</div>   
                                                    <?php endif; ?>                                                     
													<div class="actual_post_author">
														<div class="actual_post_posted"><?php _e('Posted by :','Destro'); ?><span><?php the_author() ?></span> <?php _e('On :','Destro'); ?> <span><?php the_time(get_option( 'date_format' )) ?></span></div>
														<div class="actual_post_comments"><?php comments_number( '0', '1', '%' ); ?></div>
													</div>
                                					<?php if(!of_get_option('show_ratings_ctags') || of_get_option('show_ratings_ctags') == 'true') : ?>                    
													<div class="metadata">
														<p>
															<span class="label"><?php _e('Category:', 'Destro') ?></span>
															<span class="text"><?php the_category(', ') ?></span>
														</p>
														<?php the_tags('<p><span class="label">'.__('Tags:','Destro').'</span><span class="text">', ', ', '</span></p>'); ?>
														
													</div><!-- /metadata -->
                                                    <?php endif; ?>
												
													<div class="post_entry">
														
														<div class="entry">
															<?php the_content(__('<span>Continue Reading >></span>', 'Destro')); ?>
															<div class="clear"></div>
															<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Destro' ) . '</span>', 'after' => '</div>' ) ); ?>																				
														</div>

													
													</div>
                                                    
                                                    <div class="single_navi">
                                                    	<div class="single_navi_prev">
                                                        	
                                                          	<?php 
																
																if (is_attachment()){ 
																	previous_image_link( false, '&#171; '.__('Previous Image' , 'Destro').'' ); 
																} else { 
																	previous_post_link("<p><span>".__('Previous Post' , 'Destro')."</span></p><p> %link</p>");
																} 
															?>

                                                        </div>
                                                        <div class="single_navi_next">
															
                                                          	<?php 
																
																if (is_attachment()){ 
																	next_image_link( false, ''.__('Next Image' , 'Destro').' &#187;' ); 
																} else { 
																	next_post_link("<p><span>".__('Next Post' , 'Destro')."</span></p><p> %link</p>");
																} 
															?>                                                            

                                                        </div>
                                                    </div>
												</div>
												<!-- Actual Post ends here -->		
												<?php comments_template(); ?>
												<?php endwhile; ?>
												<?php endif; ?>
                
                
                        </div>	
                        <!-- Main Content Section ends here -->

                        <!-- Sidebar Section starts here -->
                        <?php get_sidebar(); ?> 	
                        <!-- Sidebar Section ends here -->





                    </div>	
                    <!-- Inner Content Section ends here -->
                    
           			<?php get_footer(); ?>
							
								
									

							
								
									
