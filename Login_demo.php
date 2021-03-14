<?php
//Login Form
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <center> <h1>Enter user name and password to login</h1>
       <form action="" method="get">
            <label>User Name:</label>
            <input type = "text" name = "first"><br><br>
            <label>Password:</label>
            <input type = "password" name = "second"><br><br>
            <input type = "submit" name = "submit">
        </form> </center>
        <?php
           if(isset($_GET["submit"])){
            $x = $_GET["first"];
            $y = $_GET['second'];
            $z = $x+$y;
        //<center><h2>The Name of the person is <?php echo $first." ".$last;</h2><center>
            echo "<center><h2>The addition of two numbers are ".$z."</h2></center>";
            }
        ?>
    </body>
</html>