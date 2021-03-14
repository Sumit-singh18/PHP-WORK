<?php
//get result from previous page
//print_r($_GET);
//die;
?>
<html>
    <head>
        <title>display</title>
    </head>
    <body>
        <h1>Display result</h1>
        <?php
            $x = $_GET["first"];
            $y = $_GET['second'];
            $z = $x+$y;
        //<center><h2>The Name of the person is <?php echo $first." ".$last;</h2><center>
            echo "<center><h2>The addition of two numbers are ".$z."</h2></center>";
        ?>
    </body>
</html>