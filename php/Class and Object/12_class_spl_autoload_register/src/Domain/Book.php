<?php
namespace Bookstore\Domain;
/*
The __autoload solution looks pretty good, but it has a small problem: what if our
code is so complex that we do not have only one convention, and we need more
than one implementation of the __autoload function? As we cannot define two
functions with the same name, we need a way to tell PHP to keep a list of possible
implementations of the autoloader, so it can try all of them until one works.
That is the job of spl_autoload_register. You define your autoloader function
with a valid name, and then invoke the function spl_autoload_register, sending
the name of your autoloader as an argument. You can call this function as many
times as the different autoloaders you have in your code. In fact, even if you have
only one autoloader, using this system is still a better option than the __autoload
one, as you make it easier for someone else who has to add a new autoloader later:
`
function autoloader($classname) {
$lastSlash = strpos($classname, '\\') + 1;
$classname = substr($classname, $lastSlash);
$directory = str_replace('\\', '/', $classname);
$filename = __DIR__ . '/' . $directory . '.php';
require_once($filename);
}
spl_autoload_register('autoloader');

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
	


