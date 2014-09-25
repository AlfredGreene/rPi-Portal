<?php
	foreach (new DirectoryIterator('../files/') as $fileDir) {
		if($fileDir->isDot()) continue;
		if($fileDir->getFilename() !== '.Trash-1000') {
		echo "<table><tr><td><h3>{$fileDir->getFilename()}</h3></td>";
             		foreach(new FilesystemIterator("../files/{$fileDir->getFilename()}", FilesystemIterator::SKIP_DOTS) as $fileinfo){
                     		$getFILE = explode('.', $fileinfo->getFilename());
                     		$getExTensions = $fileinfo->getExtension();
                       		if (strncasecmp(PHP_OS, 'WIN', 3) == 0) {
                       			$getFILE[0] = str_replace($getFILE[0], utf8_encode($getFILE[0]), $getFILE[0]);
                       		}
                       		$filesize = number_format(($fileinfo->getSize() * .0009765625) * .0009765625, 2, ',', ' ')."Mb";
                       		if($filesize<0.1024) {
                       			$filesize = number_format(($fileinfo->getSize() * .0009765625), 2, ',', ' ')."Kb";
                       		}
               		echo "<td><h6>Storlek: {$filesize}</h6><a hreffer='../files/{$fileDir->getFilename()}/{$getFILE[0]}.{$getExTensions}'>{$getFILE[0]}</a></td></tr></table>";
			}
		}
	}
?>
