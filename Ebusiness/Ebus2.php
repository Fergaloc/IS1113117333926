<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus_validator.js"></script>
        
        
             <style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: CadetBlue;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: Gold;
}

.active {
    background-color: #4CAF50;
}
body {
    background-color: AliceBlue;
}
</style>
    
        
    </head>
    
    
    <body style="background-color:AliceBlue; text-align:center" >
        
                          <ul>
  <li><a class="active" href="../homepage.html">Home</a></li>
  <li><a href="../cv_page1.html">CV</a></li>
  <li><a href="../Interests/Sport.html">Interests</a></li>
  <li><a href="../Ebusiness/Ebus1.php">Ebusiness</a></li>
  </ul>
    
        
        <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                                
                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">

                <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <br/>
            <button onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["FullName"] = $_POST["FullName"];
            $_SESSION["Vat"] = $_POST["Vat"];
            $_SESSION["Email"] = $_POST["Email"];
            $_SESSION["Address1"] = $_POST["Address1"];
            $_SESSION["Address2"] = $_POST["Address2"];
            
            ?>
        
    </body>
</html>

