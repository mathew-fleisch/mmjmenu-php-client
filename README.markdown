## Setup
    require 'Mmjmenu.php';
    $client = new Mmjmenu('API_KEY');
    
## Examples

### List Menu Items
    <?php
    require 'Mmjmenu.php';
    $s = "---";

    // Your API Key
    $client = new Mmjmenu('API_KEY');

    // Get the full response
    $response = json_decode($client->menuItems(), true);
    // echo json_encode($response, true);

    // Extract the part we want
    $menuItems = json_decode($response['response'], true);


    foreach($menuItems['menu_items'] as $item) {
        echo $item['id'].": ".$item['name'] . "\n";
        echo $item['body_html']."\n";
        echo "Pictures:\n";
        foreach($item['picture'] as $size=>$url) {
            echo $s." ".$size.": ".$url."\n";
        }
        echo "Prices:\n";
        foreach($item['price'] as $weight=>$price) {
            echo $s." ".$weight.": ".$price."\n";
        }
        
        echo "All Possible Data:\n";
        echo print_r($item, true);
        echo "\n\n$s$s$s$s\n";
    }

### Get a Menu Item
    <?php
    require 'Mmjmenu.php';
    $s = "---";

    // Your API Key
    $client = new Mmjmenu('API_KEY');

    // Get the full response
    $response = json_decode($client->menuItem('123'), true);
    // echo json_encode($response, true);

    // Extract the part we want
    $menuItems = json_decode($response['response'], true);
    // echo json_encode($menuItems, true);

    $item = $menuItems['menu_item'];
    echo $item['id'].": ".$item['name'] . "\n";
    echo $item['body_html']."\n";
    echo "Pictures:\n";
    foreach($item['picture'] as $size=>$url) {
        echo $s." ".$size.": ".$url."\n";
    }
    echo "Prices:\n";
    foreach($item['price'] as $weight=>$price) {
        echo $s." ".$weight.": ".$price."\n";
    }

    echo "All Possible Data:\n";
    echo print_r($item, true);

