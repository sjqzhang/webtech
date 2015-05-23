<?php


$url='http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['REQUEST_URI']).'/yar_server.php';
$client = new yar_client($url);


    print_r( $client->add(4,7));

?>
