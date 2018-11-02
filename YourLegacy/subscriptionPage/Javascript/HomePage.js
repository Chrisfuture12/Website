function main() { 
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
});

// My Notification function
$("#myNotiSub").hide();
$("#myNoti").on('click', function(e) {
		$("#myNotiSub").toggle();
		$("#myNameSub").hide();
		$("#myRequSub").hide();
		$("#myMessSub").hide();
});

// My View Request function
$("#myRequSub").hide();
$("#myRequ").on('click', function(e) {
		$("#myRequSub").toggle();
		$("#myNameSub").hide();
		$("#myNotiSub").hide();
		$("#myMessSub").hide();
});

// My Messages function
$("#myMessSub").hide();
$("#myMess").on('click', function(e) {
		$("#myMessSub").toggle();
		$("#myNameSub").hide();
		$("#myNotiSub").hide();
		$("#myRequSub").hide();
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

}
$(document).ready(main);