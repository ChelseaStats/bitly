<?php
/* 
 * $url	   = 'http://www.google.co.uk';
 * $class  = new getBitly('user','key');
 * $return = $class->getUrl('some url');
 *
 * print $return;
 */

class getBitly {
	
	function __construct($user,$key) {
		
		$this->apiuser = $user;
		$this->apikey  = $key;
		
		
	}


	function getUrl($url) {

					  
			// you dont need to change below this line					
	                $site_url=("http://api.bit.ly/shorten?version=2.0.1&longUrl=".$url."&login=".$this->apiuser."&apiKey=".$this->apikey); 
			$ch = curl_init();
			$timeout = 5; // set to zero for no timeout
			curl_setopt ($ch, CURLOPT_URL, $site_url);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			ob_start();
			curl_exec($ch);
			curl_close($ch);
			$bitlyurl=ob_get_contents();
			ob_end_clean();
			$bitlycontent = json_decode($bitlyurl,true);
			$bitlyerror = $bitlycontent["errorCode"];
		
			if ($bitlyerror == 0){
				$bitlyurl = $bitlycontent["results"][$url]["shortUrl"];
				}
			else $bitlyurl = $url;
			
	 return $bitlyurl;
	}
}
?>
