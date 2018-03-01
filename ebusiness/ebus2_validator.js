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
    if (pin == "" ){
        alert("Please ensure PIN is filled out correctly.");
    }
    else if (String(pin).length < 4){
        alert("Please ensure your PIN is 4 digits long.");
    }
    else if (String(pin).length > 4){
        alert("Please ensure your PIN is 4 digits long.")
    }
     else if (email == ""){
        alert("Please ensure you have entered your E-mail.")
    }
    else if (name == ""){
        alert("Please ensure you have entered your name")
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



