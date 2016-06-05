
    
    <div class="clear"></div>
	</div><!-- end .container_12 -->
	
	<div id="footer-wrap">
		<div class="grid-container">
			
			<!-- 
			<div class="grid-25">
				<ul id="footer-sidebar-1">
					<?php dynamic_sidebar("Footer Sidebar 1"); ?>
				</ul>
			</div>
			<div class="grid-25">
				<ul id="footer-sidebar-2">
					<?php dynamic_sidebar("Footer Sidebar 2"); ?>
				</ul>
			</div>
			<div class="grid-25">
				<ul id="footer-sidebar-3">
					<?php dynamic_sidebar("Footer Sidebar 3"); ?>
				</ul>
			</div>
			<div class="grid-25">
				<ul id="footer-sidebar-4">
					<?php dynamic_sidebar("Footer Sidebar 4"); ?>
				</ul>
			</div>
			-->
		
			<footer id='footer' class="grid-100"><!-- footer -->
				<!-- Include whatever footer info you like here -->  
				<?php 
					$theme_data = wp_get_theme();
				?>
				
				<p>Template design by <a href="<?php echo $theme_data->get("AuthorURI"); ?>">
                    <?php echo $theme_data->get('AuthorName'); ?></a> 
				
				<!-- Get the date and name of the site -->  
				&copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?> 
				
				<!-- Add alink to the RSS feed for this site -->
				<a href="<?php bloginfo('rss2_url'); ?>">RSS2</a>
				<?php bloginfo('description'); ?></p>
			</footer><!-- end Footer -->
		
		</div>
		
		<div class="clear"></div>
	</div>
	
	<?php wp_footer(); ?>
</body>
</html>



