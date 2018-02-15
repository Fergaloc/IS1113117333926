<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        
        <?php
        //Echo Session Varaibles that were set on a previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>
    
