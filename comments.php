<?php if ( post_password_required() ) {
	return;
} ?>

<section id="comments">
	<?php if ( have_comments() ) { ?>
		<?php $comments_number = get_comments_number(); ?>
		<h2>
			<?php if ( $comments_number === '1' ) {
				echo 'One Reply to ' . '"' . get_the_title() . '"';
			} else {
				echo $comments_number . ' Replies to ' . '"' . get_the_title() . '"';
			} ?>
		</h2>
		<ul>
			<?php wp_list_comments(); ?>
		</ul>
		<?php the_comments_pagination(); ?>
	<?php } ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p>Comments are closed.</p>
	<?php } ?>
	<?php comment_form(); ?>
</section>
