<?php

require_once 'includes/config.php';
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");




//$helper->prettyArray($_GET);

//routes
$HEADER= "header/static.php";
$CONTENT ="content/home.php";
$FOOTER = "footer/static.php";

if(isset($_GET['page']) && $_GET['page'] == "store"){
	$CONTENT= 'content/store.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "contact"){
	
	$CONTENT= 'content/contact.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "about"){
	$CONTENT= 'content/about.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "404"){
	$CONTENT= 'content/404.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "error"){
	$CONTENT= 'content/error.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "login"){
	if($session->verifySession()){
		header("location:index.php?page=dashboard");
	}
    $HEADER="header/common.php";
	$CONTENT= 'content/login.php';
}else if(isset($_GET['page']) && $_GET['page'] == "dashboard"){
	if(!$session->verifySession()){
		header("location:index.php?page=error&message=Login again!");
	}
	$HEADER="header/user.php";
	$CONTENT= 'usercontent/index.php';
}
else if(isset($_GET['page']) && $_GET['page'] == "logout"){
	if($session->verifySession()){
		$session->destroySession();
		header("location:index.php?page=error&message=Successfully Logged out!");
	}
}


require_once $HEADER;
require_once $CONTENT;
require_once $FOOTER;
//routing
//api/webservices



$db->close();
?>
