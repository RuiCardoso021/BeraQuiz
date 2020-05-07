<link rel="stylesheet" href="assents/css/quiz_medium.css">
<script src="assents/js/quiz_medium.js" async defer></script>  

    <div id="gameDiv" class="body-game">

        <div class="timer-question">
            <p>Quiz <?php echo $nameQuiz; ?></p>
            <h2 id="timerText">10</h2>
        </div>

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


     

