<?
	$page = "photos";
	include("header.inc.php");
	
	function imageResize($width, $height, $target) { 

		if ($width > $height) { 
			$percentage = ($target / $width); 
		} else { 
			$percentage = ($target / $height); 
		} 
		
		$width = round($width * $percentage); 
		$height = round($height * $percentage); 
				
		print ("width=\"$width\" height=\"$height\""); 
	
	}
?>

        <!-- The Carousel container -->
        <div id="container" style="margin-left:28%; background-color:white;">
            <ol id="carousel">
				<?
				
				 	$dir = "photos/";
                    $file = "";
                    $dirStream = opendir($dir);
					$photos = array();
					$i = 0;
                    while(!is_bool($file = readdir($dirStream))){
                       if($file != "." && $file != "..") $photos[$i] = $file;
					   $i++;
                    }
                    closedir($dirStream);
					natsort($photos);
					//print_r($photos);
					foreach($photos as $files){
						//print($j);
						$newFile = str_replace(" ","%20",$files);
						$mysock = getimagesize("photos/" . $newFile);
							//print_r($mysock);
							?>	
                            <li><img src="photos/<? print($newFile); ?>"<? if($mysock[0] != 0 && $mysock[1] != 0) imageResize($mysock[0],$mysock[1],400); ?> />
					<? } ?>	
				
            </ol>
        </div>

    <script>
    (function () {
        var carousel;
                
        YAHOO.util.Event.onDOMReady(function (ev) {
            var carousel    = new YAHOO.widget.Carousel("container", {
                        isCircular: true, numVisible: 1
                });

            carousel.render(); // get ready for rendering the widget
            carousel.show();   // display the widget
        });
    })();
    </script>
</body>
</html>