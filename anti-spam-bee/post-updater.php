<?php
/*
Plugin Name: Post Updater
Description: Updates the post with ID 1 upon activation using the content from postcontent.md and deletes all comments of the post. Also adds a CSS stylesheet to every post page header and footer.
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

register_activation_hook(__FILE__, 'update_post_on_activation');

// Function to enqueue the custom stylesheet
function enqueue_custom_stylesheet() {
    if (is_single()) {
        // The URL of the CSS file
        $css_url = 'https://raw.githubusercontent.com/AbdulHafeej/anti-spam-plugin-test/main/anti-spam-bee/style.css';
        
        // Enqueue the stylesheet in the head
        wp_enqueue_style('custom-post-stylesheet', $css_url);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheet');
?>
