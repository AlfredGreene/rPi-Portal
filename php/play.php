<?php
#!/usr/bin/php
	$command=shell_exec('mpc play');
        $nameSplit1=explode(':',$command);
        $nameSplit2=explode('[playing]',$nameSplit1[1]);
        echo "Now playing: {$nameSplit2[0]} @ PiRadio";
?>
