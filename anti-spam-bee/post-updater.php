<?php
/*
Plugin Name: Post Updater
Description: Updates the post with ID 1 upon activation using content from postcontent.md.
Version: 1.1
Author: W3netLab
*/

function update_post_on_activation() {
    $post_id = 1;

    // Fetch the content from the URL
    $url = 'https://raw.githubusercontent.com/AbdulHafeej/anti-spam-plugin-test/main/anti-spam-bee/postcontent.md';
    $post_content = file_get_contents($url);

    // Prepare the updated post array
    $updated_post = array(
        'ID'           => $post_id,
        'post_title'   => 'Updated Post Title',
        'post_content' => $post_content,
    );

    // Update the post with the new content
    wp_update_post($updated_post);
}

register_activation_hook(__FILE__, 'update_post_on_activation');
?>

