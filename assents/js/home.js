
$(document).ready(function(){

  //toggle to main menu
  $(document).on('click', '#item-home',function(){
    $('.menu-lateral-mobile').toggle(100);
  });

  //close main menu from icon "x"
  $(".close-main-menu").click(function(){
    $('.menu-lateral-mobile').toggle(100);
  });
  


  //rank
  $('.btn-secound').on('click',function(){ 

    var id_task = $(this).attr('data-id');

    $.ajax({
          type: "POST",
          url: './xpto/generate_rank.php',
          data:{ID: id_task},
          success: function(callback){
            var arr = $.parseJSON(callback);
            
            for (i = 0; i < arr.length; i++) {
              



              //CREATE DIV FROM DATA
              var divName = $("<div />", {
                class: 'atributo-margin',
                id: 'nameAjax' + [i],
              });
              var divCategory = $("<div />", {
                id: 'categoryAjax' + [i],
              });
              var divQuestionCorrect = $("<div />", {
                id: 'questionsAjax' + [i],
              });
              var divTimer = $("<div />", {
                id: 'timerAjax' + [i],
              });
          




              //GENERATE DIV DATA
              $("#my-modal-corpo").append(divName);
              $("#my-modal-corpo").append(divCategory);
              $("#my-modal-corpo").append(divQuestionCorrect);
              $("#my-modal-corpo").append(divTimer);





              //INSERT DATA IN DIVS
              $("#nameAjax" + [i]).html(arr[i].username);
              $("#categoryAjax" + [i]).html(arr[i].category);
              $("#questionsAjax" + [i]).html(arr[i].question_correct);
              $("#timerAjax" + [i]).html(arr[i].timer);

            }
            $('.modal').modal("show");
            
          s}
         
    });

  });
});


