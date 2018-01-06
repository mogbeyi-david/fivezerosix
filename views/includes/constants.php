<?php
/**
 * Created by PhpStorm.
 * User: Mogbeyi David
 * Date: 29/10/2017
 * Time: 23:22
 */

define("URL_PROTOCOL" , "//");
define("URL_ROOT" , $_SERVER['HTTP_HOST']);
define("URL_FOLDER" , "/works/fivezerosix");
$root_dir = URL_PROTOCOL.URL_ROOT.URL_FOLDER;
define('FIVEZEROSIX' , $root_dir);
?>