/* global $ */

function validateDetails() {
    
    // Declaring our variables for pin and email
    var pin;
    pin = document.getElementById("user_pin").value;
    
    var email;
    email= document.getElementById("email").value;
    
    var name;
    name=document.getElementById("name").value;
    
    
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
    }
    
    
    
    
   
    
    
    
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disabledbtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}



