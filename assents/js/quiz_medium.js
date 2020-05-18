//Globals
var isStart         = true  ;
var isBooleanGame   = false ;
var arrayQuestions  = []    ;
var globalTimer     = 200   ;
var score           = 0     ;
var timer           = 0     ;
var currentCorrect          ;
var currentQuestion         ;
var currentCorrectBtt       ;

//Consts
const limitQ = 20;

const hide = "none"  ;
const show = "block" ;

//Global elements
const questionElement = document.getElementById('question')   ;
const timerElementT   = document.getElementById('timerText')  ;
const lastResult      = document.getElementById('lastResult') ;
const gameDiv         = document.getElementById('gameDiv')    ;

//Multi elements
const multiG   = document.getElementById('multiGamePart') ;
const bttOne   = document.getElementById('response_1')    ;
const bttTwo   = document.getElementById('response_2')    ;
const bttTree  = document.getElementById('response_3')    ;
const bttForth = document.getElementById('response_4')    ;

//True false elements
const trueFalseG = document.getElementById('trueFalseGame') ;
const trueBtt    = document.getElementById('trueBtt')       ;
const falseBtt   = document.getElementById('falseBtt')      ;

const finalPopUP = document.getElementById('popUpEnd')            ;
const finalScore = document.getElementById('finalScorePopUpText') ;
const finalTime  = document.getElementById('idTimerFinalCount')   ;

//Classes
class MultiGame{

    constructor(question, correct_as, incorrect_as){

        this.question     = decodeURIComponent(question);
        this.correct_as   = decodeURIComponent(correct_as);
        this.incorrect_as = [decodeURIComponent(incorrect_as[0]), decodeURIComponent(incorrect_as[1]), decodeURIComponent(incorrect_as[2])];

    }

}

class BooleanGame{

    constructor(question, correct_as, incorrect_as){

        this.question     = decodeURIComponent(question)        ;
        this.correct_as   = decodeURIComponent(correct_as)      ;
        this.incorrect_as = decodeURIComponent(incorrect_as[0]) ;

    }

}

//Pick all quizz from web
function loadQuizz(url){

    finalPopUP.style.display = hide;

    $.ajax({

        url: String(url).toLowerCase() + "&encode=url3986",
        type: 'GET',
        dataType: 'json',
        success: function(res) {

            for(var i = 0; i < 20; i++){

                if(Array(res['results'][i]['incorrect_answers']).length > 1){


                    let tempClass = new MultiGame(res['results'][i]['question'],
                        res['results'][i]['correct_answer'],
                        res['results'][i]['incorrect_answers']
                    );
    
                    arrayQuestions.push(tempClass);
    
                    displayQuestion();
    
                }else{
    
                    let tempClass = new BooleanGame(res['results'][i]['question'],
                        res['results'][i]['correct_answer'],
                        res['results'][i]['incorrect_answers']
                    );
    
                    arrayQuestions.push(tempClass);
    
    
                    displayQuestion();
    
                }

            }

        }
    });

}

