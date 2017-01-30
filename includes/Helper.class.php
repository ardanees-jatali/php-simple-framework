<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");

class Helper{
	
	
	public function prettyArray($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

}

?>
