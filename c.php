<?php
// Model
function processData()
{
    $data['title'] = 'Bryan Big Idiot';
    $data['who'] = 'Bryan';
    return $data;
}


// call View
function loadView($viewFile, $data) {
    $query = http_build_query(array("data" => $data));
    echo file_get_contents("http://localhost/views/{$viewFile}.php?$query");
}

$data = processData();

loadView('view1', $data);