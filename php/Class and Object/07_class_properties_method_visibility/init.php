<?php
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$book1 = new Book(97852,"PHP Book", "George Orwell",12);
$book2 = new Book(97800,"To Kill a Mockingbird", "Harper Lee", 2);
$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');

$book2->available = 2; // OK
$customer1->id = 3; // Error!


/*
Conventions for classes
When working with classes, you should know that there are some
conventions that everyone tries to follow in order to ensure clean code
which is easy to maintain. The most important ones are as follows:
• Each class should be in a file named the same as the class along
with the .php extension
• Class names should be in CamelCase, that is, each word should
start with an uppercase letter, followed by the rest of the word in
lowercase
• A file should contain only the code of one class
• Inside a class, you should first place the properties, then the
constructor, and finally, the rest of the methods
*/