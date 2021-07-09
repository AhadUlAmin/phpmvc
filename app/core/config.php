<?php

define("WEBSITE_NAME","MY SHOPPONG");

define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','eshopper');
define('DB_USER','root');
define('DB_PASS','');

define('THEME','eshopper/');

define('DEBUG',true);

if(DEBUG)
{
    ini_set('display_errors', 1);
}else
{
    ini_set('display_errors', 0); 
}
