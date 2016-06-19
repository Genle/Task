
<?php
class User{

	private $firstname;
	private $lastname;
	private $email;
	private $username;
	private $password;


	public _contruct($firstname, $lastname, $email, $username, $password){
		$this.$firstname = $firstname;
		$this.$lastname = $lastname;
		$this.$email = $email;
		$this.$username = $username;
		$this.$password = $password;
	}

	public function getFirstname(){
		return $this.$firstname;
	}

	public function getLastname(){
		return $this.$lastname;
	}

	public function getEmail(){
		return $this.$email;
	}

	public function getUsername(){
		return $this.$username;
	}

	public function getPassword(){
		return $this.$password;
	}

	public function setFirstname($value){
		$this.$firstname = $value;
	}

	public function setLastname($value){
		return $this.$lastname = $value;
	}

	public function setEmail($value){
		return $this.$email = $value;
	}

	public function setUsername($value){
		return $this.$username = $value;
	}

	public function setPassword($value){
		return $this.$password = $value;
	}

	public function getUser(){
		return $this;
	}



}