<link rel="stylesheet" href="assents/css/quiz_hard.css">
<script src="assents/js/quiz_hard.js" async defer></script>  

    <div id="gameDiv" class="body-game">

        <div class="timer-question">
            <p>Quiz <?php echo $nameQuiz; ?></p>
            <h2 id="timerText">10</h2>
        </div>

        <div class="question">
            <p id="question"></p>
        </div>
        
        <div class="response type-response">
            <button class="btn" onclick='checkCorrect("1")' id="response_1" ></button>
            <button class="btn" onclick='checkCorrect("2")' id="response_2" ></button>
            <button class="btn" onclick='checkCorrect("3")' id="response_3" ></button>
            <button class="btn" onclick='checkCorrect("4")' id="response_4" ></button>
        </div>
        
        <div>
            <h2 id="lastResult">Last Result: </h2>
        </div>
    </div>

    <div id="popUpEnd">

        <h1 id="finalScorePopUpText">
        

        </h1>

        <h1 id="idTimerFinalCount">

        </h1>
    </div>
