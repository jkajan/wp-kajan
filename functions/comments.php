<?php
//change text to leave a reply on comment form
function isa_comment_reform ($arg) {
  $replies = array( "Leave a comment?",
                    "Share your thoughts?",
                    "Post a comment?",
                    "Got something to say?",
                    "Opinions on this?");
  $arg['title_reply'] = __($replies[rand(0,count($replies)-1)]);
  return $arg;
}
add_filter('comment_form_defaults','isa_comment_reform');

// Comment Layout
function joints_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<div class="media-object">
			<div class="media-object-section">
				<article id="comment-<?php comment_ID(); ?>">
					<header class="comment-author">
						<?php
                            // create variable
                            $bgauthemail = get_comment_author_email(); ?>
						<?php printf(__('%s', 'jointswp'), get_comment_author_link()) ?> on
						<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointswp')); ?> </a></time>
						<?php edit_comment_link(__('(Edit)', 'jointswp'), '  ', '') ?>
					</header>
					<?php if ($comment->comment_approved == '0') : ?>
						<div class="alert alert-info">
							<p><?php _e('Your comment is awaiting moderation.', 'jointswp') ?></p>
						</div>
					<?php endif; ?>
					<section class="comment_content clearfix">
						<?php comment_text() ?>
					</section>
					<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</article>
			</div>
		</div>
	<!-- </li> is added by WordPress automatically -->
<?php
}
