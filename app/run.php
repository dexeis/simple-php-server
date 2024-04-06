<?php

require 'vendor/autoload.php';

use React\Http\Message\Response;
use React\Http\Message\ServerRequest;
use React\Http\HttpServer;
use React\Socket\SocketServer;
use React\EventLoop\Loop;

$server = new HttpServer(function (ServerRequest $request) {
    var_dump($request->getParsedBody());
    // Vérifier si la requête est une requête POST
//    if ($request->getMethod() === 'POST') {
//        // Capturer les données POST
//        $body = $request->getParsedBody();
//        $nom = $body['nom'] ?? null;
//        $email = $body['email'] ?? null;
//
//        // Traiter les données
//        $responseText = "Nom: $nom, Email: $email";
//
//        // Retourner une réponse HTTP avec les données capturées
//        return new Response(
//            200,
//            ['Content-Type' => 'text/plain'],
//            $responseText
//        );
//    } else {
//        // Si ce n'est pas une requête POST, retourner une réponse HTTP 405 (Method Not Allowed)
//        return new Response(405);
//    }
});

// Démarrer le serveur sur le port 8080
$socket = new SocketServer('0.0.0.0:9000');
$server->listen($socket);

echo "Started";

// Lancer la boucle d'événements pour écouter les requêtes
$loop = Loop::get();
$loop->run();
