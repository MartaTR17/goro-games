
// LOCALSTORAGE
	// Switch state
	var colorswitch = localStorage.getItem('colorpickerReborn');
	
	// Set the user's selection    
	if (colorswitch == 'orange') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/orange.css" type="text/css" />');
	
    };
	if (colorswitch == 'green') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/green.css" type="text/css" />');
	
    };
	if (colorswitch == 'blue') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/blue.css" type="text/css" />');
    };	
	if (colorswitch == 'cyan') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/cyan.css" type="text/css" />');
    };	
	if (colorswitch == 'violet') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/violet.css" type="text/css" />');	
    };
	if (colorswitch == 'custom') {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/custom.css" type="text/css" />');	
    };	

$(document).ready(function() {
// COLORSWITCH:

	// When orange is clicked:
    $('.colororange').click(function() {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/orange.css" type="text/css" />');

		
		
		localStorage.setItem('colorpickerReborn', 'orange');
    });
	
	// When green is clicked:
    $('.colorgreen').click(function() {

		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/green.css" type="text/css" />');		
	
		
		localStorage.setItem('colorpickerReborn', 'green');
    });
	
	// When blue is clicked:
    $('.colorblue').click(function() {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/blue.css" type="text/css" />');

		
		localStorage.setItem('colorpickerReborn', 'blue');
    });
	
	// When cyan is clicked:
    $('.colorcyan').click(function() {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/cyan.css" type="text/css" />');

		
		localStorage.setItem('colorpickerReborn', 'cyan');
    });	
	
	// When violet is clicked:
    $('.colorviolet').click(function() {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/violet.css" type="text/css" />');

		
		localStorage.setItem('colorpickerReborn', 'violet');
    });	
	
	// When custom is clicked:
    $('.colorcustom').click(function() {
		
		$('head').append('<link rel="stylesheet" href="./styles/HexagonReborn/theme/custom.css" type="text/css" />');

		
		localStorage.setItem('colorpickerReborn', 'custom');
    });		
	// When trashbin is clicked:
	$('.clearstorage').click(function() {
		
		localStorage.removeItem('colorpickerReborn');
		window.location.reload(true);
	});
});