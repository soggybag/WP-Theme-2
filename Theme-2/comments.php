<?php 
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) ) 
		die("Please do not load this script directly.");
	
	if ( post_password_required() ) { ?>
    	<p class="no-comments">This post is password protected. Enter password to view comments.</p>
        <?php 
			return;
	}?>
	
    	<div id="comments" class="prefix-25 grid-75 grid-parent">
        	<h3 class="prefix-25 grid-75"><?php comments_number("No comments", "1 comment", "% comments"); ?></h3>
            
            <?php if ( have_comments() ) : ?>
				<ul class="commentlist" class="grid-75">
                	<?php 
                		// wp_list_comments('avatar_size=64&type=comment'); 
                		wp_list_comments('type=comment&callback=advanced_comment');
                	?>
                </ul>
                
                <?php if ($wp_query->max_num_pages > 1) : ?>
				<div class="pagination">
                	<ul>
                    	<li class="older"><?php previous_comments_link('Older'); ?></li>
                        <li class="newer"><?php next_comments_link("Newer"); ?></li>
                    </ul>
                </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <?php if (comments_open()) : ?>
            <div id="respond">
            	<h3 class="prefix-25 grid-75">Leave a response</h3>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                	<div>
							<label class="grid-25" for="author">Name:</label>
							<div class="grid-75"><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" /></div>
                			
                        	<label class="grid-25" for="email">Email:</label>
                        	<div class="grid-75"><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" /></div>
                       		
                        	<label class="grid-25" for="url">Website:</label>
                        	<div class="grid-75"><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" /></div>
                      		
                        	<label class="grid-25" for="comment">Message:</label>
                        	<div class="grid-75"><textarea name="comment" id="comment"></textarea></div>
                       		
                        	<div class="prefix-25 grid-75">
                        		<input type="submit" class="commentsubmit" value="Submit Comment"  />
                        	</div>
                        <?php comment_id_fields(); ?>
                        <?php do_action("comment_form", $post->id); ?>
                     </div>
                 </form>
                 <p class="cancel"><?php cancel_comment_reply_link("Cancel reply"); ?></p>
              </div>
              <?php else : ?>
			  	<h3 class="prefix-25 grid-75">Comments are closed for this topic.</h3>
             <?php endif; ?>
			 </div><!-- Comments -->