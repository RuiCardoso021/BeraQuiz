//Global
var arrayQuestions  = [];

var globalTimer = 300  ;
var timer       = 0    ;
var score       = 0    ;
var limitQ      = 30   ;
var isStart     = true ;
var currentCorrect     ;
var currentQuestion    ;
var currentCorrectBtt  ;

//Elements
const questionElement = document.getElementById('question')   ;
const timerElementT   = document.getElementById('timerText')  ;
const lastResult      = document.getElementById('lastResult') ;

//Btts
const bttOne   = document.getElementById('response_1') ;
const bttTwo   = document.getElementById('response_2') ;
const bttTree  = document.getElementById('response_3') ;
const bttForth = document.getElementById('response_4') ;

//Classes
class Question{

    constructor(question, correct_as, incorrect_as){

        this.question     = decodeURIComponent(question);
        this.correct_as   = decodeURIComponent(correct_as);
        this.incorrect_as = [decodeURIComponent(incorrect_as[0]), decodeURIComponent(incorrect_as[1]), decodeURIComponent(incorrect_as[2])];

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
    
}

//Check if is correct
function checkCorrect(as){

    if (timer >= 0) {

        if(as == currentCorrectBtt){

            score++;
            
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

        timerElementT.textContent = timer;

        timer--;

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

    }, 1000);

    setTimeout(() => { clearInterval(timerGame); }, 11000);

}

//End quizz function when he gets to 30 questions
function endQuizz(){

    alert("You did " + score + " points!");
    alert( 100 - globalTimer);

}