<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body style="background-color:AliceBlue; text-align:center" >
        
        <h4>RECEIPT</h4>
        <h3>Billing Details</h3>
        
        <?php
        //Echo Session Varaibles that were set on a previous page
        echo  $_SESSION["FullName"] .".";
        echo  "<br/>";
        echo $_SESSION["Address1"]. ".";
        echo "<br/>";
         echo $_SESSION["Address2"]. ".";
         echo "<br/>";
         echo "<h3>Price Breakdown</h3>";
        echo "Total is " . $_SESSION["total"] . ".";
        echo "<br/>";
        echo "Total Vat is" . $_SESSION["Vat"] .".";
        ?>
        
        
        
        
        
    </body>
</html>
    
