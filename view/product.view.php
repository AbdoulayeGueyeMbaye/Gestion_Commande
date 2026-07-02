<?php


function listerProduits(array $products) {
    foreach ($products as $product){
        echo "Libellé: {$product["libele"]}\n";
    }
}