<?php get_header(); ?>

	
	<div id="col-left" class="grid-25">
		<header id='header'>
			<h1 class="blog-title"><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
	    	<p class="blog-description"><?php bloginfo('description'); ?></p>
	    </header>
	    
	    
		<?php get_sidebar(); ?>
		
		
	</div><!-- end #col-left -->
	
    <div id="col-right" class="grid-75">
    
    	<div id="page-nav" class="prefix-15 grid-60 alpha omega">
    		<?php wp_nav_menu( array( 'container' => '', 'theme_location'  => "primary"  ) ); ?>
    	</div>
    
    	<div id='content'>
		    <!-- This begins displaying posts and comments. -->
		    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		        
		        <!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. 
		        Use the_title() to get the title of the post -->
		        <div class="grid-75 alpha omega post-title">
		        	<h3 class="grid-66 alpha"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		        	<h5 class="grid-10 omega"><?php edit_post_link('edit'); ?></h5>
		        </div>
		        
		        <div class="grid-75 omega post-body">
		        	<!-- Display the contents of the post -->
		        	<?php the_content("Read on!"); ?>
		        	<p class="post-tags">
		        		<?php the_tags('Tagged:',', '); ?>
		        	</p>
		        </div>
		        
		        <hr class="clear post-divider">
		        
		    <?php endwhile; else: ?>
		   		<div class="prefix-15 grid-60 alpha omega">
		   			 <!-- If there are no posts display the message below -->
			        <h3>Woops...</h3>
			        <p>Sorry, no posts we're found.</p>
		   		</div>
		       
		    <?php endif; ?>    
		
				<div id="post-nav" class="grid-75 alpha omega">
					<!-- Display page pagination -->
					<?php wp_link_pages(); ?>
				</div>
				<div>
					<?php comments_template(); ?>
				</div>
		    
		</div><!-- end content -->
    
    </div><!-- end #col-right -->
    
<?php get_footer(); ?>






