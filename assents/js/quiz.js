
//Start
countByStart();

//Count down 3 secs
function countByStart(){

    var temoriza=3;
    let timerId = setInterval(() => {
        $(".caja").text(temoriza); 
        temoriza--; 
        }, 850);
    setTimeout(() => {
        clearInterval(timerId);
        $(".caja").hide(700);
        loadQuizz(url); 
        $('.btn').prop('disabled', true);
        $("#gameDiv").show(1000);

    }, 4000);

}

