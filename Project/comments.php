<?php
/**
 * The template for displaying comments
 *
 * This template displays the area of the page that contains comments
 * and the comment form.
 *
 * @package YourThemeName
 */

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                esc_html( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'your-theme-textdomain' ) ),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
            ) );
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>
    <?php endif; ?>

    <?php
    if ( ! comments_open() && get_comments_number() ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'your-theme-textdomain' ); ?></p>
        <?php
    endif;
    ?>

    <?php
    comment_form();
    ?>
</div>
