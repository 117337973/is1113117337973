/* global $ */



// Declaring variables for pin, email and name
  var pin = document.getElementById("user_pin").value;
  
  var  email = document.forms["customerdetails"]["email"].value;
  
  var  name = document.forms["customerdetails"]["name"].value;




 if(pin == "" || email == "" || name == ""){
        disabledbtnPurchase();
        alert("Please ensure all details are filled out");
 }
 else{
        enablebtnPurchase();
    }  // end of if
  

function validateDetails() {
    
    // if statement to validate details
      if(pin == ""){
        disabledbtnPurchase();
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        disabledbtnPurchase();
        alert("Please make sure your PIN is accurate");
        
    }
    
    else if(name == ""){
        alert("Please enter your name");
        
    }
    
    else if(email == ""){
        alert("Please enter your email");
       
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


   
    
