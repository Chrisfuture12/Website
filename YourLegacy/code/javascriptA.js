function main() {




$('.list-Info').hide();
$('.learn-More-Button').on('click', function() {
		$(this).next().slideToggle(400);
    $(this).toggleClass('active');
    $(this).text('Profile Viewed');
	});

$('.btn-Main').on('click', function(e) {
		$("html body").animate({
			scrollTop: $("#getStart").offset().top }, 1300)});

// All easy scroll from learn more button to profile info

$('.learn-More-Button').on('click', function(e) {
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



		
			
			
}
$(document).ready(main);
