<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<article itemtype="http://schema.org/BlogPosting"  id="post-<?php the_ID(); ?>" <?php post_class('category'); ?>>

		 <h1 itemprop="headline" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Link to','zweig'); ?> <?php the_title_attribute(); ?>" itemprop="url"><?php the_title(); ?></a></h1>

		 <h2 class="post-date">
		 	<?php _e('Posted in','zweig');?> <?php the_category(', '); ?> <?php _e('on the','zweig');?> <?php the_time('jS F, Y') ?> <?php _e('by','zweig');?> <?php the_author_posts_link() ?>
		 </h2>

		 <!-- Display the Post's Content in a div box. -->
		 <div class="entry" itemprop="articleBody">
		   <?php the_excerpt(); ?>
		 </div>

	 </article>

	 <!-- Stop The Loop (but note the "else:" - see next line). -->
	 <?php endwhile; else: ?>

	 <!-- The very first "if" tested to see if there were any Posts to -->
	 <!-- display.  This "else" part tells what do if there weren't any. -->
	 <p><?php _e('Sorry, no posts matched your criteria.','zweig'); ?></p>

	 <!-- REALLY stop The Loop. -->

<?php endif; ?>