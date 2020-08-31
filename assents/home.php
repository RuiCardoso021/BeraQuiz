
<?php
    include "models/model_quiz.php";
    $quiz = new Quiz();


    if(ISSET($_GET["page"]))
    {
        $menu = $_GET["page"];
        switch ($menu) {
            case 1:
                $begin = 1;
                $end   = 12;
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
                break;
            case 2:
                $begin = 13;
                $end   = 24;
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
                break;
            case 3:
                $begin = 25;
                $end   = 36;
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
            break;
            case 4:
                $begin = 37;
                $end   = 48;
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
                break;
            case 5:
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
                $begin = 49;
                $end   = 60;
                break;
            case 6:
                echo "<style>.box-page-active-1{font-weight: bold;}</style>";
                $begin = 61;
                $end   = 100;
                break;						
        default:
                echo "<script> location.href='error.php'; </script>";
                exit;
            break;
        }
    }else{
        $begin = 1;
        $end   = 12;
        echo "<style>.box-page-active-1{box-shadow: 0 0!important; font-weight: bold; }</style>";
    }


    $list = $quiz->getDataLimit($end, $begin);

?>


<link rel="stylesheet" href="assents/css/home.css">
<script src="assents/js/home.js" async defer></script> 

<div class="col-md-12 col-lg-12 col-xl-9 backPadding ajust-mobile">
<div class="inicialization-card backPadding main-body">
<div class="container-fluid backPadding main-body-padding">
<div class="title insert-margin-mobile" style="text-align:center; width:100%; padding: 20px 15px;">
    <div style="border-bottom: 1px solid #0000001c;">
        <h3 style="padding:0; text-align:center;">Choice Your Favorite Quiz And Upgrade Your Rank</h3>
    </div>
</div>
<div class="search-page">
    <input id="searchput" type="text" placeholder="Search..">
</div>

<div class="row row-bug">
    <?php foreach ($list as $row) { ?>
        <?php 
        $id_quiz = $row["id"];
        ?>
        <div class="col-xl-4 col-sm-4 col-6 link-quiz movie-quiz" data-category="<?php echo $row['category']." ".$row['difficulty'];?>">
            <div class="card">
                <div class="card-haeder-nav">
                <?php
                    switch ($row['category']) {
                        case "Films":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_SQNCQN.json"  background="transparent"  speed="0.7"  style="width: 100%; height: auto;" loop  autoplay></lottie-player>';
                            break;
                        case "Musics":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_BIhEVE.json"  background="transparent"  speed="0.7"  style="width: 100%; height: auto;" loop autoplay></lottie-player> ';
                            break;
                        case "Books":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_csSlFD.json"  background="transparent"  speed="0.7"  style="width: 100%; height: auto;"  loop  autoplay></lottie-player>';
                            break;
                        case "Theatres":
                            echo '<lottie-player class="imgGif" src="https://assets1.lottiefiles.com/packages/lf20_YHvtdL.json"  background="transparent"  speed="0.5"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Animals":
                            echo '<lottie-player class="imgGif" src="https://assets7.lottiefiles.com/packages/lf20_5JFpAw.json" mode="bounce" background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Art":
                            echo '<lottie-player class="imgGif" src="https://assets7.lottiefiles.com/packages/lf20_PEETSf.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Board Games":
                            echo '<lottie-player class="imgGif" src="https://assets1.lottiefiles.com/packages/lf20_cMEE45.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';                        
                        break;
                        case "Celebrites":
                            echo '<lottie-player class="imgGif" src="https://assets1.lottiefiles.com/packages/lf20_cQ5yfs.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Comics":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_RfD6Lb.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Computers":
                            echo '<lottie-player  class="imgGif" src="https://assets9.lottiefiles.com/packages/lf20_45movo.json"  background="transparent"  speed="1.5"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Gadgets":
                            echo '<lottie-player class="imgGif" src="https://assets5.lottiefiles.com/private_files/lf30_0Jie0M.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Geography":
                            echo '<lottie-player class="imgGif" src="https://assets9.lottiefiles.com/packages/lf20_CGlzB5.json"  background="transparent"  speed="3"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "General Knowledge":
                            echo '<lottie-player class="imgGif" src="https://assets8.lottiefiles.com/datafiles/7X98lJltEB9zKAW/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "History":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/datafiles/WOSk0Dg9jXLG3Rc/data.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Japanese Anime":
                            echo '<lottie-player class="imgGif" src="https://assets4.lottiefiles.com/private_files/lf30_O8Bd9n.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Mathematics":
                            echo '<lottie-player class="imgGif" src="https://assets5.lottiefiles.com/packages/lf20_QY4ltj.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Mythologyc":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_EvfyyO.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Politics":
                            echo '<lottie-player class="imgGif" src="https://assets2.lottiefiles.com/private_files/lf30_vaxV46.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Science & Nature":
                            echo '<lottie-player class="imgGif" src="https://assets3.lottiefiles.com/packages/lf20_CIPL1V.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Sports":
                            echo '<lottie-player class="imgGif" src="https://assets9.lottiefiles.com/packages/lf20_NCgBCz.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Television":
                            echo '<lottie-player class="imgGif" src="https://assets10.lottiefiles.com/packages/lf20_Nn4RSX.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Video Games":
                            echo '<lottie-player class="imgGif" src="https://assets5.lottiefiles.com/packages/lf20_1Wy2m3.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Cartoon":
                            echo '<lottie-player class="imgGif" src="https://assets5.lottiefiles.com/packages/lf20_AoAA16.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        case "Celebrities":
                            echo '<lottie-player class="imgGif" src="https://assets4.lottiefiles.com/packages/lf20_GmKTem.json"  background="transparent"  speed="0.7"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>';
                        break;
                        
                    }
                ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['category']; ?> Quiz</h5>
                    <div>
                        <a class="btn-secound" data-id="<?php echo $id_quiz; ?>" data-toggle="modal" data-target=".modal">RANK</a>
                        <a class="btn-first" href="quiz_game.php?<?php echo "id=".$id_quiz;?>">PLAY</a>
                    </div>
                    <div class="width">
                        <div class="col-pers-2 <?php echo $row['difficulty']; ?>"> <?php echo "".$row['difficulty']; ?> </div>
                    </div>
                </div>
            </div>

            
        </div>
    <?php } ?>

    <div class="col-xl-12 col-sm-12 col-12 text-center checkpage">
        <div class="position-absolute">
            <a href="index.php?page=1" pageId="1" class="box-page box-page-active-1">1</a>
            <a href="index.php?page=2" pageId="2" class="box-page box-page-active-2">2</a>
            <a href="index.php?page=3" pageId="3" class="box-page box-page-active-3">3</a>
            <a href="index.php?page=4" pageId="4" class="box-page box-page-active-4">4</a>
            <a href="index.php?page=5" pageId="5" class="box-page box-page-active-5">5</a>
            <a href="index.php?page=6" pageId="6" class="box-page box-page-active-6">6</a>
        </div>
    </div>
    
    <div class="modal fade bd-example-modal-lg modal" tabindex="-1" role="dialog"  aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <a type="button" class="close-modal" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="img/img_top15.png" class="top15" alt="Responsive image">
                <div class="container" style="position:relative; width:100%;">
                    <img class="img img_name_app" src="img/name_app.PNG" alt="Bera Quiz">
                    <h4 class="category_modal"><?php echo $row['category']; ?></h4>
                </div>
                <div id="my-modal-corpo">
                    <p class="rank-3d"> 1º</p>
                </div>

                <br>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>  