
<?php
/*
Encapsulation
When working with objects, one of the most important concepts you have to know
and apply is encapsulation. Encapsulation tries to group the data of the object
with its methods in an attempt to hide the internal structure of the object from the
rest of the world. In simple words, you could say that you use encapsulation if the
properties of an object are private, and the only way to update them is through
public methods.
The reason for using encapsulation is to make it easier for a developer to make
changes to the internal structure of the class without directly affecting the external
code that uses that class. For example, imagine that our Customer class, that now has
two properties to define its name—firstname and surname—has to change. From
now on, we only have one property name that contains both. If we were accessing its
properties straightaway, we should change all of those accesses!
Instead, if we set the properties as private and enable two public methods,
getFirstname and getSurname, even if we have to change the internal structure of
the class, we could just change the implementation of those two methods—which is
at one place only—and the rest of the code that uses our class will not be affected at
all. This concept is also known as information hiding..
*/

class Customer{
	private $id;
	private $firstname;
	private $surname;
	private $email;

	public function __construct(int $id, string $firstname, string $surname,string $email) {
		$this->id = $id;
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}
	
	public function getId(): id{
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
	
	

	public function __toString() {
		$result = '<i>' . $this->id . '</i> - ' . $this->firstname. '</i> ' . $this->surname. '</i> - ' . $this->email;
		return $result;
	}
}
	


