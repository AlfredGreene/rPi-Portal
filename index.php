<!DOCTYPE html>
<html>
<head>
<title>Raspberry Pi's Portal | OpenSource</title>
<link rel=stylesheet href="css/interface.css">
<script src="js\jquery-ui\external\jquery\jquery.js" type="text/javascript"></script>
<script src="js\jquery-ui\jquery-ui.js" type="text/javascript"></script>
<script src="js\interface.js" type="text/javascript"></script>
</head>
<body>
<div class='dropdown'>
<p class='t_upload'>Upload<img src='css\buttons\arrow_down.png' /></p>
<table class='a_center'>
	<tr>
		<td class='f_box'>
			<p>Upload to your Raspberry</p>
        	</td>
        	<td class='f_box send_files'>
			<p>Upload to your Dropbox</p>
		</td>
	</tr>
</table>
</div>
<div class='dropdown IOfiles'>
<p class='t_upload'>Files on Harddrive<img src='css\buttons\arrow_down.png' /></p>
<table class='a_center'>
	<tr>
		<td class='f_box get_files'>
			<p>Files on your Raspberry</p>
		</td>
		<td class='f_box get_dropbox'>
			<p>Files on your Dropbox</p>
		</td>
	</tr>
</table>
<div class='show_files'></div>
</div>
<div class='dropdown'>
<p class='t_upload'>PiRadio<img src='css\buttons\arrow_down.png' /></p>
<table class='a_center'>
        <tr>
                <td class='f_box back'>
                        <p>Back</p>
                </td>
                <td class='f_box play'>
                        <p>Play</p>
                </td>
        </tr>
        <tr>
                <td class='f_box pause'>
                        <p>Pause</p>
                </td>
                <td class='f_box stop'>
                        <p>Stop</p>
                </td>
	</tr>
	<tr>
		<td class='f_box next'>
			<p>Next</p>
		</td>
		<td class='f_box player'>
			<p>HTML5 player</p>
		</td>
	</tr>
</table>
<marquee><div class='music_title'>--- Nothing to play ---</div></marquee>
</div>

</body>
</html>
