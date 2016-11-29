<?php
	
class curlGETPOST{

	function httpGet($url){
	
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		return $output;

	}
}

$curlTest = new curlGETPOST();
print_r($curlTest);
echo $curlTest->httpGet("http://njit.edu");




?>
