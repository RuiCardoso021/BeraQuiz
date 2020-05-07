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
        
        <div class="response-bool type-response">
            <button class="btn" id="trueBtt" onclick='checkCorrect("True")'>True</button>
            <button class="btn" id="falseBtt" onclick='checkCorrect("False")'>False</button>
        </div>

        <div class="response-multiple type-response">
            <button class="btn" id="response_1" ></button>
            <button class="btn" id="response_2" ></button>
            <button class="btn" id="response_3" ></button>
            <button class="btn" id="response_4" ></button>
        </div>
        
        <div>
            <h2 id="lastResult">Last Result: </h2>
        </div>
    </div>


     

