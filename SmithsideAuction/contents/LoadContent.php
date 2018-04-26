<?php
function loadAllContent($where,$default=''){   
   //get the content from the url
   //sanitize it for security reasons
    $content = filter_input(INPUT_GET,$where, FILTER_SANITIZE_STRING);
    $default = filter_var($default,FILTER_SANITIZE_STRING);
    //the there wasn't anything on the url, then use the default
    $content = (empty($content))?"home":$content;
    //if we have content, then get it and pass it back
    if($content){
        $html = include 'contents/'.$content.'.php';
        return $html;
    }               
}
?>

