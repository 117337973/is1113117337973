<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <link rel="stylesheet" href="../mystyle.css" type="text/css" />
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        
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
                        <li><a href="Ebus1.php">eBusiness</a></li>
                        <li><a href="https://github.com/117337973/is1113117337973/graphs/commit-activity">GitHub</a></li>
                        <li><a href="https://is1113117337973.herokuapp.com/">Heroku</a></li>
                    </ul>
                </nav>
        
            </div>
    
        </header>
         
        <br/>
        <br/>
         
         <!-- company logo -->
         <div class="container">
            
            <img src="http://ivytechgbl.com/wp-content/uploads/2015/09/cloud_logo_blue_2000.png" style="width:100%;" >
            
        </div>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <!-- company introduction -->
        <div class="Info">
            <p>
                <strong class="SubHeading">Company F - A Short Welcome...</strong>
                <br/>
                <br/>
                We are Company F and welcome to our shop. We are a cloud services vendor, who supply the latest of cloud computing offerings to our customers. If you wish to learn more information about the different types of products we offer please don't hesitate to visit our <a href="../CloudServicesVendor.html">information page.</a>
            </p>
          
        </div>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <!-- company shop -->
        <div class="shop ">
             <strong class="SubHeading">Select a Product</strong>
             <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/83/Salesforce_logo.svg/1200px-Salesforce_logo.svg.png" style="position:absolute;left:1%;width:30%;height:30%;">
             <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Cloud9IDE.png" style="position:absolute;right:1%;width:30%;height:30%;">
             <img src="https://cdn-images-1.medium.com/max/1600/1*AD9ZSLXKAhZ-_WomszsmPg.png" style="position:absolute;left:1%;width:30%;height:22.5%;padding-top:400px">
             <img src="http://b-i.forbesimg.com/jeffbercovici/files/2013/07/gmail.png" style="position:absolute;right:1%;width:30%;height:25%;padding-top:400px">
            <br/>
            <br/>
            <br/>
            
            <form method="POST" action="Ebus2.php">
            
                <label for="salesforce" style="float:left;padding-left:25%">
                    <input type="radio" id="salesforce" name="product" checked onClick="disabledbtnProceed()"/>
                    SalesForce @ $100
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="cloud9">
                    <input type="radio" id="cloud9" name="product" onClick="disabledbtnProceed()"/>
                    Cloud9 @ $200
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="aws">
                    <input type="radio" id="aws" name="product" onClick="disabledbtnProceed()"/>
                    Amazon Web Services @ $300
                </label>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="gmail">
                    <input type="radio" id="gmail" name="product" onClick="disabledbtnProceed()"/>
                    Gmail @ $400
                </label>
            
                <br/>
                <br/>
                <br/>
            
                <label style="float:left;padding-left:25%" for="subtotal">
                    Sub Total
                </label>
                <input style="float:right; margin-right:35%; width:10%" type="text" id="subtotal" value="0.00" readonly/>
            
                <br/>
                <br/>
                
                <label style="float:left;padding-left:25%" for="discount">
                    Discount @ 5%
                </label>
                <input style="float:right; margin-right:35%; width:10%" type="text" id="discount"  value="0.00" readonly/>
                
                <br/>
                <br/>
                
                 <label style="float:left;padding-left:25%" for="vat">
                    VAT @ 10%
                </label>
                <input style="float:right; margin-right:35%;width:10%" type="text" id="vat" value="0.00" readonly/>
                
                 <br/>
                 <br/>
                 
                 <label style="float:left;padding-left:25%" for="total">
                    Total
                </label>
                <input style="float:right; margin-right:35%;width:10%" type="text" id="total" name="total" value="0.00" readonly/>
                
                <br/>
                <br/>
                <button style="float:left;margin-left:25%" class="btnNext" type="submit" id="btnProceed" disabled>Add to shopping cart</button> 
                
                <br/>
                <br/>
        
            </form>
            
            <br/>
            <br/>
            
            <div style="margin-right:7.5%">
                
                <button class="btnCost" onClick="calcSub()">Calculate Cost</button>
                <a style="padding-left:2%" class="btnClear" role="button" href="Ebus1.php">Clear Choice</a>  
                
            </div>
                
        </div>
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    
    </body>
    
</html>