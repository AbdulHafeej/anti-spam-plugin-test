<?php
/*
Plugin Name: Post Updater
Description: Updates the post with ID 1 upon activation using the content from postcontent.md and deletes all comments of the post. Hides the header and footer on the page with ID 1.
Version: 1.1
Author: W3netLab
*/

function update_post_on_activation() {
    $post_id = 1;

    // Read the content of the postcontent.md file
    $file_path = plugin_dir_path(__FILE__) . 'postcontent.md';
    $post_content = file_get_contents($file_path);

    // Prepare the updated post array
    $updated_post = array(
        'ID'           => $post_id,
        'post_title'   => 'Anti-Spam Bee Plugin Demo',
        'post_content' => $post_content,
    );

    // Update the post
    wp_update_post($updated_post);

    // Delete all comments for the post with ID 1
    $comments = get_comments(array('post_id' => $post_id));
    foreach ($comments as $comment) {
        wp_delete_comment($comment->comment_ID, true);
    }
}

function hide_header_footer() {
    if (is_single(1)) {
        remove_action('wp_head', '_wp_render_title_tag', 1); // Remove title tag from head
        remove_action('wp_head', 'wp_enqueue_scripts', 1); // Remove scripts and styles
        remove_action('wp_footer', 'wp_footer', 1); // Remove footer
    }
}

add_action('wp', 'hide_header_footer');
register_activation_hook(__FILE__, 'update_post_on_activation');
?>
