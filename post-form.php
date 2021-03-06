<?php
/**
 * Front-end post form.
 *
 */
?>



<?php $post_format = isset( $_GET['p'] ) ? $_GET['p'] : 'status'; ?>
<div id="postbox">

		<div class="avatar">
			<?php echo get_avatar( get_current_user_id(), 48 ); ?>
		</div>

		<div class="inputarea">

			<form id="new_post" name="new_post" method="post" action="<?php echo site_url(); ?>/">

				<div id="postbox-type-post" class="post-input <?php if ( 'post' == $post_format || 'standard' == $post_format ) echo ' selected'; ?>">

                    <label for="posttitle">Title:</label>

					<input type="text" name="posttitle" id="posttitle" value=""
						onfocus="this.value=(this.value=='<?php echo esc_js( __( 'Post Title', 'p2' ) ); ?>') ? '' : this.value;"
						onblur="this.value=(this.value=='') ? '<?php echo esc_js( __( 'Post Title', 'p2' ) ); ?>' : this.value;" />

				</div>

				<?php if ( current_user_can( 'upload_files' ) ): ?>
				    <div id="media-buttons" class="hide-if-no-js">
					    <?php p2_media_buttons(); ?>
				    </div>
				<?php endif; ?>


				<textarea class="expand70-200" name="posttext" id="posttext" rows="4" cols="60"></textarea>

				<label class="post-error" for="posttext" id="posttext_error"></label>

				<div class="postrow">
					<input id="tags" name="tags" type="text" autocomplete="off"
						value="<?php esc_attr_e( 'Tag it', 'p2' ); ?>"
						onfocus="this.value=(this.value=='<?php echo esc_js( __( 'Tag it', 'p2' ) ); ?>') ? '' : this.value;"
						onblur="this.value=(this.value=='') ? '<?php echo esc_js( __( 'Tag it', 'p2' ) ); ?>' : this.value;" />
					<input id="submit" type="submit" value="<?php esc_attr_e( 'Post it', 'p2' ); ?>" />
				</div>

				<input type="hidden" name="post_format" id="post_format" value="<?php echo esc_attr( $post_format ); ?>" />

				<span class="progress spinner-post-new" id="ajaxActivity"></span>

				<?php do_action( 'p2_post_form' ); ?>

				<input type="hidden" name="action" value="post" />
				<?php wp_nonce_field( 'new-post' ); ?>
			</form>

		</div>

		<div class="clear"></div>

</div> <!-- // postbox -->
