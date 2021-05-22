<?php

class User {

	private $userId;
	private $login;
	private $password;
	private $registrationDate;

	public function __construct($login = "", $password = "") {
		$this->setLogin($login);
		$this->setPassword($password);
	}

	public function getUserId(){
		return $this->userId;
	}

	public function setUserId($value){
		$this->userId = $value;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($value){
		$this->login = $value;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($value){
		$this->password = $value;
	}

	public function getRegistrationDate(){

		return $this->registrationDate;
	}

	public function setRegistrationDate($value){

		$this->registrationDate = $value;
	}

	public function loadById($id) {
		$sql = new Sql();
		$result = $sql->select("SELECT * FROM users WHERE userId = :ID",
			array(
				":ID"=>$id 
			)
		);
	
		if (count($result) > 0) {
			$this->setData($result[0]);
		}
	}

	public static function getList() {
		$sql = new Sql();

		return $sql->select("SELECT * FROM users ORDER BY login");
	}

	public static function search($login) {
		$sql = new Sql();

		return $sql->select("SELECT * FROM users WHERE login LIKE :SEARCH ORDER BY login", array(
				":SEARCH"=>"%" . $login . "%"
			)
		);
	}

	public function login($login, $password) {
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM users WHERE login = :LOGIN AND password = :PASSWORD",
			array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
			)
		);

		if (count($result) > 0) {
			$this->setData($result[0]);
		} else {
			throw new Exception("Invalid credentials!");	
		}
	}

	public function setData($data) {
		$this->setuserId($data['userId']);
		$this->setLogin($data['login']);
		$this->setPassword($data['password']);
		$this->setRegistrationDate(new DateTime($data['registrationDate']));
	}

	public function insert() {
		$sql = new Sql();
		$result = $sql->select("CALL sp_users_insert(:LOGIN, :PASSWORD)",
			array(
				":LOGIN"=>$this->getLogin(),
				":PASSWORD"=>$this->getPassword()
			)
		);

		if (count($result) > 0) {
			$this->setData($result[0]);
		}
	}
	
	public function update($login, $password) {
		$this->setLogin($login);
		$this->setPassword($password);

		$sql = new Sql();

		$sql->query("UPDATE users SET login = :LOGIN, password = :PASSWORD WHERE userId = :ID",
			array(
				":LOGIN"=>$this->getLogin(),
				":PASSWORD"=>$this->getPassword(),
				":ID"=>$this->getuserId()
			)
		);
	}
	
	public function delete() {
		$sql = new Sql();

		$sql->query("DELETE FROM users WHERE userId = :ID",
			array(
				":ID"=>$this->getuserId()
			)
		);

		$this->setuserId(0);
		$this->setLogin("");
		$this->setPassword("");
		$this->setRegistrationDate(new DateTime());
	}

	public function __toString() {
		return json_encode(
			array(
				"userId"=>$this->getuserId(),
				"login"=>$this->getLogin(),
				"password"=>$this->getPassword(),
				"registrationDate"=>$this->getRegistrationDate()->format("d/m/Y H:i:s")
			)
		);
	}
}
