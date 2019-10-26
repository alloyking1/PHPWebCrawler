<?php
    include("simple_html_dom.php");

    // Create DOM from URL or file
    $url = file_get_html('http://www.kolorsplash.com/');

    // Find all images
    foreach($url->find('img') as $element){

        //save img using cUrl
        $start = curl_init();
        curl_setopt($start, CURLOPT_URL, $element->src);
        curl_setopt($start, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($start, CURLOPT_SSLVERSION, 3);
        $file_data = curl_exec($start);
        curl_close($start);

        $file_path = 'img/'. uniqid(). '.jpg';
        // writing file to memory
        $file = fopen($file_path, 'w+');
        fputs($file, $file_data);
        fclose($file);

        // echo $element->src. '<img src="{{$element->src}}"/>';
        echo '<img src="' . $element->src . '" alt="error">'; 
        // echo '<img src="' . $file_path. '" alt="error">'; 
    }

    // Find all links
    foreach($url->find('a') as $element){
        echo $element->href . '<br>';

    }
?>

        