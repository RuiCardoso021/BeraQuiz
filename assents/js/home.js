
$(document).ready(function(){
  $('.btn-secound').on('click',function(){ 

    var id_task = $(this).attr('data-id');

    $.ajax({
          type: "POST",
          url: './xpto/generate_rank.php',
          data:{ID: id_task},
          success: function(callback){
            alert(callback);
         }

    });

  });
});