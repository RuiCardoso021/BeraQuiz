<link rel="stylesheet" href="assents/css/quiz_medium.css">
<script src="assents/js/quiz_medium.js" async defer></script>  

    <div id="gameDiv" class="body-game">

        <div class="timer-question">
            <p>Quiz <?php echo $nameQuiz; ?></p>
            <h2 id="timerText">10</h2>
        </div>

        <div class="question">
            <p id="question"></p>
        </div>
        
        <div class="response-bool type-response" id="trueFalseGame">
            <button class="btn" onclick='checkCorrect("True")' id="trueBtt">True</button>
            <button class="btn" onclick='checkCorrect("False")' id="falseBtt">False</button>
        </div>

        <div class="response-multiple type-response" id="multiGamePart">
            <button class="btn" onclick='checkCorrect("1")'  id="response_1" ></button>
            <button class="btn" onclick='checkCorrect("2")'  id="response_2" ></button>
            <button class="btn" onclick='checkCorrect("3")'  id="response_3" ></button>
            <button class="btn" onclick='checkCorrect("4")'  id="response_4" ></button>
        </div>
        
        <div>
            <h2 id="lastResult">Last Result: </h2>
        </div>
    </div>


     

