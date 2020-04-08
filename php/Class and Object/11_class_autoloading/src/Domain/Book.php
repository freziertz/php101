<?php
namespace Bookstore\Domain;
/*
You know that you cannot have two classes with the same name, since PHP would
not know which one is being referred to when creating a new object. To solve this
issue, PHP allows the use of namespaces, which act as paths in a filesystem. In this
way, you can have as many classes with the same name as you need, as long as
they are all defined in different namespaces. It is worth noting that, even though
namespaces and the file path will usually be the same, this is enforced by the
developer rather than by the language; you could actually use any namespace that
has nothing to do with the filesystem.
Specifying a namespace has to be the first thing that you do in a file. In order to do
that, use the namespace keyword followed by the namespace. Each section of the
namespace is separated by \, as if it was a different directory. If you do not specify
the namespace, the class will belong to the base namespace, or root.

The preceding line of code sets the namespace of our classes as Bookstore\Domain.
The full name of our classes then is Bookstore\Domain\Book and Bookstore\
Domain\Customer. If you try to access the init.php file from your browser, you will
see an error saying that either the class Book or the class Customer were not found.
But we included the files, right? That happens because PHP thinks that you are
trying to access \Book and \Customer from the root. Do not worry, there are several
ways to amend this.
One way would be to specify the full name of the classes when referencing
them, that is, using $customer = new Bookstore\Domain\Book(); instead
of $book = new Book();. But that does not sound practical, does it?
Another way would be to say that the init.php file belongs to the BookStore\
Domain namespace. That means that all the references to classes inside init.php
will have the BookStore\Domain prefixed to them, and you will be able to use Book
and Customer. The downside of this solution is that you cannot easily reference
other classes from other namespaces, as any reference to a class will be prefixed
with that namespace.
The best solution is to use the keyword use. This keyword allows you to specify
a full class name at the beginning of the file, and then use the simple name of the
class in the rest of that file.

In the preceding file, each time that we reference Book or Customer, PHP will know
that we actually want to use the full class name, that is, with Bookstore\Domain\
prefixed to it. This solution allows you to have a clean code when referencing those
classes, and at the same time, to be able to reference classes from other namespaces
if needed.
But what if you want to include two different classes with the same name in the
same file? If you set two use statements, PHP will not know which one to choose,
so we still have the same problem as before! To fix that, either you use the full class
name—with namespace—each time you want to reference any of the classes, or you
use aliases.

Imagine that we have two Book classes, the first one in the namespace Bookstore\
Domain and the second one in Library\Domain. To solve the conflict, you could do
as follows:
use Bookstore\Domain\Book;
use Library\Domain\Book as LibraryBook;
The keyword as sets an alias to that class. In that file, whenever you reference the
class LibraryBook, you will actually be referencing the class Library\Domain\Book.
And when referencing Book, PHP will just use the one from Bookstore. Problem
solved!

*/


class Book{
	private $isbn;
	private $title;
	private $author;
	private $available;

	public function __construct(int $isbn, string $title, string $author,int $available = 0) {
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->available = $available;
	}

	public function getIsbn(): int {
		return $this->isbn;
	}
	public function getTitle(): string {
		return $this->title;
	}
	public function getAuthor(): string {
		return $this->author;
	}
	public function isAvailable(): bool {
		return $this->available;
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

	public function addCopy() {
		$this->available++;
	}
}
	


