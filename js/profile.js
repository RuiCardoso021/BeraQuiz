//effect to transation
document.querySelector('.img__btn').addEventListener('click', function() {
    document.querySelector('.cont').classList.toggle('s--signup');
  });

//effect error login
function error() {              
    $(".menssage-error").addClass("error-block");
    $(".menssage-error").addClass("error");
    setTimeout(function(){ $(".menssage-error").removeClass("error"); }, 300);
}

//effect error register
function error_register() {              
  $(".menssage-error-register").addClass("error-block-register");
  $(".menssage-error-register").addClass("error-register");
  setTimeout(function(){ $(".menssage-error-register").removeClass("error-register"); }, 300);
}

$(document).ready(function(){
    //login
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
    //register
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
              document.location.href = "index.php";   
          }else{
              error_register();
          }
     
      });
    });
  });

  
var myInput = document.getElementById("r_pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var lowerCaseLetters = /[a-z]/g;
var upperCaseLetters = /[A-Z]/g;
var numbers = /[0-9]/g;

$(document).ready(function(){
    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {$("#message").show(300);}
    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() { $("#message").hide(300);}

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {

      // Validate lowercase letters
      if(myInput.value.match(lowerCaseLetters)) {  
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
      }
      
      // Validate capital letters
      var upperCaseLetters = /[A-Z]/g;
      if(myInput.value.match(upperCaseLetters)) {  
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
      }

      // Validate numbers
      var numbers = /[0-9]/g;
      if(myInput.value.match(numbers)) {  
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
      }
      
      // Validate length
      if(myInput.value.length >= 8) {
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
      }

  }
});
