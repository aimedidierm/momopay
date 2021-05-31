<?php
if(isset($_POST['submit'])){
$phone_number=$_POST['phone'];
$credit_number=$_POST['creditnumber'];
$amount=$_POST['amount'];
$exid = rand(20000,29999);
$token="RXi4f15JBinFpHIE0MwRedIzD6Vurw"; // Your token
$external_id=$exid; //ID your platform ID
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
if ($result === FALSE) { /* Handle error */ }
}

//var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MoMopay</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<body>
	<header class="top-header">
		<div class="container">
			<div class="row">
                   <div class="modal-dialog">
                                    <div class="modal-content">
                                    	<div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Make transaction</h4>
                                        </div>
                                        <div class="modal-body">
                                        	<form role="form" method="post">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Phone number" name="phone" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Credit number" name="creditnumber" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Amount" name="amount" autofocus>
                                                </div>
                                                <button type="submit" class="btn btn-lg btn-success btn-block">Send</button>
                                            </fieldset>
                                        </form>
                                        </div>
                                    </div>
                    </div>
                    </div>
                </div>
                </div>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	
</body>
</html>
