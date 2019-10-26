<?php
    include("simple_html_dom.php");

    // Create DOM from URL or file
    $url = file_get_html('http://www.kolorsplash.com/');

    // Find all images
    foreach($url->find('img') as $element){

        $file_url = $element->src;
        $file_name=0147; 
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$file_name.'"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_url)); //Absolute URL
        ob_clean();
        flush();
        readfile($file_url); //Absolute URL

        echo $element->src ."File downloaded!". '<br>';
    }   

    // Find all links
    foreach($url->find('a') as $element){
        echo $element->href . '<br>';

    }


    function file_get_contents_curl($url) { 
        $ch = curl_init(); 
        
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        
        $data = curl_exec($ch); 
        curl_close($ch); 
        
        return $data; 
    } 
        