<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
//session_unset();
//echo "Session is unset";

// destroy the session
session_destroy();
echo "Session is destroyed";
?>

</body>
</html>