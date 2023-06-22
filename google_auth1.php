<?php 

session_start();
require_once 'vendor/autoload.php';

// Configuração do Google
$config = [
    'callback' => 'http://localhost/linkedin/google_auth.php',
    'keys' => [
        'id' => '521314762-ui4nnp8g2jhr0k3ar5h9c4oi7dd8bovm.apps.googleusercontent.com',
        'secret' => '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',
    ],
   
];

try {
    $adapter = new Hybridauth\Provider\Google($config);

    if (!$adapter->isConnected()) {
        $adapter->authenticate();
    }

    $userProfile = $adapter->getUserProfile();
    var_dump($userProfile); 
    // Informações do usuário autenticado
    echo 'Nome: ' . $userProfile->displayName . '<br>';
    echo 'Email: ' . $userProfile->email . '<br>';
    echo 'Foto: ' . $userProfile->photoURL . '<br>';
    // echo 'IdGoogle: ' . $userProfile->sub . '<br>';

    // Desconectar
    $adapter->disconnect();
} catch (Exception $e) {
    echo 'Ocorreu um erro: ' . $e->getMessage();
}