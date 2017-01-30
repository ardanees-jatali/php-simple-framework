<?php

require_once 'includes/config.php';
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");

if($session->verifySession()){
		header("location:index.php?page=dashboard");
}

if(isset($_POST['username']) && isset($_POST['password'])){
	$username =$_POST['username'];
	$password =$_POST['password'];
	
	$where = "username = '".$username."' AND password= '".$password."'";
	$result = $db->getRecords("username,password","users",$where);
	print_r($result);
	if(count($result)>0){
		//success
		
		$session->createSession(array('username'=>$username,
		        'ip'=>$_SERVER['REMOTE_ADDR'],
                'name'=>'SiteUser'));
        //navigate to dashboard
		header('location:index.php?page=dashboard');
	}
	else{
		//f		ailed
		//include_once "content/error.php";
		header('location:index.php?page=error&message=invalid username or password');
	}
	
}
else{
	//include_once "content/error.php";
	header('location:index.php?page=error&message=invalid params');
}

?>