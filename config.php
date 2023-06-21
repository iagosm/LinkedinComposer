<?php
require_once 'vendor/autoload.php';
 
$config = [
    'callback' => 'http://localhost/linkedin/index.php',
    'keys'     => [
                    'id' => '77uk8ahx0sxkn3',
                    'secret' => 'ui0I0q1WWmzDvvaZ'
                ],
    'scope'    => 'r_liteprofile r_emailaddress',
];
 
$adapter = new Hybridauth\Provider\LinkedIn( $config ); // Chamar na função 