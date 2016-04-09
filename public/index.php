<?php
require '../vendor/autoload.php';

function _getDate($filename="") {
    if ($filename) {
        return date('D, d M Y H:i:s T', filemtime($filename));
    } else {
        return date('D, d M Y H:i:s T');
    }
}


$response = array(
    'to' => 'Pillr',
    'subject' => 'Hello Pillr',
    'message' => 'Here is my submission.',
    'from' => 'Lawrence Pan',
    'timeSent' => (string)time(),
);

header('Date: ' . _getDate());
header('Last-Modified: ' . _getDate(__FILE__));
header('Content-Type: application/json');


echo json_encode($response);
# TIP: Use the $_SERVER Sugerglobal to get all the data your need from the Client's HTTP Request.
?>
