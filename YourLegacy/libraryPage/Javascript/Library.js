$(document).ready(function main() { 
			/* side bar  */ 
// Sidebar function
$("#actsideBar").on('click', function(e) {
		$("#sideBarL").toggle();
		$("#sideBar").toggle();
});

// Library function
$("#libCSBSM").hide();
$("#libCSB").click(function(e) {
		$("#libCSBSM").toggle();
		$("#hisCSBSM").hide();
});



// History function
$("#hisCSBSM").hide();
$("#hisCSB").click(function(e) {
		$("#hisCSBSM").toggle();
		$("#libCSBSM").hide();
});		
			/* Header */
// My Name function
$("#myNameSub").hide();
$("#myName").on('click', function(e) {
		$("#myNameSub").toggle();
		$("#myNotiSub").hide();
		$("#myRequSub").hide();
		$("#myMessSub").hide();
		$("#libOptALDrop").hide();
		$("#libOptCNGB").hide();
});

// My Notification function
$("#myNotiSub").hide();
$("#myNoti").on('click', function(e) {
		$("#myNotiSub").toggle();
		$("#myNameSub").hide();
		$("#myRequSub").hide();
		$("#myMessSub").hide();
		$("#libOptALDrop").hide();
		$("#libOptCNGB").hide();
});

// My View Request function
$("#myRequSub").hide();
$("#myRequ").on('click', function(e) {
		$("#myRequSub").toggle();
		$("#myNameSub").hide();
		$("#myNotiSub").hide();
		$("#myMessSub").hide();
		$("#libOptALDrop").hide();
		$("#libOptCNGB").hide();
});

// My Messages function
$("#myMessSub").hide();
$("#myMess").on('click', function(e) {
		$("#myMessSub").toggle();
		$("#myNameSub").hide();
		$("#myNotiSub").hide();
		$("#myRequSub").hide();
		$("#libOptALDrop").hide();
		$("#libOptCNGB").hide();
});

// if click on main body close all sub windows

$("#mainFeedBig").on('click', function(e) {
		$("#myNameSub").hide();
		$("#myNotiSub").hide();
		$("#myRequSub").hide();
		$("#myMessSub").hide();		
		$("#hisCSBSM").hide();
		$("#libCSBSM").hide();
		
});



// Library Page main

$("#libOptCNGB").hide();
$("#libOptCNG").click(function(e) {
		$("#libOptCNGB").toggle();
		$("#libOptALDrop").hide();		
});

$("#libOptPP2").hide();
$("#libOptPP").click(function(e) {
		$("#libOptPP2").toggle();		
});

// if create new group is open close all list and vis versa

$("#libOptALDrop").hide();
$("#libOptAL").on('click', function(e) {
		$("#libOptALDrop").toggle();
		$("#libOptCNGB").hide();
		
	
});

// close all tabs if click on main feed exept the given element open (come back later)

//$(document).click(function(e) {
//  if (!$(e.target).closest('#libOptAL').length) {
//    	$("#libOptALDrop").hide();
//  }
//});

//$('#mainFeedBig').click(function(e) {
//  if (!$(e.target).closest('#libOptCNG').length) {
//    	// $("#libOptCNGB").hide();
//  }
//});


// Public or private option select
 $(function() {
	if ($('.select-options ul li').hasClass('selected')) {
		$('.select .input').text($('.select-options li.selected > span:first-child').text());	
	} else {
		$('.select .input').text($('.select-options li:first-child > span:first-child').text());
		}

	$('.select').click(function() {
		$('.select-options').toggleClass('visible');
	});

	$('.select-options li').click(function() {
		$('.selected').removeClass('selected');
		$(this).addClass('selected');
		$('.select .input').text($(this).find('span:first-child').text());
	});	
 })
	
// Show list 

 $(function() {
	if ($('.select-optionsAL ul li').hasClass('selectedAL')) {
		$('.libOptAL .inputAL').text($('.select-optionsAL li.selectedAL > span:first-child').text());	
	} else {
		$('.libOptAL .inputAL').text($('.select-optionsAL li:first-child > span:first-child').text());
		}

	$('.libOptAL').click(function() {
		$('.select-optionsAL').toggleClass('visible');
	});

	$('.select-optionsAL li').click(function() {
		$('.selectedAL').removeClass('selectedAL');
		$(this).addClass('selectedAL');
		$('.libOptAL .inputAL').text($(this).find('span:first-child').text());

		if ($('.libOptAL .inputAL').text() === "All list") {
			$("#CLDshow").show();
			$("#SPLshow").show();
			$("#LPDshow").show();
		}
		
		if ($('.libOptAL .inputAL').text() === "Created List") {
			 $("#CLDshow").show();
			$("#SPLshow").hide();
			$("#LPDshow").hide();	
		}
		
		if ($('.libOptAL .inputAL').text() === "Saved profiles") {
			 $("#SPLshow").show();
			$("#CLDshow").hide();
			$("#LPDshow").hide();	
		}

		if ($('.libOptAL .inputAL').text() === "Liked List") {
			 $("#LPDshow").show();
			$("#SPLshow").hide();
			$("#CLDshow").hide();	
		}
		
	});	
 })


});