//Game machine
function displayQuestion(){

    if(typeof currentQuestion != 'number'){

        currentQuestion = 0;

    }

    if(typeof arrayQuestions[currentQuestion] != BooleanGame){

        isBooleanGame = false;

        activateGameMode();

        if(currentQuestion < limitQ){

            questionElement.innerHTML = arrayQuestions[currentQuestion].question ;
    
            currentCorrect = arrayQuestions[currentQuestion].correct_as;
        
            var random = Math.floor(Math.random() * 4) + 1;
            
            if(random == 1){
    
                currentCorrectBtt = 1 ;
    
                bttOne.textContent   = arrayQuestions[currentQuestion].correct_as      ;
                bttTwo.textContent   = arrayQuestions[currentQuestion].incorrect_as[0] ; 
                bttTree.textContent  = arrayQuestions[currentQuestion].incorrect_as[1] ; 
                bttForth.textContent = arrayQuestions[currentQuestion].incorrect_as[2] ; 
    
            }else if(random == 2){
    
                currentCorrectBtt = 2 ;
    
                bttOne.textContent   = arrayQuestions[currentQuestion].incorrect_as[0] ;
                bttTwo.textContent   = arrayQuestions[currentQuestion].correct_as      ; 
                bttTree.textContent  = arrayQuestions[currentQuestion].incorrect_as[1] ; 
                bttForth.textContent = arrayQuestions[currentQuestion].incorrect_as[2] ; 
    
            }else if(random == 3){
    
                currentCorrectBtt = 3 ;
    
                bttOne.textContent   = arrayQuestions[currentQuestion].incorrect_as[0] ;
                bttTwo.textContent   = arrayQuestions[currentQuestion].incorrect_as[1] ; 
                bttTree.textContent  = arrayQuestions[currentQuestion].correct_as      ; 
                bttForth.textContent = arrayQuestions[currentQuestion].incorrect_as[2] ; 
    
            }else{
    
                currentCorrectBtt = 4 ;
    
                bttOne.textContent   = arrayQuestions[currentQuestion].incorrect_as[0] ;
                bttTwo.textContent   = arrayQuestions[currentQuestion].incorrect_as[1] ; 
                bttTree.textContent  = arrayQuestions[currentQuestion].incorrect_as[2] ; 
                bttForth.textContent = arrayQuestions[currentQuestion].correct_as      ; 
    
            }
            
            fullTimer();
    
            currentQuestion++;  
    
        }else{
    
            endQuizz();
    
        }

    }else{

        isBooleanGame = true;
        
        activateGameMode();

        if(currentQuestion < limitQuestion){

            questionText.innerHTML = arrayQuestions[currentQuestion].question ;
    
            currentCorrect   = arrayQuestions[currentQuestion].correct_as   ;
            
            fullTimer();
    
            currentQuestion++;  
    
        }else{
    
            endQuizz();
    
        }

    }


}

//Activate the right window
function activateGameMode(){

    if(isBooleanGame){

        multiG.style.display     = hide ;
        trueFalseG.style.display = show ;

    }else{

        multiG.style.display     = show ;
        trueFalseG.style.display = hide ;

    }

}

//Check question
function checkCorrect(as){

    if(timer <= 0){

        if(isBooleanGame){

            if(as == currentCorrect){

                score++;
                
                lastResult.textContent = "Last Result: Correct";
    
                displayQuestion();
    
            }else{
    
                lastResult.textContent = "Last Result: Incorrect";
    
                displayQuestion();
    
            }

        }else{
    
            if(as == currentCorrectBtt){

                score++;
                
                lastResult.textContent = "Last Result: Correct";
    
                displayQuestion();
    
            }else{
    
                lastResult.textContent = "Last Result: Incorrect";
    
                displayQuestion();
    
            }
    
        }

    }else{

        lastResult.textContent = "Last Result: No Time";

        displayQuestion();

    }

}

//Timer
function fullTimer() {

    if(!isStart)
        globalTimer -= (10 - timer);

    timer = 10;

    let timerGame = setInterval(() => {

        isStart = false;

        $('.btn').prop('disabled', false);

        document.getElementById("timerText").textContent = timer;

        timer--;

        trueBtt.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });
        
        falseBtt.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });

        bttOne.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });
        
        bttTwo.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });

        bttTree.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });

        bttForth.addEventListener('click', function(){

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            return;

        });

    }, 800);

    setTimeout(() => { clearInterval(timerGame); }, 8800);

}

//End quizz function when he gets to 10 questions
function endQuizz(){

    const finalTimer = 100 - globalTimer
    gameDiv.style.display = hide;
    finalPopUP.style.display = show;
    finalScore.innerText = "Score: " + score + "/20";
    finalTime.innerText = "Time: " + secToTime(finalTimer)+ "/03:20";

}

//Sec to time
function secToTime(timeInSeconds) {

    var pad = function(num, size) { 
        
        return ('000' + num).slice(size * -1); 
    
    },
    
    time = parseFloat(timeInSeconds).toFixed(3);
    minutes = Math.floor(time / 60) % 60;
    seconds = Math.floor(time - minutes * 60);

    return pad(minutes, 2) + ':' + pad(seconds, 2);
}