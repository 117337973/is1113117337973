/* global $ */

function validateDetails() {
    
    // Declaring our variables for pin, email and name
    var pin;
    pin = document.getElementById("user_pin").value;
    
    var email;
    email= document.getElementsByName("email").value;
    
    var name;
    name=document.getElementsByName("name").value;
    
    
    // if statement to validate details
    if (pin == "" || email == "" || name == ""  ){
        alert("Please ensure PIN is filled out correctly.");
    }
    else{
        enablebtnPurchase();
    } // end of if
}

function enablebtnPurchase(){ //enable next button
    $('#btnPurchase').prop('disabled', false);
}

function disabledbtnPurchase() { //disable next button
    $('#btnPurchase').prop('disabled', true);
}



