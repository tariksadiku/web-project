<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories Tracker</title>

    <link rel="stylesheet" href="../css/homepage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
<?php 
    include "./header.php";
    ?>

    <nav>
        <div class="nav-wrapper black">
            <div class="container">
                
                <ul>
                    <li>
                        <a href="#" class="clear-btn small lighten-3 brand-logo center">Clear All</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Add Meal / Food item</span>
                <form class="col">
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" placeholder="Add Item" id="item-name">
                            <label for="item-name">Meal</label>

                        </div>
                        <div class="input-field col s6">
                            <input type="number" placeholder="Add Calories" id="item-calories">
                            <label for="item-calories">Calories</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn add-btn blue darken-3"><i class="fa fa-plus"></i> Add Meal</button>
                        <button class="btn update-btn orange"><i class="fa fa-pencil-square-o"></i> Update Meal</button>
                        <button class="btn delete-btn red"><i class="fa fa-remove"></i> Delete Meal</button>
                        <button class="btn back-btn grey pull-right"><i class="fa fa-chevron-circle-left"></i>
                            Back</button>
                    </div>
                </form>
            </div>
        </div>
        
        <h3 class="center-align">Total calories: <span class="total-calories">0</span></h3>
        
        <ul id="item-list" class="collection">
            
        </ul>

    </div>

    <?php 
        include "./footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="../scripts/calculator.js"></script>
</body>

</html>