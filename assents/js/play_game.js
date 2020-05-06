

$(document).ready(function () {

    countByStart();

});



function countByStart(){
    //CREATE TIMER TO BEGIN GAME

    var temoriza=5;
    let timerId = setInterval(() => {
        $(".caja").text(temoriza); 
        temoriza--; 
        }, 1000);

    // after 5 seconds stop and start quiz
    setTimeout(() => {
        clearInterval(timerId);
        $(".caja").hide(300);
        alert(url);
        showQuiz(); 
    }, 6500);

}

