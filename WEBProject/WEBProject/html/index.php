<?php
    session_start();
    include_once "../repositories/user.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="../css/homepage.css" />

</head>
<body>
    <?php 
     include "./header.php";
    ?>

    <div class="main_slider">
        <div class="main_image show_main_image">
            <img src="../images/blurryfood1.png" />
            <h1>Healthy foods, for your needs. <br/> <span>Healthy foods loved by millions </span></h1>
        </div>
        <div class="main_image">
            <img src="../images/healthyfood1.png" />
            <h1>Healthy foods, for your needs. <br/> <span>Healthy foods loved by millions </span></h1>
        </div>
        <div class="main_image">
            <img src="../images/blurryfood3.png" />
            <h1>Healthy foods, for your needs. <br/> <span>Healthy foods loved by millions </span></h1>
        </div>
        <p class="arrow-left"></p>
        <p class="arrow-right"></p>
    </div>
    <div class="worlds_best_recipes">
        <h1 class="recipes_heading"> WORLDS BEST RECIPES, BAR NONE!</h1>
        <div class="recipes_container">
            <div class="recipe">
                <div class="image-container">
                    <img src="../images/healthyfood2.jpg" />
                </div>
                <h2> Easy to make, even easier to eat. </h2>
                <p> Enjoy these recipes in little to no minutes, wihout added overtime</p>
            </div>
            <div class="recipe">
                <div class="image-container">
                    <img src="../images/healthyfood3.jpg" />
                </div>
                <h2> Health first, taste first aswell! </h2>
                <p> These recipes are made to watch your waist-line, but they leave no prisoners when it comes to taste, as these are as tasty as your mama's cooking!</p>
            </div>
            <div class="recipe">
                <div class="image-container">
                    <img src="../images/healthyfood1.jpg" />
                </div>
                <h2> Vegan, Vegatarian, everything kind of person? </h2>
                <p> We respect you and your choices, and because of that, we offer a variety of options when it comes to foods, from Vegan and Vegatarian, to Pescetarian and Keto, to Carnivore!</p>
            </div>
        </div>
    </div>

    <h1 class="product_cards_recipe_heading"> Check our recipes</h1>
    <div class="product_cards">
        <div class="product_card">
            <div class="product_card_image_container">
                <img src="../images/recipe5.jpg" alt="Product Image" />
            </div>
            <h2> Overnight Oatmeal </h2>
            <p> Calories (100g): 166 </p>
            <ul>
                <li> Protein: 5.9g</li>
                <li> Fats: 3.6g</li>
                <li> Carboyhdrates: 28g</li>
            </ul>
            <a href="#">See Recipe</a>

        </div>
        <div class="product_card">
            <div class="product_card_image_container">
                <img src="../images/recipe2.jpg" alt="" />
            </div>
            <h2> Risotto</h2>
            <p> Calories (100g): 413 </p>

            <ul>
                <li> Protein: 14g</li>
                <li> Fats: 13g</li>
                <li> Carboyhdrates: 54g</li>
            </ul>
            <a href="#">See Recipe</a>

        </div>
        <div class="product_card">
            <div class="product_card_image_container">
                <img src="../images/recipe3.jpg" alt="" />
            </div>
            <h2> Chicken and Rice</h2>
            <p> Calories (100g): 266 </p>
            <ul>
                <li> Protein: 34g</li>
                <li> Fats: 8.7g</li>
                <li> Carboyhdrates: 11g</li>
            </ul>
            <a href="#">See Recipe</a>
        </div>
        <div class="product_card">
            <div class="product_card_image_container">
                <img src="../images/recipe4.jpg" alt="" />
            </div>
            <h2> Beef Fajita </h2>
            <p> Calories (100g): 280.2            </p>
            <ul>
                <li> Protein: 19.4g</li>
                <li> Fats: 11g</li>
                <li> Carboyhdrates: 24.8g</li>
            </ul>
            <a href="#">See Recipe</a>
        </div>
    </div>

    <?php 
     include "./footer.php";
    ?>

    <script src="../scripts/index.js"></script>
</body>
</html>