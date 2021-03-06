<?php
/**
 * @package Decode
 */
?>

<?php if ( has_post_format( 'quote' ) && get_theme_mod( 'use_excerpts', false ) == false && !is_search() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'decode' ) ); ?></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'decode' ), 'after' => '</div>' ) ); ?>
		<footer class="entry-meta">
			<?php if (get_theme_mod( 'enable_comments', true ) == true ) : ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<div class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'decode' ), __( '1 Comment', 'decode' ), __( '% Comments', 'decode' ) ); ?></div>
				<?php endif; ?>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'decode' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if (get_theme_mod( 'show_tags', false ) == true ) : ?>
				<p class="tags"><?php the_tags('Tagged in: ',', '); ?></p>
			<?php endif; ?>
			<?php if (get_theme_mod( 'show_categories', false ) == true ) : ?>
				<p class="categories">Categorized in: <?php the_category(', '); ?></p>
			<?php endif; ?>
			<p class="date"><?php decode_posted_on(); ?></p>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php elseif ( has_post_format( 'link' ) && get_theme_mod( 'use_excerpts', false ) == false && !is_search() ): ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
			<div class="entry-title"><h2><?php decode_print_post_title() ?><?php if (get_theme_mod( 'link_post_title_arrow', false ) == true ) echo '<span class="link-title-arrow">&#8594;</span>'; ?></h2></div>
		</header>
		<div class="entry-content"><?php the_content( __( 'continue reading &raquo;', 'decode' ) ); ?></div>
		<footer class="entry-meta">
			<?php if (get_theme_mod( 'enable_comments', true ) == true ) : ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<div class="comments-link <?php echo get_theme_mod( 'enable_comments', '' ); ?>"><?php comments_popup_link( __( 'Leave a comment', 'decode' ), __( '1 Comment', 'decode' ), __( '% Comments', 'decode' ) ); ?></div>
				<?php endif; ?>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'decode' ), '<div class="edit-link">', '</div>' ); ?>
			<?php if (get_theme_mod( 'show_tags', false ) == true ) : ?>
				<p class="tags"><?php the_tags('Tagged in: ',', '); ?></p>
			<?php endif; ?>
			<?php if (get_theme_mod( 'show_categories', false ) == true ) : ?>
				<p class="categories">Categorized in: <?php the_category(', '); ?></p>
			<?php endif; ?>
			<p class="date"><?php decode_posted_on(); ?></p>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php elseif ( is_search() ): // Only display Excerpts for Search ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="search-entry" href="<?php the_permalink(); ?>">
			<div class="entry-title">
				<h3><?php decode_search_title_highlight(); ?></h3>
			</div>
			<div class="entry-summary">
				<?php decode_search_excerpt_highlight(); ?>
			</div><!-- .entry-summary -->
		</a>
		<?php edit_post_link( __( 'Edit', 'decode' ), '<div class="edit-link">', '</div>' ); ?>
	</article><!-- #post-<?php the_ID(); ?> -->

<?php elseif ( get_theme_mod( 'use_excerpts', false ) == true && !is_sticky() ) : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<div class="entry-title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<footer class="entry-meta">
		<a class="read-more-link" href="<?php echo get_permalink(); ?>">Read More&hellip;</a>
		<?php edit_post_link( __( 'Edit', 'decode' ), '<div class="edit-link">', '</div>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php else : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
				</a>
				<?php endif; ?>
			<div class="entry-title"><h2><?php the_title(); ?></h2></div>
		</header><!-- .entry-header -->
		<div class="entry-content"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'decode' ) ); ?></div>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'decode' ), 'after' => '</div>' ) ); ?>
		<footer class="entry-meta">
			<?php if (get_theme_mod( 'enable_comments', true ) == true ) : ?>
				<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<div class="comments-link <?php echo get_theme_mod( 'enable_comments', '' ); ?>"><?php comments_popup_link( __( 'Leave a comment', 'decode' ), __( '1 Comment', 'decode' ), __( '% Comments', 'decode' ) ); ?></div>
				<?php endif; ?>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'decode' ), '<div class="edit-link">', '</div>' ); ?>
			<?php if (get_theme_mod( 'show_tags', false ) == true ) : ?>
				<p class="tags"><?php the_tags('Tagged in: ',', '); ?></p>
			<?php endif; ?>
			<?php if (get_theme_mod( 'show_categories', false ) == true ) : ?>
				<p class="categories">Categorized in: <?php the_category(', '); ?></p>
			<?php endif; ?>
			<p class="date"><?php decode_posted_on(); ?></p>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php endif; ?>