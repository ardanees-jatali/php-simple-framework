<?php

$response=array('status'=>'false','message'=>'Invalid Route Access');

require_once 'includes/config.php';
if(!isset($BASE_PATH)){
	$response['message']='Access Denied';
	die(json_encode($response));
}


if(isset($_POST['route'])) {
	
	if($_POST['route'] == "echo"){
		$response['status']= 'true';
		$response['message']='Echo Route..';
		$response['_POST']=$_POST;
		$response['_GET']=$_GET;
		
	}
	else if($_POST['route'] == "signup"){
		if(isset($_POST['username']) && isset($_POST['password'])
		            && isset($_POST['email']) && isset($_POST['height'])
		            && isset($_POST['about'])){
			
			
			$where= "username='{$_POST['username']}' OR email='{$_POST['email']}'";
			$result= $db->getRecords("username,password","users",$where);
			if(count($result)>0){
				$response['message']="Username or Email already exists!";
			}
			else{
				//
				$data = array('username'=>$_POST['username'],
				                        'password'=>$_POST['password'],
				                        'email'=>$_POST['email'],
				                        'about'=>$_POST['about'],
				                        'height'=>$_POST['height']);
                $result = $db->insert($data,"users");
                if($result){
                    $response['status']="true";
                    $response['message']="Successfully Registered!";
                    $response['userdata']=$data;
                }else{
                    $response['message']="Failed to Register!";
                }
				
			}
			
		}else{
            $response['message']="Invalid Params!";
        }
		
	}
}


echo json_encode($response);
?>
