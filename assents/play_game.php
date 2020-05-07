<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assents/css/play_game.css">
    <title>Quiz game</title>
</head>
<body>
    <div class="caja">
        5
    </div>

    <div id="gameDiv">

        <div>

            <h2 id="timerText">Timer: 10</h2>

        </div>

        <div>

            <h1 id="question">#####</h1>

        </div>
        
        <div>
        
            <button id="trueBtt" onclick='checkCorrect("True")'>True</button>
            <button id="falseBtt" onclick='checkCorrect("False")'>False</button>

        </div>
        
        <div>
        
            <h2 id="lastResult">Last Result</h2>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
    <script src="assents/js/play_game.js" async defer></script>
</body>
</html>



