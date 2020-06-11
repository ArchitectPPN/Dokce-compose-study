<?php
$code = $_GET['code'];

if(empty($code)){
	echo  json_encode(['msg' => 'fail', 
			    'code' => 'code cant\'t empty']);
	die;
}

echo json_encode(['msg' => 'success', 'code' => 200, 'data' => []]);
die;
