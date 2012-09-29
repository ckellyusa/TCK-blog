
                </div>	
                <!-- Content Section ends here -->	
                
                <!-- Footer Section starts here -->
                <div id="footer_section">
					<div class="footer_section_cont">
						<p><?php _e('&copy; All rights reserved.', 'Destro') ?></p>
						<p class="footercredit"><?php _e('Designed by ', 'Destro') ?><a href="http://www.themealley.com/"><?php _e('ThemeAlley.Com', 'Destro') ?></a></p>    
                    </div>	        
                </div>	
                <!-- Footer Section ends here -->	
                                                              
			</div>	
			<!-- Wrapper three ends here -->	
            
          </div>
            
       </div>
            				
	</div>	
	<!-- Wrapper one ends here -->	


<?php
	 if ( of_get_option('twitter_id') ){
		 echo Destro_twitter_script('1985',of_get_option('twitter_id'),2); //Javascript output function 
	 }
?>
<?php wp_footer(); ?>
</body>
</html>