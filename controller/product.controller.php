<?php


function saveProduct() {
    global $products;
    do {
        $errors = [];
        $libelle = saisie("Entrez le libellé: ");
        required($libelle,$errors,"Le libellé est obligatoire");
        unique($products,$libelle,$errors,"Ce libellé existe déjà");
        showError($errors);
    } while (count($errors)!= 0);

    $newProduct = [
        "ref" => genererReference($products),
        "libele" => $libelle,
    ];
    $products[] = $newProduct;
    listerProduits($products);
}

function archiverProduit() {
    global $productsArchived, $products;
    $value = saisie("Veuillez renseigner le libellé: ");
    $indexArchived = getProductByLibele($products, $value);
    if ($indexArchived !== -1) {
        $productArchived = supprimerProduit($indexArchived, $products);
        $productsArchived[] = $productArchived;
    } else {
        echo "Produit non trouvé\n";
    }
}