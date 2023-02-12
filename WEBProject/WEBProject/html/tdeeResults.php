<?php
    session_start();
    include_once "../repositories/user.php"
?>

<?php
if(isset($_POST['recalculate']) || isset($_POST['calculateTDEE'])) {
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $tdee;

    if ($gender === 'Male') {
        $tdee = (10 * $weight) + (6.25 * $height) - (5.0 * $age) + 5; 
    } else {
        $tdee = (10 * $weight) + (6.25 * $height) - (5.0 * $age) + (-151); 
    }

    $userRepository = new UserRepository();
    $id = $_SESSION['userID'];

    echo $id;

    $userRepository->updateTDEE($id, $tdee, $age, $height, $weight, $gender);

    header('Location: '.$_SERVER['PHP_SELF']); 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" href="../css/tdee-result.css" />

    <title>TDEE Resulsts</title>
</head>
<body>

    <?php 
     include "./header.php";
    ?>

    <div class="TDEEResulsts">
            <?php
                $id = $_SESSION['userID'];
                $userRepository = new UserRepository();

                $user = $userRepository->getUserById($id);
                $userTdee = $user['totalCalories'] + 500;
                $userBMI = ($user['weight'] / pow(number_format($user['height']/ 100, 2), 2));
                $userBMIRounded = round($userBMI, 0);
                $userIdealWeight = round(52 + (($user['height'] - 150) * 0.76), 0);

                $userBMIClassification;

                if ($userBMIRounded < 19) {
                    $userBMIClassification = 'Underweight';
                } else if ($userBMIRounded > 19 && $userBMIRounded < 25) {
                    $userBMIClassification = 'Normal Weight';
                } else if ($userBMIRounded > 25 && $userBMIRounded < 30) {
                    $userBMIClassification = 'Overweight';
                } else {
                    $userBMIClassification = 'Obese';
                }

            ?>
            <form action="" method="POST" class="tdeeEDIT">
                <p> You're a <input name='age' type='text' value="<?=$user['age']?>"> y/o </p>
                <p>
                <select name='gender'> 
                    <option value='Male'> Male </option>
                    <option value='Female'> Female </option>
                </select>
                </p>
                <p> Who is <input name='height' value="<?=$user['height']?>"> cm tall </input> </p>
                <p> & weighs <input name='weight' value="<?=$user['weight']?>" /> </p>
                <button name="recalculate" class="recalculate-submit" type="submit"> Recalculate </button>
            </form>

            <div class="maintenance-calories-container">
                <div class="maintenance-calories">
                    <h2> Your maintenance calories </h2>
                    <div class="calories-per-something">
                        <div class="calories-per-day">
                            <?php echo '<h2>' . $userTdee . '</h2>' ?>
                            <span> calories per day </span>
                        </div>
                        <div class="calories-per-week">
                            <?php echo '<h2>' . $userTdee * 7 . '</h2>' ?>
                            <span> calories per week </span>
                        </div>
                    </div>
                </div>
                <div class="maintenance-calories-text">
                   <p> Based on your stats, the best estimate for your maintenance calories is <?php echo '<strong>' . $userTdee . '</strong>' ?>  calories per day based on the Mifflin-St Jeor Formula, which is widely known to be the most accurate. The table below shows the difference if you were to have selected a different activity level. </p>
                </div>
            </div>

            <div class="bmi-container">
                <div class="ideal-weight">
                    <h2> Your Ideal Weight </h2>
                    <div class="ideal-weight-result">
                        Your ideal body weight is estimated to be between <?php echo '<span> ' . ($userIdealWeight - 3) . ' - ' .  ($userIdealWeight + 2 ) . ' </span>' ?> kg based on the various formulas listed below. These formulas are based on your height and represent averages so don't take them too seriously, especially if you lift weights.

                    </div>
                    <div class="ideal-weight-formula">
                        <p> G.J. Hamwi Formula (1964) </p>
                        <?php echo '<span>' . ($userIdealWeight + 2) . ' kg </span>' ?>
                    </div>
                    <div class="ideal-weight-formula">
                        <p> B.J. Devine Formula (1974) </p>
                        <?php echo '<span>' . $userIdealWeight . ' kg </span>' ?>
                    </div>
                    <div class="ideal-weight-formula">
                        <p> J.D. Robinson Formula (1983) </p>
                        <?php echo '<span>' . ($userIdealWeight - 2) . ' kg </span>' ?>
                    </div>
                    <div class="ideal-weight-formula">
                        <p> D.R. Miller Formula (1983) </p>
                        <?php echo '<span>' . ($userIdealWeight - 3). ' kg </span>' ?>
                    </div>
                </div>
                <div class="your-bmi">
                    <p> Your BMI is <?php echo '<strong>' . $userBMIRounded. '</strong>' ?> </p>
                    <p> Your <strong> BMI </strong> is <strong> <?php echo $userBMIRounded ?> </strong>, which means you are classified as <strong> <?php echo $userBMIClassification ?> </strong> </p>
                    <div class="your-weight-container">
                    <div class="your-weight">
                        <p> 18.5 or less </p>
                        <span> Underweight </span>
                    </div>
                    <div class="your-weight">
                        <p> 18.5 – 24.99 </p>
                        <span> Normal Weight </span>
                    </div>
                    <div class="your-weight">
                        <p> 25 – 29.99 </p>
                        <span> Overweight </span>
                    </div>
                    <div class="your-weight">
                        <p> 30+ </p>
                        <span> Obese </span>
                    </div>
                    </div>
                </div>
            </div>
            <div class="macro-nutrients">
                <h2> Macronutrients </h2>
                <div class="three-stages">
                    <p class="active-macronutrient"> Maintenance </p>
                    <p> Cutting </p>
                    <p> Bulking </p>
                </div>
                <div class="ratios">
                    <div class="macronutrient-meaning">
                        These macronutrient values reflect your maintenance calories of <?php echo '<strong>' . $userTdee . '</strong>' ?> calories per day.
                    </div>
                    <div class="maintenance-nutrient show-nutrient-tab">
                        <div class="nutrient-box1">
                            <span> Moderate Carb (30/35/35) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.3) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.35) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.35) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box2">
                            <span> Moderate Carb (40/40/20) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.40) * 0.4. 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.40) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.20) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box3">
                            <span> Moderate Carb (30/20/50) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.30) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.20) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . ($userTdee * 0.50) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                    </div>
                    <div class="cutting-nutrient">
                        <div class="nutrient-box1">
                            <span> Moderate Carb (30/35/35) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.30) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.35) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.35) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box2">
                            <span> Moderate Carb (40/40/20) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.40) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.40) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.20) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box3">
                            <span> Moderate Carb (30/20/50) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.30) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.20) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee - 250) * 0.50) * 0.54 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                    </div>
                    <div class="bulking-nutrient">
                        <div class="nutrient-box1">
                            <span> Moderate Carb (30/35/35) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.30) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.35) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.35) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box2">
                            <span> Moderate Carb (40/40/20) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.40) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.40) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.20) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                        <div class="nutrient-box3">
                            <span> Moderate Carb (30/20/50) </span>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.30) * 0.4 . 'g </p>' ?>
                                <span> protein </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.20) * 0.1 . 'g </p>' ?>
                                <span> fats </span>
                            </div>
                            <div class="macro-box">
                                <?php echo '<p>' . (($userTdee + 250) * 0.50) * 0.4 . 'g </p>' ?>
                                <span> carbs </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php 
     include "./footer.php";
    ?>

    <script src="../scripts/tdee-tabs.js"> </script>
</body>
</html>