<?php
  $github_sign= $_SERVER['HTTP_X_HUB_SIGNATURE'];
    list($hash_type,$hash_value) = explode('=', $github_sign,2);
    $playload = file_get_contents("php://input");
    $secret = 'PHP1713kangbazi';
    $hash = hash_hmac($hash_type, $playload, $secret);
    if($hash && $hash === $hash_value){
    	echo "认证成功".PHP_EOL;
    	exec("sh github_pull.sh").PHP_EOL;
    	echo date('Y-m-d H:i:s');
    }









?>
