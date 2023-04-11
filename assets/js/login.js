





$(document).ready(function(){


$(".mybtn").on("click",function(){
  

$(".mybtn").each(function(){

$(this).removeClass("active");
});


$(this).addClass("active");


if($(this).html()=='Login'){
  $(".myregister-container").removeClass("active");
  $(".mylogin-container").addClass("active");

}else if($(this).html()=='Register'){

  $(".myregister-container").addClass("active");
  $(".mylogin-container").removeClass("active");
}


});





const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");
registerButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});
loginButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});




});




