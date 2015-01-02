<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from wbpreview.com/previews/WB0639XC4/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Sep 2014 00:04:50 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Urugendo.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />    
    <link rel="stylesheet" href="css/m-buttons.min.css" type="text/css" />   
    <link rel="stylesheet" href="css/m-icons.min.css" type="text/css" />    
    <link rel="stylesheet" href="css/styles.min.css" type="text/css" />     	 
</head>
<body>    
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">            
                <a href="/" class="brand"><img src="img/logo.png"></a>       
                <ul class="nav">
                    <li class="active"><a href="#">Home </a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Company</a></li>
                </ul>            
            </div>
        </div>
    </div>

    <header class="header">    
        <div class="container">    
            <div class="row">
                <div class="span4">
                    <h3>Urugendo Buses</h3>               
                    <p>Book  and Pay your Bus ticket in an easy way.</p>   
                    <p>It should be hard to pay for the service you are looking for .<strong>Ugurendo.com </strong> made it simple
                        to pay for your Buses from wherever you are ,on any divice.</p>             
                    <div class="action-button">
                                     
                        <p class="btn-notes">Currently, We are working with Volcano and Belvederi
                        <a href="#">Stella </a> and <a href="#">KBS</a> are coming soon</p>       
                    </div>
                </div>
                <div class="offset1 span7 center">        
                      <form action="selectset.php" method="post" style="margin-bottom:none;">
                    <p>
                        <strong>User Below form to book your ticket.</strong></p>

        <div class="form-group">
            <label for="route" style="color:#fff;">Select Route:</label>
            <select name="route" class="form-control"/>
                        <?php
                        include('db.php');
                        $result = mysql_query("SELECT * FROM route");
                        while($row = mysql_fetch_array($result))
                            {
                                echo '<option value="'.$row['id'].'">';
                                echo $row['route'].'  :'.$row['type'].'  :'.$row['time'];
                                echo '</option>';
                            }
                        ?>
                        </select>
        </div>

        <div class="form-group" >
            <label for="date" style="color:#fff;">Date:</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="date">
        </div>
        <div class="form-group" >
            <label for="passengers" style="color:#fff;">No. of Passenger</label>
            <select name="qty" id="passengers">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        </select>
        </div>
        <input type="submit" class="m-btn  blue rnd" value="Book the Ticket">                
                            
    </form>
               
                </div>
            </div>       
        </div>
    </header>
    
    <section class="container">      
        <div class="row">
            <article class="span12 center">
                <br />
                <h3>Businesses, big or small are using <strong>Urugendo.com</strong> to help do more each day.</h3>
                <div class="logo-list">
            	    <img src="img/logoplaceholder.png" alt="companyA"/>
                    <img src="img/logoplaceholder.png" alt="companyA"/>
                    <img src="img/logoplaceholder.png" alt="companyA"/>
                    <img src="img/logoplaceholder.png" alt="companyA"/>
                    <img src="img/logoplaceholder.png" alt="companyA"/>                
                </div>           
            </article>
        </div>  
 </section>
    <footer class="container">    
        <div class="row">       
            <div class="span2">
                <p>                
                    <strong>Urugendo.com</strong>
                </p>
              
            </div>
   
        </div>
    </footer>
    
</body>

</html>
