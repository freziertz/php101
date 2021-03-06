<?php
class Book{
public $isbn;
public $title;
public $author;
public $available;

public function __construct(int $isbn, string $title, string $author,
int $available) {
$this->isbn = $isbn;
$this->title = $title;
$this->author = $author;
$this->available = $available;
}

public function getPrintableTitle(): string {
$result = '<i>' . $this->title
. '</i> - ' . $this->author;
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
$book = new Book("1984", "George Orwell", 9785267006323, 12);

if ($book->getCopy()) {
echo 'Here, your copy.';
} else {
echo 'I am afraid that book is not available.';
}

