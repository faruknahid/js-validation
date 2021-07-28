<?php
	
	include 'DbConnect.php';

	function register($username, $password, $firstName, $lastName, $Gender, $DoB, $Religion, $presentAddress, $permanentAddress, $Phone, $Email, $PersonalWebsite) {

		$conn = connect();
		$stmt = $conn->prepare("INSERT INTO USER (username, password, firstName, lastName, Gender, DoB, Religion, presentAddress, permanentAddress, Phone, Email, PersonalWebsite) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ss", $username, $password, $firstName, $lastName, $Gender, $DoB, $Religion, $presentAddress, $permanentAddress, $Phone, $Email, $PersonalWebsite);
		return $res = $stmt->execute();
		
	}	
?>