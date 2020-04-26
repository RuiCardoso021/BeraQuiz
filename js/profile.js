document.querySelector('.img__btn').addEventListener('click', function() {
    document.querySelector('.cont').classList.toggle('s--signup');
  });

function error() {              
    $(".menssage-error").addClass("error-block");
    $(".menssage-error").addClass("error");
    setTimeout(function(){ $(".menssage-error").removeClass("error"); }, 300);
}

function error_register() {              
  $(".menssage-error-register").addClass("error-block-register");
  $(".menssage-error-register").addClass("error-register");
  setTimeout(function(){ $(".menssage-error-register").removeClass("error-register"); }, 300);
}

$(document).ready(function(){
    $("#btn_login").click(function(){
      $.post("./xpto/login.php",
      {
        email: $("#email").val(),
        pass: $("#pass").val()
      },
      function(data,status){
      
          if(data == 1)
          {
              document.location.href = "index.php";   
          }else{
              error();
          }
     
      });
    });

    $("#btn_register").click(function(){
      $.post("./xpto/register.php",
      {
        r_email: $("#r_email").val(),
        r_name:  $("#r_name").val(),
        r_pass:  $("#r_pass").val()
      },
      function(data_register,status){
      
          if(data_register == 1)
          {
              document.location.href = "perfil.php";   
          }else{
              error_register();
          }
     
      });
    });
    
});