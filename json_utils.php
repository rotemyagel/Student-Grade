<?php

// Get the data from the json file.
function get_json_data($file_path) {
    $json_data = array();
    // Get data from existing json file.
    if ( $json_data = file_get_contents($file_path) ) {
        $array_data = json_decode($json_data);
    }

    return $array_data;
}

// Write new data into the json file.
function add_new_data_to_json_file($new_data, $file_path) {
    //Get data from existing json file.
    $json_data = file_get_contents($file_path);

    // converts json data into array.
    $array_data = json_decode($json_data);

    // Push new record into the array.
    array_push($array_data, $new_data);

    // Convert updated array to JSON.
    $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

    //write json data into data.json file
    file_put_contents($file_path, $json_data);
}

?>