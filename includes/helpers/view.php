<?php

 /**
     * Summary of view
     * @param string $path
     * @param array $vars
     * @return void
     */
if(!function_exists('view')){

    function view(string $path, array $vars=null){
    $file = config('view.path').'/'.str_replace('.','/',$path).'.php';
    if(file_exists($file)){
        if(!is_null($vars) && is_array($vars)){
            foreach($vars as $key => $value){
                ${$key} = $value;
            }
        }
        include $file;
    }else{
        include config('view.path').'/404.php';
    }

    }
}




view('home');

//view('404');
//trans('main');

