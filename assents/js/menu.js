//constants
var btn_Top = document.getElementById("top-auto");
var menuTop = document.getElementById("menu-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btn_Top.style.display = "block";
    menuTop.classList.add("format-menu");
  } else {
    btn_Top.style.display = "none";
    menuTop.classList.remove("format-menu");
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var ItemHome = $("#item-home").attr("id");
var ItemSearch = $("#item-search").attr("id");
var ItemProfile = $("#item-profile").attr("id");
var ItemSettings = $("#item-settings").attr("id");

// Active menu
$(document).ready(function () {
  $('.header-menu ul li').click(function () {
    //removing the previous selected menu state
    $('.header-menu ul').find('li.active-nav').removeClass('active-nav');
    //adding the state for this parent menu
    switch($(this).attr("id")) {
      case ItemHome:
        $(".item-home").addClass('active-nav');
        break;
      case ItemSearch:
        $(".item-search").addClass('active-nav');
        break;
      case ItemProfile:
        $(".item-profile").addClass('active-nav');
        break;
      case ItemSettings:
        $(".item-settings").addClass('active-nav');
        break;
      default:
        alert($(this).attr("id"));
    }
  });
});


// Active menu
$(document).ready(function () {
  $('#item-home').click(function () {
    if($("#item-home").hasClass('active-nav')){

      //removing the previous selected menu state
      $('#item-home').find('li.active-nav').removeClass('active-nav');

    }
  });
});


//search menu
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".movie-quiz").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});