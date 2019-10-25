<?php require_once 'functions.php';
$looking = isset($_GET['title']) || isset($_GET['author']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<p>

<p><?php echo loginMessage(); ?></p>
</p>
<?php 
$booksJson = file_get_contents('books.json');
//$booksJson = file_get_contents(__DIR__, '/books.json');
$books = json_decode($booksJson, true);
?>
<ul>
<?php foreach ($books as $book): ?>
<li><?php echo printableTitle($book); ?> </li>
<?php endforeach; ?>
</ul>
</body>
</html>