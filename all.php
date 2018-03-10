<?php
require 'Mmjmenu.php';

// Your API Key
$client = new Mmjmenu('API_KEY');

// Get the full response
$response = $client->menuItems();
echo $response;

// Extract the part we want
$menuItems = json_decode($response, true);
echo $menuItems['response'];

