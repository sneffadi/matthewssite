<?php
add_shortcode('url', 'url');
add_shortcode('upload_dir', 'upload_dir');

function url() {
    $url = home_url('/');
    return $url;
}
function upload_dir() {
    $upload_dir = wp_upload_dir();
    return $upload_dir['baseurl'] . '/';
}