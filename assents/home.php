<link rel="stylesheet" href="assents/css/home.css">

<div class="col-md-12 col-lg-9 backPadding">
<div class="inicialization-card backPadding" style="height: 2000px; background-color: #fff;">
<div class="container-fluid backPadding">
<div class="title" style="text-allign:center; width:100%;">

    <h3 style="padding: 20px 15px; text-align:center;">Choice Your Favorite Quiz And Upgrade Your Rank</h3>
</div>
<div class="row">
<?php $data = $conn->query("SELECT quiz_category, quiz_difficulty, quiz_questions_number FROM rxz_quiz  LIMIT 5")->fetchAll();?>

    <?php $i = 400 ?>
    <?php foreach ($data as $row) { ?>
    <?php $i++; ?>
        <div class="col-xl-3 col-sm-4 col-6 link-quiz movie-quiz">
            <div class="card">
                <div class="card-haeder-nav">
                <?php
                    switch ($row['quiz_category']) {
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
                    <h5 class="card-title"><?php echo $row['quiz_category']; ?> Quiz</h5>
                    <div class="ajust-btn">
                        <a class="btn-secound"  data-toggle="modal" data-target=".modal<?php echo $i; ?>">RANK</a>
                        <a class="btn-first" href="#">PLAY</a>
                    </div>
                    <div class="width">
                        <div class="col-pers-1 <?php echo $row['quiz_difficulty']; ?>" ><?php echo $row['quiz_questions_number']." / ".$row['quiz_questions_number']; ?></div>
                        <div class="col-pers-2 <?php echo $row['quiz_difficulty']; ?>"> <?php echo "".$row['quiz_difficulty']; ?> </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg modal<?php echo $i; ?>" tabindex="-1" role="dialog"  aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <img src="img/title_top15.png" class="img-fluid" alt="Responsive image">
                    <div class="modal-content">
                    <div class="container" style="position:relative; width:140px;">
                      <a class="nav-link a-logo" href="index.php">
                          <img class="img img_name_app" src="img/name_app.PNG" alt="Bera Quiz">
                      </a>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <?php echo $row['quiz_category']; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
</div>
</div>
</div>
</div>  