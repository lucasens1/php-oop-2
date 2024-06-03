<?php
/* Ciao ragazzi,
esercizio di oggi:
nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali. I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). */
require_once __DIR__."/Models/Products.php";
require_once __DIR__ ."/Models/Categories.php";
require_once __DIR__ ."/Models/FoodProduct.php";
require_once __DIR__."/Models/ToyProduct.php";


#Creo le categorie
$dogsCategory = new Categories("Cani");
$catsCategory = new Categories("Gatti");

#Istanzio tipi di prodotti
$food_array = [
    $foodProd1 = new FoodProduct("Croccantini per Cani", "Gusto carne di Manzo", 3.99, "./Imgs/", $dogsCategory, 400, "2028-10-10", 250),

    $foodProd2 = new FoodProduct("Croccantini per Gatti", "Gusto carne di Merluzzo", 4.99, "./Imgs/", $catsCategory, 500, "2028-10-10", 320),

    $foodProd3 = new FoodProduct("Umido per Cani", "Gusto carne di Pollo", 1.99, "./Imgs/", $dogsCategory, 600, "2028-10-10", 450),

    $foodProd4 = new FoodProduct("Umido per Gatti", "Gusto carne di Tonno", 5.99, "./Imgs/", $catsCategory, 260, "2028-10-10", 120),

    $foodProd5 = new FoodProduct("Umido Gatti Sterilizzati", "Gusto Acciuga", 1.99, "./Imgs/", $catsCategory, 300, "2028-10-10", 220),

    $foodProd6 = new FoodProduct("Croccantini per Gatti Sterilizzati", "Gusto carne", 6.99, "./Imgs/", $catsCategory, 700, "2028-10-10", 700),
];

$toy_array = [
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "/Imgs", $dogsCategory, 60, "Tessuto"),
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>