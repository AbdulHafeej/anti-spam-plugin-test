<?php
/*
Plugin Name: Post Updater
Description: Updates the post with ID 1 upon activation using the content from postcontent.md and deletes all comments of the post. Also hides header and footer on that post.
Version: 1.2
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

register_activation_hook(__FILE__, 'update_post_on_activation');

// Function to remove header and footer from a specific page
function remove_header_footer_for_specific_page() {
    if (is_page(1)) { // Check if the current page ID is 1
        remove_action('wp_head', '_wp_render_title_tag', 1);
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'feed_links', 2);
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('wp_head', 'print_emoji_styles');
        remove_action('wp_footer', 'wp_footer');
        remove_action('wp_body_open', 'wp_body_open');
    }
}

add_action('template_redirect', 'remove_header_footer_for_specific_page');
?>
