/*! jQuery v1.11.0 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */
$(function(){
  $(".img-swap").live('click', function() {
    if ($(this).attr("class") == "img-swap") {
      this.src = this.src.replace("_off","_on");
    } else {
      this.src = this.src.replace("_on","_off");
    }
    $(this).toggleClass("on");
  });
});