<?php
require_once 'config.php';
$server = stream_socket_server("{$protocol}://{$server_ip}:{$port}", $ErrNo, $ErrStr);
while($client = stream_socket_accept($server, -1))
{
    echo "New client detected\n";
    $response_client = stream_get_line($client, 1000, "\n");
    switch($response_client) {
        case "hello":
            fwrite($client, "Hello client\n");
            break;
        case "how":
            $user = stream_get_line($client, 1000, "\n");
            fwrite($client, "User {$user} is ok!\n");
            break;
    }

}