<form action="decode.php" method="POST">
<label ><strong> Enter Token </strong></label>
<textarea placeholder="Token" type="text" name="token" id="token"></textarea>
<button type="submit" name="ubtn"> Submit </button>
</form>

<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if(isset($_SERVER['REQUEST_METHOD']) == 'POST'){
	if(isset($_POST['ubtn'])){
		
		$token  = $_POST['token'];
		
		require 'Handle.php';
		$jwt = new Handle();
		$data = $jwt->decodedData(trim($token));

		
		print_r($data);
  	
	}
}
