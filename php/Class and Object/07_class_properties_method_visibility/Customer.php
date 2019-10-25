
<?php
/*
So far, all the properties and methods defined in our Book class were tagged as
public. That means that they are accessible to anyone, or more precisely, from
anywhere. This is called the visibility of the property or method, and there are three
types of visibility. In the order of being more restrictive to less, they are as follows:
• private: This type allows access only to members of the same class. If A and
B are instances of the class C, A can access the properties and methods of B.
• protected: This type allows access to members of the same class and
instances from classes that inherit from that one only. You will see
inheritance in the next section.
• public: This type refers to a property or method that is accessible from
anywhere. Any classes or code in general from outside the class can access it..
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

	public function __toString() {
		$result = '<i>' . $this->id . '</i> - ' . $this->firstname. '</i> ' . $this->surname. '</i> - ' . $this->email;
		return $result;
 }
}
	


