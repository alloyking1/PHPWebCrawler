<?php
    include("simple_html_dom.php");

    // Create DOM from URL or file
    $url = file_get_html('http://www.kolorsplash.com/');

    // Find all images
    foreach($url->find('img') as $element){

        // save image to file
        $ch = curl_init($element->src);
        $my_save_dir = 'img/';
        $filename = basename($element->src);
        $complete_save_loc = $my_save_dir . $filename;

        $fp = fopen($complete_save_loc, 'wb');

        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);

        // echo $element->src. '<img src="{{$element->src}}"/>';
        echo '<img src="' . $element->src . '" alt="error">'; 
        // echo '<img src="' . $file_path. '" alt="error">'; 
    }

    // Find all links
    foreach($url->find('a') as $element){
        echo $element->href . '<br>';

    }
?>

        