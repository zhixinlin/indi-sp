$(document).on('scroll', function() {
    if( $(this).scrollTop() >= $('.show-float').position().top) {
        $('#floating-cta').fadeIn(), 500;
    }
    else {
        $('#floating-cta').fadeOut(), 500;
    }
});

$(function() {
  $("#sales-button").on('click',function() {
      $(this).hide();
      $("#premium").show();
      $('html,body').animate({
        scrollTop: $("#premium").offset().top},300);
      });
  });

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var panel = this.nextElementSibling;
  if (panel.style.maxHeight){
  panel.style.maxHeight = null;
  } else {
  panel.style.maxHeight = panel.scrollHeight + "px";
  }
  });
  }
