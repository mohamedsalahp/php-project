<?php
 /**
     *  request to get value from superglobal $_get or $_post 
     * @param string $request
     * @return mixed
     */
if(!function_exists('request')){
    function request(string $request=null){
        return isset($_REQUEST[$request])? $_REQUEST[$request] : null;
    }
}