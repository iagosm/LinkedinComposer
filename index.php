<?php
require_once 'config.php';
 //login linkedin
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    $idLinkedin = $userProfile->identifier;
    $emailLinkedin = $userProfile->email;

    print_r($userProfile);
    // echo $idLinkedin . "<br>";
    // echo $emailLinkedin . "<br>";
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}