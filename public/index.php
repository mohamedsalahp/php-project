<?php

require_once __DIR__."/../includes/app.php";



route_init();

if(!empty($GLOBALS['query'])) {
  mysqli_free_result($GLOBALS['query']);
}


 mysqli_close($connect); 
 //ob_end_clean(); 
 ob_end_flush();
  






