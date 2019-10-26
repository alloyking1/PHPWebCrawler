<?php
    
    include("simple_html_dom.php");

    class Crawler{
        
        /**
         *  craw url save image and display them with link
         * @param $url
         * @return img tag
        */
        public $ReturnValue;

        public function index($url){
            // Create DOM from URL or file
            $url = file_get_html($url);

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

                echo   '<img src="' . $element->src . '" alt="error">'; 
            }

            //Find all links
            foreach($url->find('a') as $element){
                echo $element->href . '<br>';

            }
            // $this->ReturnValue = 
            // return ($img, $urls);
        } 
    }
  
?>

        