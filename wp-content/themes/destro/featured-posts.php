

							<!-- Featured slider starts here -->
							<div id="featured_section">
							<div id="featured_slider">
                             	<?php 
                                    if ( of_get_option('magpro_slidernumposts') ) {
                                        $slidernumposts = of_get_option('magpro_slidernumposts');
                                    } else {
                                        $slidernumposts = '5';	
                                    }
									
									$slidercat = of_get_option('magpro_slidercat');
									
									
									$the_query = new WP_Query( 'ignore_sticky_posts=1&cat='.$slidercat.'&post_type=post&showposts='.$slidernumposts );
									
									?>
                                    
								<?php if (have_posts()) : ?>
								<div id="slides">
									<?php while ($the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="item">
										<?php if ( has_post_thumbnail()) : ?>
                                        <div class="pic">
											
											<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('Destro'); ?></a>
											
										</div>
										<?php endif; ?>
										<div class="featuredesc">
											<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php echo Destro_get_limited_string(get_the_title(), 40, '...') ?></a></h2>
											<p><?php echo Destro_get_limited_string(get_the_excerpt(), 150, '...') ?></p>
											<p><a href="<?php the_permalink() ?>" class="btn_more"><span><?php _e('Read More','Destro'); ?></span></a></p>
										</div>
										
									</div>	
									<?php endwhile; wp_reset_postdata(); ?>
								</div>
								<div id="nav"><div></div></div>
							
							
							<?php endif; ?>
							</div>
							</div>							
							<!-- Featured slider ends here -->

