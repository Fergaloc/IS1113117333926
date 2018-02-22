/* global $ */

var argSubTotal;
var Discount;
var Vat;
var Total;


function calcSub(){
    
     if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
     }else if(document.getElementById('gmail').checked) {
      argSubTotal = 500;
    }else if(document.getElementById('cloud9').checked) {
        argSubTotal = 400;
    }else if (document.getElementById('aws').checked) 
        argSubTotal = 300;
    
    calcDisVatTotal();
}
        
  

function calcDisVatTotal(parmSubTotal){
    
     if(document.getElementById('salesforce').checked) {
      Discount = 5;
      Vat = 9.5;
      Total = 104.5
      
     }else if(document.getElementById('gmail').checked) {
     Discount= 25;
     Vat = 47.5;
     Total = 522.5
    }else if(document.getElementById('cloud9').checked) {
        Discount= 20;
        Vat = 38;
        Total = 418
    }else{
        Discount = 15;
        Vat = 27.5;
        Total = 302.5
    }
        display(argSubTotal,Discount,Vat,Total);
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
