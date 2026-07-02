<?php

function saveClient(){
    global $clients;
    do{
        $errors = [];
        $nom = saisie("Entrer votre nom:");
        required($nom,$errors,"Le nom est obligatoire","nom");
        $telephone = saisie("Entrer le telephone: ");
        required($telephone,$errors,"Le telephone est obligatoire","tel");
        unique($clients,$telephone,$errors,"Le telephone exist deja","tel");
        $adress = saisie("Entrer votre address");
        showError($errors);
    }while(count($errors)!=0);

    $newClient =[
        'nomPrenom'=>$nom,'tel'=>$telephone,'address'=>$adress
    ];

    $clients []=$newClient;

}