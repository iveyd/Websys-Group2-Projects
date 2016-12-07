$(document).ready(function(){
 $("#email_popup").click(function(){
  emailshow();
 });
 $("#user_popup").click(function(){
  usershow();
 });
 $("#pass_popup").click(function(){
  passshow();
 });
 $("#credit_popup").click(function(){
  creditshow();
 });
 $("#admin_popup").click(function(){
  adminshow();
 });

 $("#cancel_credit").click(function(){
  credithide();
 });
 $("#close_credit").click(function(){
  credithide();
 });

 $("#cancel_email").click(function(){
  emailhide();
 });
 $("#close_email").click(function(){
  emailhide();
 });

  $("#cancel_user").click(function(){
  userhide();
 });
 $("#close_user").click(function(){
  userhide();
 });

  $("#cancel_pass").click(function(){
  passhide();
 });
 $("#close_pass").click(function(){
  passhide();
 });

 $("#cancel_admin").click(function(){
  adminhide();
 });
 $("#close_admin").click(function(){
  adminhide();
 });

});


function emailshow()
{
 $("#email_box").fadeToggle();
 $("#email_box").css({"visibility":"visible","display":"block"});
}

function emailhide()
{
 $("#email_box").fadeToggle();
 $("#email_box").css({"visibility":"hidden","display":"none"});
}

function usershow()
{
 $("#user_box").fadeToggle();
 $("#user_box").css({"visibility":"visible","display":"block"});
}

function userhide()
{
 $("#user_box").fadeToggle();
 $("#user_box").css({"visibility":"hidden","display":"none"});
}

function passshow()
{
 $("#pass_box").fadeToggle();
 $("#pass_box").css({"visibility":"visible","display":"block"});
}

function passhide()
{
 $("#pass_box").fadeToggle();
 $("#pass_box").css({"visibility":"hidden","display":"none"});
}

function creditshow()
{
 $("#credit_box").fadeToggle();
 $("#credit_box").css({"visibility":"visible","display":"block"});
}

function credithide()
{
 $("#credit_box").fadeToggle();
 $("#credit_box").css({"visibility":"hidden","display":"none"});
}

function adminshow()
{
 $("#admin_box").fadeToggle();
 $("#admin_box").css({"visibility":"visible","display":"block"});
}

function adminhide()
{
 $("#admin_box").fadeToggle();
 $("#admin_box").css({"visibility":"hidden","display":"none"});
}