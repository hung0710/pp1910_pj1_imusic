$(document).ready(function() {
  $('#myBtn').on('click',function(){
    var btnText = $("#myBtn");
    var dots = $("#dots");
    var moreText = $("#more");

    if (dots.css("display") === "none") {
      dots.css("display", "inline");
      btnText.html("Read more");
      moreText.css("display", "none");
    } else {
      dots.css("display", "none");
      btnText.html("Read less");
      moreText.css("display", "inline");
    }
  });
});