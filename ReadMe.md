###### Bitly


> get Bit.ly short url with cURL with this class.

###### Usage

    <?php
    // include class
    include('class.Bitly.php');
    // have some url
    $url	  = 'http://www.google.co.uk';
    // instantiate class with your API username and key
    $class  = new getBitly('user','key');
    // pass the class your url to the method, get the short one back
    $return = $class->getUrl('some url');
    // print it d'uh
    print $return;
    ?>
    
###### Contributions

It's on Github for a reason, pull requests welcome
  
###### Warranty

The software is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.

###### Copyright

Nah, take it, do whatever you want with it.
