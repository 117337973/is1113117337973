<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
            <form action="Ebus3.php" method="POST">
                
                    <label for="user_pin">PIN</label>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlenght="4">
                
                <button type="submit" id="btnPurchase" disabled>Proceed with purchase</button>
                
                
                
            </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
        
        
        <?php
        // set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        
    </body>
    
    
    
</html>