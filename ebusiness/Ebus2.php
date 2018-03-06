<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        <link rel="stylesheet" href="../mystyle.css" type="text/css" />
        <!-- jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif;">
          <!-- Nav Bar inspired by youtube video https://www.youtube.com/watch?v=FEmysQARWFU date accessed - 06/02/2018 23:10 -->
        <header>
            
            <div>
               
               <img src="https://www.ucc.ie/en/media/2017siteassets/images/ucc_logo.svg" style="width:130px;height:50px;" class="logo">
                
                <nav>
                    <ul>
                        <li><a href="../homepage.html">Home</a></li>
                        <li><a href="../cv/cv_page1.html">Curriculum Vitae</a></li>
                        <li><a href="../interests/InterestsHomepage.html">Interests</a></li>
                        <li><a href="../CloudServicesVendor.html">Cloud Services</a></li>
                        <li><a href="ebusiness/Ebus1.php">eBusiness</a></li>
                        <li><a href="https://github.com/117337973/is1113117337973/graphs/commit-activity">GitHub</a></li>
                        <li><a href="https://is1113117337973.herokuapp.com/">Heroku</a></li>
                    </ul>
                </nav>
        
            </div>
    
        </header>
    
        <br/>
        <br/>
        
         <img src="http://ivytechgbl.com/wp-content/uploads/2015/09/cloud_logo_blue_2000.png" style="width:50%;position:absolute;right:0" >
        
        <div class="Info">
            <strong class="SubHeading">Please enter your payment details</strong>
            <br/>
            <br/>
                <form name="customerdetails" action="Ebus3.php" method="POST">

                    <label style="float:left" for="name">Name</label>
                    <input style="float:right;margin-right:55%" type="name" id="name" name="name" placeholder="Enter Your Full Name Here">
                    
                    <br/>
                    <br/>
                    
                    <label style="float:left" for="user_pin">PIN</label>
                    <input style="float:right;margin-right:55%" type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                    <br/>
                    <br/>
                    
                    <label style="float:left" for="email">E-mail</label>
                    <input style="float:right;margin-right:55%" type="email" id="email" name="email" placeholder="example@email.com">
                
                    <br/>
                    <br/>
                
                    <button class="btnNext" type="submit" id="btnPurchase" disabled>Proceed with purchase</button>
                
                </form>
                <br/>
                <br/>
                <button class="btnValidate" onClick="validateDetails()">Validate</button>
  
        </div>
        
        <!-- div to contain logos at bottom of page -->
        <div style="padding-top:325px;">
            
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Salesforce_logo.svg/1200px-Salesforce_logo.svg.png" style="position:absolute;width:15%;height:15%; left:2%">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Cloud9IDE.png" style="position:absolute;width:15%;height:15%;left:30%">
            <img src="https://cdn-images-1.medium.com/max/1600/1*AD9ZSLXKAhZ-_WomszsmPg.png" style="position:absolute;width:15%;height:11.25%;right:30%">
            <img src="http://b-i.forbesimg.com/jeffbercovici/files/2013/07/gmail.png" style="position:absolute;width:15%;height:12.5%;right:2%"> 
            
        </div>
            
        <?php
        // set session variables
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>

</html>