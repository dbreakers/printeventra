<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
$osm = "https://www.onlinescoutmanager.com/";
$ch = curl_init();
$path = $_SERVER['REQUEST_URI'];
$parameters = $_GET;
$path_add = $parameters['osmpath'];
unset($parameters['osmpath']);
$path = http_build_query($parameters);

// Insert Yours here 

$_POST['apiid'] = '41';
$_POST['token'] = 'ce3dc1dc772c059e13e615d698b81a8b';


curl_setopt($ch, CURLOPT_URL, 'https://www.onlinescoutmanager.co.uk/'.$path_add.'?'.$path);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($_POST));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo curl_exec($ch);

exit;



?>