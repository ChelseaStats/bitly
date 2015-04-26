<?php
/* 
 * $url	   = 'http://www.google.co.uk';
 * $class  = new getBitly(token');
 * $return = $class->getUrl($url);
 * print $return;
 */
class getBitly {
	
	function __construct($token) {
		
		$this->token = $token;
	}

	/**
	 * Converts URL to a bitly URL &format=txt&
	 *
	 * @param  string $url
	 * @return string $url
	 */
	function goBitly( $url ) {
		$encoded_url = urlencode( $url );
		$site_url    = ( "https://api-ssl.bitly.com/v3/shorten?format=txt&access_token={$this->token}&longUrl=$encoded_url" );
		$ch = curl_init($site_url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		$bitly_return = curl_exec($ch);

		if ( $bitly_return !='' ) {
			$url = $bitly_return;
		}

		return $url;
	}
}
?>
