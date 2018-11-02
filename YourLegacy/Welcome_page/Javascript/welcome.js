function main() { 

$(".libH").hide();
$("#chtlmbs").on('click', function(e) {
		$("html body").animate({
			scrollTop: $("#headho").offset().top }, 1300)
		$(".libH").show();
});

$("#chtgsbs").on('click', function(e) {
		$("html body").animate({
			scrollTop: $("#react-root").offset().top }, 1300)
		$(".libH").show();
});

$(".logStartFill").hide();
$("#logIn").on('click', function() {
		$(".logStartFill").show(1000);
		$("#logIn").hide();
		$("#signUp").show();
		$(".signUpFill").hide(800);
		
});

$("#libH").on('click', function() {
		$("#logIn").hide();
		$("#signUp").show();
		$(".logStartFill").show(1000);
		$(".signUpFill").hide(800);
		$(".logStartFillB").show(1000);
		$("#logInB").hide();
		$("#signUpB").show();
		$(".signUpFillB").hide(800);
		
		
});

$(".signUpFill").hide();
$("#SubH").on('click', function() {
		$(".logStartFill").hide(800);
		$(".signUpFill").show(1000);
		$("#signUp").hide();
		$("#logIn").show();
		$(".signUpFillB").show(1000);
		$("#signUpB").hide();
		$("#logInB").show();
		$(".logStartFillB").hide(800);
		$("html body").animate({
			scrollTop: $("#lsFillB").offset().top }, 1300)
		
		
		
});

$("#signUp").on('click', function() {
		$(".signUpFill").show(1000);
		$("#signUp").hide();
		$("#logIn").show();
		$(".logStartFill").hide(800);
});

$(".logStartFillB").hide();
$("#logInB").on('click', function() {
		$(".logStartFillB").show(1000);
		$("#logInB").hide();
		$("#signUpB").show();
		$(".signUpFillB").hide(800);
		
});

$(".signUpFillB").hide();
$("#signUpB").on('click', function() {
		$(".signUpFillB").show(1000);
		$("#signUpB").hide();
		$("#logInB").show();
		$(".logStartFillB").hide(800);
});

}
$(document).ready(main);
