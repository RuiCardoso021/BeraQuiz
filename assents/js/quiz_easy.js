//Globals
var arrayQuestions  = [];

var currentQuestion  ;
var currentCorrect   ;
var currentIncorrect ;

var score = 0 ;
var timer = 0 ;
var questionNumber = 1;

var globalTimer   = 100 ;
var limitQuestion = 10  ;

var isStart = true ;

const questionText = document.getElementById('question')   ;
const trueBtt      = document.getElementById('trueBtt')    ;
const falseBtt     = document.getElementById('falseBtt')   ;
const timerText    = document.getElementById('timerText')  ;
const lastResult   = document.getElementById('lastResult') ;
const scoreHtml    = document.getElementById("score")      ;

const finalPopUP = document.getElementById('popUpEnd')            ;
const finalScore = document.getElementById('finalScorePopUpText') ;
const finalTime  = document.getElementById('idTimerFinalCount')   ;

const hide = "block" ;
const show = "none"  ;

//Class question
class Question{

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

            var tempArray = [];

            for (var i = 0; i < 10; i++) {

                let tempClass = new Question(res['results'][i]['question'],
                    res['results'][i]['correct_answer'],
                    res['results'][i]['incorrect_answers']
                );

                tempArray.push(tempClass);

            }

            arrayQuestions = tempArray;

            tempArray = [];

            displayQuestion();

        }
    });

}

//Display question
function displayQuestion(){

    if(typeof currentQuestion != 'number'){

        currentQuestion = 0;

    }

    if(currentQuestion < limitQuestion){

        scoreHtml.innerHTML = questionNumber;

        questionNumber ++;

        questionText.innerHTML = arrayQuestions[currentQuestion].question ;

        currentCorrect   = arrayQuestions[currentQuestion].correct_as   ;
        currentIncorrect = arrayQuestions[currentQuestion].incorrect_as ;
        
        fullTimer();

        currentQuestion++;  

    }else{

        endQuizz();

    }
    
}

//Check if is correct
function checkCorrect(as){

    //if not have timer
    if (timer >= 0) {

        //question correct
        if(as == currentCorrect){

            score++;

            lastResult.textContent = "Score: " + score;

            displayQuestion();

        }else if(as == currentIncorrect){

            //error question
            displayQuestion();

        }
        
    } else {

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

        if (timer == -1){ 

            $('.btn').prop('disabled', true);
            clearInterval(timerGame);
            displayQuestion();

        }

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

    }, 800);

    setTimeout(() => { clearInterval(timerGame); }, 8800);

}

//End quizz function when he gets to 10 questions
function endQuizz(){

    finalPopUP.style.display = show;
    finalScore.innerText = "Score: " + score + "/10";
    finalTime.innerText = "Time: " + 100 - globalTimer + "/100";

}