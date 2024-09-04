<?php
/*
Plugin Name: Post Updater
Description: Updates the post with ID 1 upon activation.
Version: 1.0
Author: W3netLab
*/

function update_post_on_activation() {
    $post_id = 1;
    $updated_post = array(
        'ID'           => $post_id,
        'post_title'   => 'Updated Post Title',
        'post_content' => 'This is the updated content for the post with ID 1.',
    );
    wp_update_post($updated_post);
}

register_activation_hook(__FILE__, 'update_post_on_activation');
?>
