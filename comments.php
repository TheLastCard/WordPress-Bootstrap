<div class="row">
	<div class="col-md-12">
		<div class="comments">
			<?php if (post_password_required()) : ?>
			<p><?php _e( 'Kommentarer er passordbeskyttet. Skriv inn ditt passord for å se kommentarer.', 'html5blank' ); ?></p>
		</div>

			<?php return; endif; ?>

		<?php if (have_comments()) : ?>

			<h2 class="well"><?php comments_number('Ingen kommentarer', '1 Kommentar', '% Kommentarer'); ?></h2>

			<ul>
				<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
			</ul>

		<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p><?php _e( 'Kommentarfeltet er stengt.', 'html5blank' ); ?></p>

		<?php endif; ?>

		<div class="well">
			<?php comment_form(); ?>
		</div><!-- /.well -->

		</div>
	</div><!-- /.col-md-12 <--></-->
</div><!-- /.row -->