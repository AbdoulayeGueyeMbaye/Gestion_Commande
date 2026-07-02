<?php
function listerClients(array $clients) {
    foreach ($clients as $client){
        echo "Client: {$client["nomPrenom"]}, Tel: {$client["tel"]}\n";
    }
}
