<?php
if(!isset($BASE_PATH)) die("<b>Access Denied</b>");

class Database{
	public $host,$user,$password,$db;
	public $mysqli = null;
	private $message ="";
	private $helper = null;
	
	
	/**
	**
	*/
	
	
	public function __construct($host,$user,$password,$db){
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->db = $db;
		$this->helper = new Helper();
		
		$this->connect();
	}
	
	/**
	**
	*/
	
	
	private function connect(){
		$this->mysqli = new mysqli($this->host,$this->user,$this->password,$this->db);
		if($this->mysqli->connect_errno){
			die("Error: <b>{$mysqli->connect_error}</b>");
		}
		
	}
	
	
	/**
	**
	*/
	
	
	public function placeQuery($sql){
		$result = $this->mysqli->query($sql);
		if($result)
			return true;
		else {
			$this->message = $this->mysqli->error;
			return false;
			}
	}
	
	
	/**
	**
	*/
	
	
	public function insert($input,$table){
		if(gettype($input) != "array" || strlen($table) == 0){
			return false;
		}
		
		$columns = array_keys($input);
		//$this->helper->prettyArray($input);
		//$this->helper->prettyArray($columns);
		
		$sql= "INSERT INTO ".$table." (";
		$valuestring= "(";
		for($i=0; $i<count($columns) ; $i++){
			if($i<count($columns)-1){
				$sql =$sql.$columns[$i].",";
				$valuestring = $valuestring." '".$this->mysqli->escape_string($input[$columns[$i]])."',";
				}
			else{
				$sql =$sql.$columns[$i].")";
				$valuestring = $valuestring." '".$this->mysqli->escape_string($input[$columns[$i]])."')";
				}
		}
		
		$sql =$sql ." VALUES " . $valuestring;
		//echo $sql;
		$result = $this->mysqli->query($sql);
		if($result)
			return true;
		else {
			$this->message = $this->mysqli->error;
			return false;
		}
	}
	
	
	
	/**
	**
	*/
	
	
	public function update($input,$table,$where=" 1 "){
		if(gettype($input) != "array" || strlen($table) == 0){
			return false;
		}
		
		$columns = array_keys($input);
		$this->helper->prettyArray($input);
		$this->helper->prettyArray($columns);
		
		$sql= "UPDATE ".$table." SET ";
		
		for($i=0; $i<count($columns) ; $i++){
			if($i<count($columns)-1){
				$sql =$sql.$columns[$i]." = '".$this->mysqli->escape_string($input[$columns[$i]])."',";
				}
			else{
				$sql =$sql.$columns[$i]." = '".$this->mysqli->escape_string($input[$columns[$i]])."'";
				}
		}
		
		$sql =$sql ." WHERE " . $where;
		echo $sql;
		$result = $this->mysqli->query($sql);
		if($result)
			return true;
		else {
			$this->message = $this->mysqli->error;
			return false;
		}
	}
	
	
	/**
	**
	*/
	public function getRecords($columns,$table,$where=" 1 "){
		if(strlen($columns) == 0 || strlen($table) == 0){
			$this->message = "getRecords():: columns or table name missing";
			return false;
		}
			
		$sql = "SELECT ".$columns." from ".$table." WHERE ".$where;
		//echo $sql;
		$result = $this->mysqli->query($sql);
		if($result){
			$data = array();
			for($i=0; $i<$result->num_rows;$i++){
				$data[] = $result->fetch_assoc();
			}
			
			return $data;
		}
		else {
			$this->message = $this->mysqli->error;
			return false;
			}
	}
	
	
	/**
	**
	*/
	
	
	public function getError(){
		return $this->message;
	}
	
	
	/**
	**
	*/
	
	
	public function close(){
		if($this->mysqli)
			$this->mysqli->close();
	}
	
	
}

?>
