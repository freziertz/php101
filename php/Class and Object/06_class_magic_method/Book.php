
<?php
/*
There is a special group of methods that have a different behavior than the normal
ones. Those methods are called magic methods, and they usually are triggered by
the interaction of the class or object, and not by invocations

the interaction of the class or object, and not by invocations. You have already seen
one of them, the constructor of the class,
construct. This method is not invoked
__
directly, but rather used when creating a new instance with new. You can easily
identify magic methods, because they start with __. The following are some of the
most used magic methods:
•
_toString: This method is invoked when we try to cast an object to a
_
string. It takes no parameters, and it is expected to return a string.
•
_call: This is the method that PHP calls when you try to invoke a method
_
on a class that does not exist. It gets the name of the method as a string
and the list of parameters used in the invocation as an array, through the
argument.
•
_get: This is a version of
for properties. It gets the name of the
_
__call
property that the user was trying to access through parameters, and it can
return anything.
*/

class Book{
public $isbn;
public $title;
public $author;
public $available;

public function __construct(int $isbn, string $title, string $author,
int $available = 0) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}

public function __toString() {
$result = '<i>' . $this->title . '</i> - ' . $this->author;
if (!$this->available) {
$result .= ' <b>Not available</b>';
}
return $result;
}

public function getCopy(): bool {
	if ($this->available < 1){
		return false;
	}else{
		$this->available--;
		return true;
		
	}
}
}
	


class customer{
	
}
$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
$book2 = new Book("1984", "George Orwell", 9785267006323);

$string = (string) $book2;

if ($book2->getCopy()) {
echo 'Here, your copy.'. $string;
} else {
echo $string. 'I am afraid that book is not available.';
}

