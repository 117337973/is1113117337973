<?php
session_start();
?>
<DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="../mystyle.css" type="text/css" />
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
            
            <strong class="SubHeading">Purchase Receipt</strong>
            
            <br/>
            <br/>
            
            <?php
            //echo session variables
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            ?>
            
                
                    <?php
                     //echo session variables that were set on previous page
                    echo "Name: " . $_SESSION["name"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                    <?php
                    //echo session variables that were set on previous page
                    echo "Email: " . $_SESSION["email"];
                    ?>
                    
                    <br/>
                    <br/>
                    
                     <?php
                     //echo session variables that were set on previous page
                      echo "Total Price: " . $_SESSION["total"];
                     ?>
                
                    <br/>
                    <br/>
                 
                    
                     
                    <p style="font-size:250%;position:absolute">Thank you for your purchase!</p>
                   <a href="Ebus1.php" class="btnEbusHome" style="margin-top:12.5%;position:absolute;">Back to Shop</a>  
                    
                    
        </div>
        
       
        
        <!-- container for logos at bottom of page -->
        <div style="margin-top:500px;">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Salesforce_logo.svg/1200px-Salesforce_logo.svg.png" style="position:absolute;width:15%;height:15%; left:2%">
             <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Cloud9IDE.png" style="position:absolute;width:15%;height:15%;left:30%">
             <img src="https://cdn-images-1.medium.com/max/1600/1*AD9ZSLXKAhZ-_WomszsmPg.png" style="position:absolute;width:15%;height:11.25%;right:30%">
             <img src="http://b-i.forbesimg.com/jeffbercovici/files/2013/07/gmail.png" style="position:absolute;width:15%;height:12.5%;right:2%"> 
             
        </div> 
        
        
      
    </body>
    
</html>    