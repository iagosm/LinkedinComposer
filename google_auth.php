<?php 

session_start();
require_once 'vendor/autoload.php';

// Configuração do Google
$config = [
    'callback' => 'http://localhost/linkedin/google_auth.php',
    'keys' => [
        'id' => '77uk8ahx0sxkn3',
        'secret' => 'ui0I0q1WWmzDvvaZ',
    ]
    // 'scope' => 'email',
];

try {
    $adapter = new Hybridauth\Provider\Facebook($config);

    if (!$adapter->isConnected()) {
        $adapter->authenticate();
    }

    $userProfile = $adapter->getUserProfile();
    var_dump($userProfile); 
    // Informações do usuário autenticado
    // echo 'Nome: ' . $userProfile->displayName . '<br>';
    // echo 'Email: ' . $userProfile->email . '<br>';
    // echo 'Foto: ' . $userProfile->photoURL . '<br>';
    // echo 'IdGoogle: ' . $userProfile->sub . '<br>';

    // Desconectar
    $adapter->disconnect();
} catch (Exception $e) {
    echo 'Ocorreu um erro: ' . $e->getMessage();
}