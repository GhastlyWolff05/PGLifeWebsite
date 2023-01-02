<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>
<body>
    <?php include "includes/header.php"; ?>
    <div class="banner-container"><!--contains a fixed background img-->
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        <form id="search-form" action="prp_list.php" method="GET"> <!--center part of Web pg-->
            <div class="input-group city-search"><!--form (unoperable)-->
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container"><!--contains the major cities heading and their components-->
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md"><!--col-md is taken to accomodate the 4 logos in a device with viewport <768 bootstrap units-->
                <a href="prp_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="prp_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="prp_list.php?city=Bangalore">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="prp_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
    ?> 
    
</body>

</html>
