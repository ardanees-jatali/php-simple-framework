<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");
$username = "KIU-testxx";
	$password = "test2";
	$email = $username."@gmaixxx.com";
	$height = "23";
	$bio = "N/A";
	
	$query = "DELETE from users";
	
	
	$query = 'INSERT INTO users
						(username,password,email,height,about) 
						VALUES ("'.$username.'","'.$password.'",
						"'.$email.'","'.$height.'","'.$bio.'" )';

/*
if( $db->placeQuery($query)){
	echo "Success";
}else{
	echo $db->getError();
}

echo "<pre>";
//print_r($db->getRecords("SELECT * from users"));
print_r($db->getRecords("*","users"));
echo $db->getError();
echo "</pre>";
*/

$data=array('username'=>'azmatxx',
									'password'=>'password',
									'email'=>'emailxsew',
									'height'=>'15.0',
									'about'=>'emailxxxx',
									);
									
if($db->update($data,"users","UID=11")){
	echo "updated";
}else{
	echo "Failed". $db->getError();
}

?>

<b>Hello world</b>


