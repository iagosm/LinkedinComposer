<?php
require_once 'config.php';
 
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    $idLinkedin = $userProfile->identifier;
    $emailLinkedin = $userProfile->email;

    echo $idLinkedin . "<br>";
    echo $emailLinkedin . "<br>";
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}