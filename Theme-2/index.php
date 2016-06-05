<?php get_header(); ?>


<div id="col-left" class="grid-25">
    <header id='header'>
        <h1 class="blog-title"><a href="<?php echo home_url()  ?>/"><?php bloginfo('name'); ?></a></h1>
        <p class="blog-description">
            <?php bloginfo( 'description'); ?>
        </p>
    </header>
    <?php get_sidebar(); ?>
</div>
<!-- end #col-left -->


<div id="col-right" class="grid-75 grid-parent">

    <!--<div id="page-nav" class="prefix-15 grid-60 alpha omega">
    		<?php wp_nav_menu( array( 'container' => '', 'theme_location'  => "primary" ) ); ?>
    	</div>-->

    <div id='content'>
        <!-- This begins displaying posts and comments. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post">
            <div class="grid-25 alpha post-meta">
                <!-- Diplsay the date and category for a post. -->
                <ul>
                    <li class='post-date'>
                        <?php the_time( 'M d'); ?>
                    </li>
                    <li class=''>
                        <?php the_time( 'Y'); ?>
                    </li>
                    <li>
                        <?php the_category( '</li><li>'); ?></li>
                    <!-- <?php the_tags('<li>','</li><li>','</li>'); ?> -->
                    <li>
                        <?php comments_popup_link(); ?>
                    </li>
                    <?php edit_post_link( 'edit', '<li>', '</li>'); ?>
                </ul>
            </div>

            <div class="post-right grid-75">
                <!-- Diplay the title of a post. Use the_permalink() to get the URL to that post. Use the_title() to get the title of the post -->
                <div class="post-title">
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                </div>

                <div <?php post_class("post-body"); ?>>
                    <!-- Display the contents of the post -->
                    <?php the_content( "Read on!"); ?>
                    <p class="post-tags clear">
                        <?php the_tags( 'Tagged:', ', '); ?>
                    </p>
                    <?php wp_link_pages(); ?>
                </div>
            </div>
        </div>

        <?php comments_template(); ?>
        <?php // comment_form(); ?>

        <hr class="clear post-divider">

        <?php endwhile; else: ?>

        <div class="prefix-25 grid-75">
            <!-- If there are no posts display the message below -->
            <h3>Woops...</h3>
            <p>Sorry, no posts we're found.</p>
        </div>

        <?php endif; ?>

        <div id="post-nav" class="prefix-25 grid-75 grid-parent">
            <!-- Display the Next and Prev post links -->
            <?php // posts_nav_link(); ?>
            <div id="post-prev" class="grid-25">
                <?php previous_posts_link( "Newer Posts" ); ?>
            </div>
            <div id="post-next" class="grid-25 push-50">
                <?php next_posts_link( "Older Posts" ); ?>
            </div>
        </div>

    </div>
    <!-- end content -->

</div>
<!-- end #col-right -->

<?php get_footer(); ?>