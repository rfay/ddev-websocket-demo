<?php
namespace MyApp;
use Ratchet\Server\IoServer;
use MyApp\Chat;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
require dirname(__DIR__) . '/vendor/autoload.php';

class Chat implements MessageComponentInterface {
    public function onOpen(ConnectionInterface $conn) {
    }

    public function onMessage(ConnectionInterface $from, $msg) {
    }

    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
    }
}



    $server = IoServer::factory(
        new Chat(),
        8080
    );

    $server->run();
