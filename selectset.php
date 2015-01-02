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
                <a href="http://wbpreview.com/" class="brand"><img src="img/logo.png"></a>       
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
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<?php
include('db.php');
$busnum=$_POST['route'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysql_query("SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysql_fetch_array($query))
							  {
							  $inogbuwin=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>
<?php
if ($avail < $qty){
echo 'Qty reserve exced the available seat of the bus';
}
else if($avail > 0)
{
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }

}
</script>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()" target="_blank">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<label>Seat Number
<span class="small">Auto Generated <a rel="facebox" href="seatlocation.php?id=<?php echo $busnum; ?>">view seat</a></span>
</label>
<input type="text" name="setnum" value="
<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>
" id="name" readonly/><br>
<label>First Name
<span class="small">Enter first name</span>
</label>
<input type="text" name="fname"  id="name"/><br>
<label>Last Name
<span class="small">Enter last name</span>
</label>
<input type="text" name="lname"  id="name"/><br>
<label>Address
<span class="small">Enter Address</span>
</label>
<input type="text" name="address"  id="name"/><br>
<label>Contact
<span class="small">Enter Contact Number</span>
</label>
<input type="text" name="contact"  id="name"/><br>
<button type="submit">Confirm</button>
</form>
</div>
<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>

   
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
