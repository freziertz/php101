<?php
namespace Bookstore\Domain;
/*

*/

class Customer{
	
	private static $lastId = 0;
	private $id;
	private $firstname;
	private $surname;
	private $email;

	public function __construct(int $id = null, string $firstname, string $surname,string $email) {
		if ($id == null) {
			$this->id = ++self::$lastId;
		} else {
			$this->id = $id;
			if ($id <= self::$lastId) {
				$this->id = ++self::$lastId;				
			}else{
				self::$lastId = $id;
			}
		}
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}
	
	public function getId(): int{
		return $this->id;
	}
	public function getFirstname(): string{
		return $this->firstname;
	}
	public function getSurname(): string{
		return $this->surname;
	}
	public function getEmail(): string {
		return $this->email;
	}
	public function setEmail(string $email){
		$this->email = $email;
	}
	
	public static function getLastId(): int {
		return self::$lastId;
	}
	
	

	public function __toString() {
		$result = '<i>' . $this->id . '</i> - ' . $this->firstname. '</i> ' . $this->surname. '</i> - ' . $this->email;
		return $result;
	}
}
	


