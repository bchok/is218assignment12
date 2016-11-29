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
	
	function httpPost($url, $param){
		
		$postData = '';
		
		foreach($param as $key => $value){
			$postData .= $key . '=' . $value . '&';
		}
		
		$postData = rtrim($postData, '&');
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, count($postData));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

		$output = curl_exec($ch);

		curl_close($ch);
		return $output;
	}
}

$curlTest = new curlGETPOST();
print_r($curlTest);
echo $curlTest->httpGet("http://njit.edu");

$param = array("name" => "Brian", "age" => "26");

echo $curlTest->httpPost("http://web.njit.edu/~bjc36/is218assignments/assignment12/assignment12.php", $param);




?>
