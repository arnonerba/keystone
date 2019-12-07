<?php if ( post_password_required() ) {
	return;
} ?>

<section id="comments">
	<?php if ( have_comments() ) { ?>
		<hr>
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
	<?php if ( comments_open() ) { ?>
		<hr>
		<?php comment_form(); ?>
	<?php } else if ( have_comments() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p><em>Comments are closed.</em></p>
	<?php } ?>
</section>
