<?php
#!/usr/bin/php
	shell_exec('mpc play');
        $command=shell_exec('mpc prev');
        $nameSplit1=explode(':',$command);
        $nameSplit2=explode('[playing]',$nameSplit1[1]);
        echo "Now playing: {$nameSplit2[0]} @ PiRadio";
?>
