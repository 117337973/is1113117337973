/* global $ */

function calcSub(){ //function to calculate sub total
    
    //declaring subtotal variable
    var argSubTotal;
    
    //if statement to assign value to variable
    if(document.getElementById('salesforce').checked) {
        argSubTotal = 100;
    }
    
    else if (document.getElementById('cloud9').checked) {
        argSubTotal = 200;
    }
    
     else if (document.getElementById('aws').checked) {
        argSubTotal = 300;
    }
    
    else {
        argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal);
} //end of if


function calcDisVatTotal(parmSubTotal){ //function to calculate discount,vat and total
    
    // declaring our variable 
    var discountAmt;
    var vatAmt;
    var totalPrice;
    
    //calculations to assign values to the variables
    discountAmt = parmSubTotal * 0.05
    vatAmt = (parmSubTotal - discountAmt )* 0.1
    totalPrice = parmSubTotal - discountAmt + vatAmt
    
    display(parmSubTotal,discountAmt,vatAmt,totalPrice)
    
}



function display(parm1 , parm2 , parm3 , parm4){ //fucntion to display subtotal, discount, vat and total
    
    document.getElementById("subtotal").value = "$" + parm1;
    document.getElementById("discount").value = "$" + parm2;
    document.getElementById("vat").value = "$" + parm3;
    document.getElementById("total").value = "$" + parm4;
    
    enablebtnProceed();
}

function enablebtnProceed(){  //enable next button
    $('#btnProceed').prop('disabled', false);
}

function disabledbtnProceed() { //disable next button
    $('#btnProceed').prop('disabled', true);
}    