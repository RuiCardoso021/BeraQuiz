<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <link rel="stylesheet" href="css/main.css">
    <title>QuizChoose</title>
</head>
<body>

    <?php 
        include "models/conn.php";
        include "assents/menu.php";
    ?>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <div class="container-fluid" style="margin-top:80px; max-width:1400px;">
        <div class="row">
            <div class="col-md-12 col-lg-9 backPadding">



                <!--EMPLEMENT PAGE-->
                <?php include "assents/home.php"; ?>



            </div>
            <div class="col-md-12 col-lg-3">
                <div class="" style="height: 2000px; background-color: #fff; padding:10px">
                    
                        <h5>Show Checkboxes</h5>
                    <div style="padding-left:20px;">
                        <form action="/action_page.php">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I have a bike</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> I have a car</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> I have a boat</label><br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main.js" async defer></script>
</body>
</html>