/* global $ */

var argSubTotal;
var DiscountAmt;
var VatAmt;
var totalPrice;


function calcSub(){
    
     if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
     }else if(document.getElementById('gmail').checked) {
      argSubTotal = 50;
    }else if(document.getElementById('cloud9').checked) {
        argSubTotal = 40;
    }else if (document.getElementById('aws').checked) 
        argSubTotal = 300;
    
    calcDisVatTotal();
}
        
  
/* Finding the price breakdown of each product*/
function calcDisVatTotal(parmSubTotal){
    
     if(document.getElementById('salesforce').checked) {
      DiscountAmt = 5;
      VatAmt = 9.5;
      totalPrice = 104.5
      
     }else if(document.getElementById('gmail').checked) {
     DiscountAmt= 2.5;
     VatAmt = 4.75;
     totalPrice = 52.25
    }else if(document.getElementById('cloud9').checked) {
        DiscountAmt= 2;
        VatAmt = 3.8;
        totalPrice = 41.8
    }else{
        DiscountAmt = 15;
        VatAmt= 27.5;
        totalPrice = 302.5
    }
        display(argSubTotal,DiscountAmt,VatAmt,totalPrice);
        enablebtnProceed();
}
    
      

function display(parm1,parm2,parm3,parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("Vat").value = parm3;
    document.getElementById("total").value = parm4;
    
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}



function validateDetails2(){
    
    var name;
    
    name = document.getElementById("FullName").textContent;
    
    if (name==""){
        alert("Please enter your Name");

        }
        else{ enablebtnProceed()
    }
}