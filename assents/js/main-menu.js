$(document).ready(function(){
  $("#firstMenu").click(function(){
    $(".first").toggle(300);

  });
});

$(document).ready(function(){
  $("#secondMenu").click(function(){
    $(".second").toggle(300);
  });
});


//search by checkbox filter
$(document).ready(function() {
  var $filterCheckboxes = $('input[type="checkbox"]');
  
  $filterCheckboxes.on('change', function() {
  
    var selectedFilters = {};
  
    $filterCheckboxes.filter(':checked').each(function() {
  
      if (!selectedFilters.hasOwnProperty(this.name)) {
        selectedFilters[this.name] = [];
      }
  
      selectedFilters[this.name].push(this.value);
  
    });
  
    // create a collection containing all of the filterable elements
    var $filteredResults = $('.movie-quiz');
  
    // loop over the selected filter name -> (array) values pairs
    $.each(selectedFilters, function(name, filterValues) {
  
      // filter each .flower element
      $filteredResults = $filteredResults.filter(function() {
  
        var matched = false,
          currentFilterValues = $(this).data('category').split(' ');
  
        // loop over each category value in the current .flower's data-category
        $.each(currentFilterValues, function(_, currentFilterValue) {
  
          // if the current category exists in the selected filters array
          // set matched to true, and stop looping. as we're ORing in each
          // set of filters, we only need to match once
  
          if ($.inArray(currentFilterValue, filterValues) != -1) {
            matched = true;
            return false;
          }
        });
  
        // if matched is true the current .flower element is returned
        return matched;
  
      });
    });
  
    $('.movie-quiz').hide().filter($filteredResults).show();
  
  });
  });
  