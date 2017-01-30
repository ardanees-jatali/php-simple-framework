<?php
session_start();


class Session{
	
	public function __construct(){
		
	}
	
	
	public function createSession($data){
		$_SESSION['username']=$data['username'];
		$_SESSION['ip']=$data['ip'];
		$_SESSION['name']=$data['name'];
		$_SESSION['isLoggedIn']="true";
	}
	
	public function verifySession(){
		if(isset($_SESSION['username']) 
		            && isset($_SESSION['ip']) 
		                && isset($_SESSION['name'])
		                    && isset($_SESSION['isLoggedIn']) 
		                        && $_SESSION['isLoggedIn'] == "true"){
			return true;
		}
		else{
			return false;
		}
	}

    public function destroySession(){
        session_destroy();
    }
}


?>
