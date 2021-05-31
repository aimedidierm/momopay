# MoMopay
This package helps Rwandan developers who needs to connect they websites to MTN mobile money Api with pure PHP to make make payments through they platform.
## Contact me:
aimedidiermugisha@gmail.com
# Some information about the use:
## Create account
Visit [Ishema Web Dashboard](http://api.ishema.rw) and create acount and you will get and use the token you get from [Ishema Web Dashboard](http://api.ishema.rw) dashboard on profile part.
Make sure to read the documentation.
## Codes:
```php
//codes to create transation
$phone_number= "250788222222";// Where to send your money
$credit_number="250788888888";// The credited number
$token="RXi4f15JBinFpHIE0MwRedIzD6Vurw"; // Your token
$external_id=$exid; //ID your platform ID
$amount=$price;  //The amount 
$callback_url="http://nezagroup.transations.php"; // Call back URL
//$callback_url="http://f8ef02992d04.ngrok.io/includes/transations.php";
$url = 'https://api.ishema.rw/api/v1/payment';
$data = array('token' => $token,'external_id' => $external_id,'phone_number' => $phone_number,'amount' => $amount,'credit_number' => $credit_number,'callback_url' => $callback_url);

$options = array(
    'http' => array(
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data)
    )
 );
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }}

//var_dump($result);
```
## Download this package
Open CMD type:  1. cd C:\xampp\htdocs,2. git clone https://github.com/aimedidierm/momopay.git
Try it!