$("#show").append("<i id='hide' class='item fas fa-bell p-2'><span class='position-absolute' style='font-size: 13px'>+1</span></i>");
setTimeout(function(){
    if ($('#hide').length > 0) {
      $('#hide').remove();
    }
  }, 15000)