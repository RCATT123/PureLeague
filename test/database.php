<?php

include_once 'db.php';

 class DatabaseLayer{ 			
	
	public function __constructor(){
	}
	
	public function isUserExist($email, $password){
		$dbObject = new DbConnect();
		$sql = "Select * from tbl_users where username = $email and password = $password limit 1";
		$result = mysqli_query($dbObject->getDb(), $sql);
		if(count($result) > 0){
			return true;
		}
		return false;		
	}
	
	public function addNewUser($email, $password){
		$dbObject = new DbConnect();
		if(!$this->isUserExist($email, $password)){
			$sql = "Insert into tbl_users (email, password) values ('$email', '$password')";
			$result = mysqli_query($dbObject->getDb(), $sql);
			if($result){
				return true;
		    }
		    return false;		
		}
	}
	
}
	
?>