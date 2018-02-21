/* global $ */

function calcSub(){

    var Discount
    var argTotal
    var vat
    var argSubTotal;
    
    
    
     if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    
     }else if(document.getElementById('Gmail').checked {
      argSubTotal = 500;
    
 }else if(document.getElementById('cloud9').checked {
        argSubTotal = 400;
    
 }else if(document.getElementById('aws').checked {
        argSubTotal = 300
    
    
    display(argSubTotal);
}







function display(parm1){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("total").value = parm1;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}
    
    
    
    
    
