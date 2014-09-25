$(document).ready(function() {
	var OI = 0;
	var PON = 0;

	$('.t_upload').on('click', function() {
		if(OI == 0) {
			$(this).parent('.dropdown').animate({
				height: '+=230'
			},1000);
			OI = 1;
		}
		else {
			$(this).parent('.dropdown').animate({
                height: '-=230'
            },1000);
            OI = 0;
        }
		$(this).toggleClass('t_upload_click').children('img').toggleClass('t_upload_rotate');
	});
$('.back').on('click', function() {
	$('.music_title').load('php/back.php');
	PON=0;
});
$('.pause').on('click', function() {
        $('.music_title').load('php/pause.php');
	PON=1;
});
$('.play').on('click', function() {
        $('.music_title').load('php/play.php');
	PON=0;
});
$('.stop').on('click', function() {
        $('.music_title').load('php/stop.php');
	PON=1;
});
$('.next').on('click', function() {
        $('.music_title').load('php/next.php');
	PON=0;
});
$('.player').on('click', function() {
	$('.player').load('php/audio.php');
	setInterval(function() {
		if(!$('.player')[0].playing) {
			$('.player').trigger('click');
		}
	},10000);
});
setInterval(function() {
	if(PON == 0) {
		$('.music_title').load('php/current.php');
	}
},1000);
$('.get_files').on('click', function() {
	$('.IOfiles').animate({
		height: '+=200'
	});
	$('.show_files').load('php/harddrive.php');
});
});
