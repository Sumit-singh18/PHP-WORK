<?php
session_start();
?>
<html>
    <head>
    </head>
    <body>
        <h2>Add the number using array in php</h2>
        <form action='' method='post'>
            <p>
                <label for="strFirstname">Type number to add: </label>
                <input type='text' name='strNumber' id='strNumber'/>
            </p>
            <p>
                <input type='submit' name='submit' value='Add' />
            </p>
            <p>
                <input type='submit' name='calculate' value='Compute' />
                <input type='submit' name='clear' value='clear' />
            </p>
            <?php
                if (isset($_POST['submit'])) {
                    if(!array_key_exists("numbers", $_SESSION)) {
                        $_SESSION["numbers"] = array();
                    }

                    array_push($_SESSION["numbers"], $_POST["strNumber"]);
                }

                if(isset($_POST['clear'])) {
                    $_SESSION["numbers"] = array();
                }

                if(array_key_exists("numbers", $_SESSION)) {
                    echo implode("+", $_SESSION["numbers"]);
                }

                if(isset($_POST['calculate'])) {
                    if(array_key_exists("numbers", $_SESSION)) {
                        $expression = implode("+", $_SESSION["numbers"]);
                        eval( '$result = (' . $expression . ');' );
                        echo "=" . $result;
                    }
                }
            ?>
        </form>
    </body>
</html>