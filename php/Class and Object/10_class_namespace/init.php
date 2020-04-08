<?php
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

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

//You can reference it either using the class name or an existing instance, from
//anywhere in the code:
$a = 0.1;
$b = 0.2;
$c = $a + $b;

echo Customer::getLastId();
echo $customer1::getLastId();

echo ' a + b is '.$c;

