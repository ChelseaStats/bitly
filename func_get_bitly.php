
function getBitlyUrl($url) {
					// fill up this 2 lines below with your login and api key
					$bitlylogin='xx';
				  $bitlyapikey='xx';
				  
					// you dont need to change below this line					
          $site_url=("http://api.bit.ly/shorten?version=2.0.1&longUrl=".$url."&login=".$bitlylogin."&apiKey=".$bitlyapikey); 
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
