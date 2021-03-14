<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Username is " . $_SESSION["username"] . ".<br>";
echo "password is " . $_SESSION["password"] . ".";
?>

</body>
</html>