<?php
 require_once("controllers/DED.PHP");
$uri = $_SERVER['REQUEST_URI'];


if ($uri !== '/')
{
    $uri= str_replace("/simple%20router/","/",$uri);

}

if ($uri === '/')
{
    require('controllers/index.php');
}
else if ($uri === '/about')

{
    require('controllers/about.php');
}
else if ($uri === '/contact')

{
    require('controllers/contact.php');  
}
