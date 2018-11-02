function main() {
alert('Happy Birthday Father');
alert('This website is dedicated to you! as well as to the family that you have built. Through all the hard working, self-sacrificing, and amazing moments--this must be praised.'); 
alert('All of which have come togeather to make you the man who will go down in history as  the Originator of the New Morris Era.');
alert('Your legacy will be known as the foundation that built an empire');


// ken scroll function
$('.list-Info').hide();
$('.learn-More-Button').on('click', function() {
		$(this).next().slideToggle(400);
    $(this).toggleClass('active');
    $(this).text('Profile Viewed');
	});

// Bridget scroll function
$('.list-Info2').hide();
$('.learn-More-Button2').on('click', function() {
		$(this).next().slideToggle(400);
    $(this).toggleClass('active');
    $(this).text('Profile Viewed');
	});

// ken jr scroll function
$('.list-Info3').hide();
$('.learn-More-Button3').on('click', function() {
		$(this).next().slideToggle(400);
    $(this).toggleClass('active');
    $(this).text('Profile Viewed');
	});

// chris scroll function
$('.list-Info4').hide();
$('.learn-More-Button4').on('click', function() {
		$(this).next().slideToggle(400);
    $(this).toggleClass('active');
    $(this).text('Profile Viewed');
	});

// click here to get started button
$('.btn-Main').on('click', function(e) {
		$("html body").animate({
			scrollTop: $("#getStart").offset().top }, 1300)});

// ken easy scroll from learn more button to profile info
$('.learn-More-Button').on('click', function(e) {
	e.preventDefault();
	var scrollID = e.currentTarget.id + "Scroll";
		$("html body").animate({
			scrollTop: $("#" + scrollID).offset().top }, 1300)});
// bridget easy scroll from learn more button to profile info
$('.learn-More-Button2').on('click', function(e) {
	e.preventDefault();
	var scrollID = e.currentTarget.id + "Scroll";
		$("html body").animate({
			scrollTop: $("#" + scrollID).offset().top }, 1300)});
// ken jr easy scroll from learn more button to profile info
$('.learn-More-Button3').on('click', function(e) {
	e.preventDefault();
	var scrollID = e.currentTarget.id + "Scroll";
		$("html body").animate({
			scrollTop: $("#" + scrollID).offset().top }, 1300)});
// chris easy scroll from learn more button to profile info
$('.learn-More-Button4').on('click', function(e) {
	e.preventDefault();
	var scrollID = e.currentTarget.id + "Scroll";
		$("html body").animate({
			scrollTop: $("#" + scrollID).offset().top }, 1300)});

// Easy scroll to next profile
$('.nextProfile').on('click', function(e) {
	e.preventDefault();
	var profileID = e.currentTarget.id + "Next";
		$("html body").animate({
			scrollTop: $("#" + profileID).offset().top }, 1300)});

$(".returnKen").on('click', function(e) {
		$("html body").animate({
			scrollTop: $("#oneLook").offset().top }, 1300)});
			
			
}
$(document).ready(main);




