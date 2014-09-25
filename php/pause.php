<?php
#!/usr/bin/php
	$command=shell_exec('mpc pause');
        $nameSplit1=explode(':',$command);
        $nameSplit2=explode('[playing]',$nameSplit1[1]);
	$nameSplit3=explode('#',$nameSplit2[0]);
        echo "Paused: {$nameSplit3[0]} @ PiRadio";
?>

