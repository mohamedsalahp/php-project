<?php
/**
 * 
 * Expation handling url 
 */
 $GET_ROUTES = isset($routes['GET'])?$routes['GET']:[];
      if(!isset($_POST['_method']) && !is_null(segment()) && !in_array(segment(),array_column($GET_ROUTES,'segement'))){
        //view('404');
         exit();
      }
 
 




//$POST_ROUTES = isset($routes['POST'])?$routes['POST']:[];