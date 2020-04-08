<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;


/* function __autoload($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/src/' . $directory . '.php';
	require_once($filename);
} */

function autoloader($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/src/' . $directory . '.php';
	require_once($filename);
}
spl_autoload_register('autoloader');

//$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
$customer1 = new Customer(5, 'John', 'Doe', 'johndoe@mail.com');

$customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(null, 'Mary', 'Poppins', 'mp@mail.com');
$customer3 = new Customer(7, 'James', 'Bond', '007@mail.com');
$customer4 = new Customer(4, 'Mary', 'Poppins', 'mp@mail.com');
$customer5 = new Customer(10, 'James', 'Bond', '007@mail.com');


echo 'id is 3 ='.$customer1->getId();
echo 'id is null ='.$customer2->getId();
echo 'id is 7 ='.$customer3->getId();
echo 'id is 4 ='.$customer4->getId();
echo 'id is 8 ='.$customer5->getId();

$a = 0.1;
$b = 0.2;

$c = $a + $b ;

//You can reference it either using the class name or an existing instance, from
//anywhere in the code:

echo Customer::getLastId();
echo $customer1::getLastId();
echo 'a + b is '.$c ;

/*
The browser does not complain now, and there is no explicit require_once. Also
remember that the __autoload function has to be defined only once, not in each
file. So from now on, when you want to use your classes, as soon as the class is in
a namespace and file that follows the convention, you only need to define the use
statement. Way cleaner than before, right?
*/

