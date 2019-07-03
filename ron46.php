<?php
if (!isset($_FILES['upload'])) exit(0);

$upload = $_FILES['upload'];

if ($upload['error'] == 0) {
    // if (copy($upload['tmp_name'], "upload/{$upload['name']}")) {
    //     echo 'upload success';
    // } else {
    //     echo 'upload fail';
    // }
    if (is_uploaded_file($upload['tmp_name'])) {
        if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")) {
            echo 'upload success';
        } else {
            echo 'upload fail';
        }
    }
} else {
    echo 'all fail';
}
