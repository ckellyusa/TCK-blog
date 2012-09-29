<?php get_header(); ?>

								

                        
                        	             
                        <!-- Main Content Section starts here -->
                        <div id="main_content_section">
                

										<?php if (have_posts()) : ?>
											<?php $count = 0; while (have_posts()) : the_post(); $count++; ?>
												<!-- Actual Post starts here -->
												<div <?php post_class('actual_post') ?> id="post-<?php the_ID(); ?>">
													<div class="actual_post_title_page">
														<h2><?php the_title(); ?></h2>
													</div>
												
													<div class="post_entry">

														<div class="entry">
															<?php the_content(__('<span>Continue Reading >></span>', 'Destro')); ?>
															<div class="clear"></div>
															<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Destro' ) . '</span>', 'after' => '</div>' ) ); ?>																				
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
									

							
								
									
