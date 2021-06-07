<?php
	if (strlen($urlSite[0])>0) {
		if (file_exists('./app/view/'.$urlSite[0].'.php')){ 
			require './app/view/'.$urlSite[0].'.php';
		}
	}
	else{  
		require './app/view/index.php';
	}
?>