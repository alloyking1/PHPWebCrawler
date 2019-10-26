<?php
    include("simple_html_dom.php");

    // Create DOM from URL or file
    $url = file_get_html('http://www.kolorsplash.com/');

    // Find all images
    foreach($url->find('img') as $element){
        
        // $file_name = $element->src;
        // $filepath2 = $_GET[$file_name];


        // $filepath = '/img'.$file_name2; 
        // header('Cache-Control: Public');
        // header('Content-Description: File Transfer');
        // header('Content-Disposition: attachment; filename="'.$file_name.'"');
        // header('Content-Type: application/zip');
        // header('Content-Transfer-Encoding: binary');

        // readfile($filepath); //Absolute URL

        // echo $element->src. '<img src="{{$element->src}}"/>';
        echo '<img src="' . $element->src . '" alt="error">'; 
    }
    
    
    // $uploads_dir = '/img';
    // foreach ($url->find('img') as $element) {
    //     $tmp_name = $_FILES[$element->src]["tmp_name"][$key];
    //     // basename() may prevent filesystem traversal attacks;
    //     // further validation/sanitation of the filename may be appropriate
    //     $name = basename($_FILES[$element->src]["name"][$key]);
    //     move_uploaded_file($tmp_name, "$uploads_dir/$name");
        
    //     echo $element->src ."File downloaded!". '<br>';
    // }

    // Find all links
    foreach($url->find('a') as $element){
        echo $element->href . '<br>';

    }
?>


<img src="https://kolorsplash.com/wp-content/uploads/2019/09/H34e7947d36e04cafbba7d82445615d67n-262x262.jpg"/>
        