<?php
/*
L'e-commerce vende prodotti per animali. I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
*/

#Includo Files
require_once __DIR__."/Models/Products.php";
require_once __DIR__ ."/Models/Categories.php";
require_once __DIR__ ."/Models/FoodProduct.php";
require_once __DIR__."/Models/ToyProduct.php";


#Creo le categorie
$dogsCategory = new Categories("Cani");
$catsCategory = new Categories("Gatti");



#Istanzio tipi di prodotti
$food_array = [
    $foodProd1 = new FoodProduct("Croccantini per Cani", "Gusto carne di Manzo", 3.99, "./Imgs/abc.jpg", $dogsCategory, 400, "2028-10-10", 250),
    $foodProd2 = new FoodProduct("Croccantini per Gatti", "Gusto carne di Merluzzo", 4.99, "./Imgs/abc.jpg", $catsCategory, 500, "2028-10-10", 320),
    $foodProd3 = new FoodProduct("Umido per Cani", "Gusto carne di Pollo", 1.99, "./Imgs/abc.jpg", $dogsCategory, 600, "2028-10-10", 450),
    $foodProd4 = new FoodProduct("Umido per Gatti", "Gusto carne di Tonno", 5.99, "./Imgs/abc.jpg", $catsCategory, 260, "2028-10-10", 120),
    $foodProd5 = new FoodProduct("Umido Gatti Sterilizzati", "Gusto Acciuga", 1.99, "./Imgs/abc.jpg", $catsCategory, 300, "2028-10-10", 220),
    $foodProd6 = new FoodProduct("Croccantini per Gatti Sterilizzati", "Gusto carne", 6.99, "./Imgs/abc.jpg", $catsCategory, 700, "2028-10-10", 700),
];

$toy_array = [
    $toyProd1 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd2 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd3 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd4 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd5 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd6 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd7 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd8 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
    $toyProd9 = new ToyProduct("Palla di pezza", "Perfetta per far giocare il cane", 1.60, "./Imgs/abc.jpg", $dogsCategory, 60, "Tessuto"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h2>Cibo :</h2>
            <div class="food-section">               
                <?php foreach($food_array AS $food){ ?>
                    <div class="card">
                        <img src="<?php echo $food->getImg() ?>" alt="Immagine">
                        <h4><?php echo $food->getName() ?></h4>
                        <p><?php echo $food->getDesc() ?></p>
                        <p><?php echo $food->getPrice()." €" ?></p>
                        <p><?php echo $food->getType() ?></p>
                        <p><?php echo $food->getKgWeight()." Kg" ?></p>
                        <span class="<?php echo ($food->getCategory() === 'Cani') ? 'dogStyle' : 'catStyle'; ?>"> <?php echo $food->getCategory() ?> </span>
                    </div>
                <?php } ?>
            </div>
            <h2>Giocattoli :</h2>
            <div class="toy-section">
                <?php foreach($toy_array AS $toy){ ?>
                    <div class="card">
                        <img src="<?php echo $toy->getImg() ?>" alt="Immagine">
                        <h4><?php echo $toy->getName() ?></h4>
                        <p><?php echo $toy->getDesc() ?></p>
                        <p><?php echo $toy->getPrice()." €" ?></p>
                        <p><?php echo $toy->getType() ?></p>
                        <p><?php echo $food->getWeight()." g" ?></p>
                        <span class="<?php echo ($toy->getCategory() === 'Cani') ? 'dogStyle' : 'catStyle'; ?>"> <?php echo $toy->getCategory() ?> </span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>

<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: Arial,sans-serif;
}
.wrapper{
    width: 100%;
    height: 100%;
    background-color: #243245;
}
.container{
    width: 80%;
    margin: 0 auto;
}
.toy-section,
.food-section{
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    border-radius: 16px;
    padding: 18px 24px;
    justify-content: space-between;
    align-items: stretch;
    text-align: center;
    background-color: #043245;
}

.dogStyle{
    display: inline-block;
    color: white;
    padding: 8px 12px;
    border-radius: 16px;
    background-color: #123245;
}

.catStyle{
    display: inline-block;
    color: white;
    padding: 8px 12px;
    border-radius: 16px;
    background-color: #6888;
}

.card{
    border: 1px solid #123245;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border-radius: 24px;
    background-color: white;
    box-shadow: 0 2px 6px rgba(250, 250, 250, 0.72); 
    gap: 8px;
    padding: 24px;
    max-width: 250px;
    width: calc(100% / 3 - 48px);
    transition: all 0.7s;
}
.card:hover{
    box-shadow: none;
    transition:all 0.7s;
}
.card img{
    width: 75px;
    height: 95px;
}
h2{
    text-align: center;
    padding: 8px 24px;
    color: white;
}
p,
span,
h4{
    padding-top: 10px;
}
</style>