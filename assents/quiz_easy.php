<link rel="stylesheet" href="assents/css/quiz_easy.css">
<script src="assents/js/quiz_easy.js" async defer></script>  

    <p class="name-quiz">Quiz <?php echo $nameQuiz; ?></p>

    <div id="gameDiv" class="body-game">

        <div class="timer-question">
            <h2 id="timerText">10</h2>
        </div>

        <div class="question">
            <p id="question"></p>
        </div>
        
        <div class="response">
            <button class="btn" id="trueBtt" onclick='checkCorrect("True")'>True</button>
            <button class="btn" id="falseBtt" onclick='checkCorrect("False")'>False</button>
        </div>
        
        <div class="question-number">
            <h2 ><span id="score">0</span> / 10 </h2>
        </div>
    </div>




