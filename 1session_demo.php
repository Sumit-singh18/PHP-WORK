<?php
// Start the session
    session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
// Set session variables
$_SESSION["username"] = "Puneet";
$_SESSION["password"] = "123456";
echo "Session variables are set.";
?>

</body>
</html>