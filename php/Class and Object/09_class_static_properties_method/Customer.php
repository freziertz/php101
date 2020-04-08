
<?php
/*
PHP allows
you to have properties and methods linked to the class itself rather than to the object.
These properties and methods are defined with the keyword static.

Note that when referring to a static property, we do not use the variable $this.
Instead, we use self::, which is not tied to any instance but to the class itself. In
this last constructor, we have two options. We are either provided with an ID value
that is not null, or we send a null in its place. When the received ID is null, we use
the static property $lastId to know the last ID used, increase it by one, and assign
it to the property $id. If the last ID we inserted was 5, this will update the static
property to 6, and then assign it to the instance property. Next time we create a new
customer, the $lastId static property will be 6. Instead, if we get a valid ID as part
of the arguments, we assign it, and check if the assigned $id is greater than the static
$lastId. If it is, we update it. Let's see how we would use this:


Another benefit of static properties and methods is that we do not need an object to
use them. You can refer to a static property or method by specifying the name of the
class, followed by ::, and the name of the property/method. That is, of course, if the
visibility rules allow you to do that, which, in this case, it does not, as the property is
private. Let's add a public static method to retrieve the last ID:
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
	


