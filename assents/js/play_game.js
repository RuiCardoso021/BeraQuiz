//Globals
var arrayQuestions  = [];

var currentQuestion  ;
var currentCorrect   ;
var currentIncorrect ;

var score = 0 ;
var timer = 0 ;

var globalTimer   = 100 ;
var limitQuestion = 10  ;

var isStart = true ;

const divGameGeral = document.getElementById('gameDiv')    ;
const questionText = document.getElementById('question')   ;
const trueBtt      = document.getElementById('trueBtt')    ;
const falseBtt     = document.getElementById('falseBtt')   ;
const timerText    = document.getElementById('timerText')  ;
const lastResult   = document.getElementById('lastResult') ;

//Start
countByStart();

//Class question
class Question{

    constructor(question, correct_as, incorrect_as){

        this.question     = decodeURI(question)        ;
        this.correct_as   = decodeURI(correct_as)      ;
        this.incorrect_as = decodeURI(incorrect_as[0]) ;

    }

}

//Count down 5 secs
function countByStart(){

    divGameGeral.style.display = "none";

    var temoriza=5;
    let timerId = setInterval(() => {
        $(".caja").text(temoriza); 
        temoriza--; 
        }, 1000);
    setTimeout(() => {
        clearInterval(timerId);
        $(".caja").hide(300);
        loadQuizz(url); 

        divGameGeral.style.display = "block";

    }, 6500);

}

//Pick all quizz from web
function loadQuizz(url){

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

    if (timer >= 0) {

        if(as == currentCorrect){

            score++;
            
            lastResult.textContent = "Correct";

            displayQuestion();

        }else if(as == currentIncorrect){

            lastResult.textContent = "Incorrect";

            displayQuestion();

        }
        
    } else {

        lastResult.textContent = "No time/incorrect";

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

        document.getElementById("timerText").textContent = "Timer: " + timer;

        timer--;

        trueBtt.addEventListener('click', function(){

            clearInterval(timerGame);
            return;

        });
        
        falseBtt.addEventListener('click', function(){

            clearInterval(timerGame);
            return;

        });

    }, 1000);

    setTimeout(() => { clearInterval(timerGame); }, 11000);

}

//End quizz function when he gets to 10 questions
function endQuizz(){

    alert("You did " + score + " points!");
    alert( 100 - globalTimer);

}