$(document).ready(function(){
 $("#email_popup").click(function(){
  showpopup();
 });
 $(".cancel_button").click(function(){
  hidepopup();
 });
 $(".close_button").click(function(){
  hidepopup();
 });
});


function showpopup()
{
 $("#email_box").fadeToggle();
 $("#email_box").css({"visibility":"visible","display":"block"});
}

function hidepopup()
{
 $("#email_box").fadeToggle();
 $("#email_box").css({"visibility":"hidden","display":"none"});
}