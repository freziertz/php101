<?php
$submitted = isset($_POST['username']) && isset($_POST['password']);
if ($submitted) {
setcookie('username', $_POST['username']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bookstore</title>
</head>
<body>
<?php if ($submitted): ?>
<p>Form submitted? <?php echo (int) $submitted; ?></p>
<p>Your login info is</p>
<ul>
<li><b>username</b>: <?php echo $_POST['username']; ?></li>
<li><b>password</b>: <?php echo $_POST['password']; ?></li>
<?php else: ?>
<p>You did not submit anything.</p>
<?php endif; ?>
</ul>
</body>
</html>