<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <style>
    .center {
    text-align: center;
    border: 3px solid green;
    }
        </style>
        
        <!--jQuery-->
        <script src ="https://ajax.googleapps.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src ="text/javascript" src ="cost_calc.js"></script>
        
         
        
    </head>
    <body>
        <h3 Select a product</h3>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
        
        
        <label for="salesforce">
        <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
         Salesforce @ $100
        </Label>
        
        <br/>
        
        <label for="aws">
            <input type ="radio" id="aws" name="product" onCLick="disablebtnProceed()"/>
            AWS @ $300
        </Label>
           
            <br/>
            <br/>
            
        <Label for="subtotal">
            Sub Total
            <input type="text" id="subtotal" value="0.00" readonly/>
        </Label>
            
            <br/>
            
        <Label for="total">
            Total
            <input type="text" id="total" value="0.00" readonly/>
        </Label>    
            
        <br/>    
        <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        
        <button onClick="calSub()">Calculate Cost</button>
        
        <br/>
        
        <a role="button" href="Ebus1.php">Clear Choice</a>
         
        
    </body>
    
    
</html>