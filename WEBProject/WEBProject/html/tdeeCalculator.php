<?php
include_once "../controller/registerController.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDEE Calculator</title>
    <link rel="stylesheet" href="../css/homepage.css" />
</head>
<body>

<?php 
    include "./header.php";
    ?>

<div class="TDEECalculator">
    <div class="TDEECalculatorContainer">
        <h1> Let's figure out how many calories you lose in a day </h1>
        <h3> Use this Calculator to figure out your Total Daily Expenditure, a measure of how many calories you burn throughout in a day </h3>

        <form action="./tdeeResults.php" method="POST" class="TDEE">
            <select name='gender'>
                Gender
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
            </select>

            <label for="age"> Age </label>

            <input name="age" type="text" placeholder="Age" />

            <label for="weight"> Weight </label>

            <input name="weight" type="text" placeholder="Kg" />

            <label for="height"> Email </label>

            <input name="height" type="text" placeholder="Cm" />

            <button name="calculateTDEE" type="submit"> Calculate TDEE </button>
        </form>

        <div class="howTDEE">
            <div class="howTDEEtext">
                <h2>
                    How TDEE Is Calculated
                </h2>
                <p>
                    Your Total Daily Energy Expenditure (TDEE) is an estimation of how many calories you burn per day when exercise is taken into account. It is calculated by first figuring out your Basal Metabolic Rate, then multiplying that value by an activity multiplier.
                    Since your BMR represents how many calories your body burns when at rest, it is necessary to adjust the numbers upwards to account for the calories you burn during the day. This is true even for those with a sedentary lifestyle. Our TDEE calculator uses the best formulas and displays your score in a way that's easy to read and meaningful.
                </p>
            </div>
            <div class="howTDEEImage">
                <img src="../images/tdee-pie-chart.png" alt="tdee" />
            </div>
        </div>
    </div>
</div>

    <?php 
     include "./footer.php";
    ?>
    
    <?php include_once "../controller/tdeeController.php" ?>
    <?php include_once "../repositories/user.php" ?>
</body>
</html>