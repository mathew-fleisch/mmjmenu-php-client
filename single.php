<?php
require 'Mmjmenu.php';

// Your API Key
$client = new Mmjmenu('API_KEY');

// Get the full response
$response = $client->menuItem('123');
echo $response;

// Extract the part we want
$menuItem = json_decode($response, true);
echo $menuItem['response'];

