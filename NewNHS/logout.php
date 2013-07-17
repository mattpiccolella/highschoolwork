<?php
session_start();
unset($_SESSION['inIt']);
if (isset($_SESSION['inIt'])) {
die ("Unable to log out");
}
session_destroy();
?>

<html>
<head>
</head>
<body>
<p> You have successfully logged out. </p>
<button type="button" onClick="location.href='index.html'"> Click Here to Return to Previous Page </button>
</body>
</html>