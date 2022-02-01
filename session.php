<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "ann mariya clarine";
$_SESSION["email"] = "annmariyaclarine@gmail.com";
echo "Session variables are set.";
?>
</body>
</html>