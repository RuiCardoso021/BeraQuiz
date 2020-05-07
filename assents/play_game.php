<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assents/css/play_game.css">
    <title>Quiz game</title>
</head>
<body>
        <div class="caja">3</div>

        <div id="gameDiv" class="body-game">

            <div class="timer-question"> <h2 id="timerText">10</h2></div>

            <div class="question">
                <p id="question">...</p>
            </div>
            
            <div class="response">
                <button class="btn" id="trueBtt" onclick='checkCorrect("True")'>True</button>
                <button class="btn" id="falseBtt" onclick='checkCorrect("False")'>False</button>
            </div>
            
            <div>
                <h2 id="lastResult">Last Result: </h2>
            </div>
        </div>


    <div class="bg" style="transform: none;"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="assents/js/play_game.js" async defer></script>
</body>
</html>



