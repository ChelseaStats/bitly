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

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

###### Copyright

Nah, take it, do whatever you want with it.
