<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article itemtype="http://schema.org/BlogPosting"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		 <h1 itemprop="headline" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Link to','zweig'); ?> <?php the_title_attribute(); ?>" itemprop="url"><?php the_title(); ?></a></h1>

		 <!-- Display the Post's Content in a div box. -->
		 <div class="entry" itemprop="articleBody">
		   <?php the_content(); ?>
		 </div>

	 </article>

	 <!-- CALL THE COMMENTS TEMPLATE -->
	 <div id="comments">
	 <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
	?>
	</div>


	 <!-- Stop The Loop (but note the "else:" - see next line). -->
	 <?php endwhile; else: ?>

	 <!-- The very first "if" tested to see if there were any Posts to -->
	 <!-- display.  This "else" part tells what do if there weren't any. -->
	 <p><?php _e('Sorry, no posts matched your criteria.','zweig'); ?></p>

	 <!-- REALLY stop The Loop. -->

<?php endif; ?>