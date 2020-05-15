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

const questionText = document.getElementById('question')   ;
const trueBtt      = document.getElementById('trueBtt')    ;
const falseBtt     = document.getElementById('falseBtt')   ;
const timerText    = document.getElementById('timerText')  ;
const lastResult   = document.getElementById('lastResult') ;
const scoreHtml    = document.getElementById("score")      ;

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
            
            scoreHtml.innerHTML = score;

            lastResult.textContent = "Last Result: Correct";

            displayQuestion();

        }else if(as == currentIncorrect){

            lastResult.textContent = "Last Result: Incorrect";

            displayQuestion();

        }
        
    } else {

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

    }, 800);

    setTimeout(() => { clearInterval(timerGame); }, 8800);

}

//End quizz function when he gets to 10 questions
function endQuizz(){

    alert("You did " + score + " points!");
    alert( 100 - globalTimer);

}