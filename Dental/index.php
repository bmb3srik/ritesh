<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appirion Dental Software</title>
</head>

<body>
<?php //include_once("header.php"); ?>



</body>
</html>-->
<?php session_start();?>




<?php
if(isset($_POST['submit']))
{
		//echo "hehehhehe";
		$username=$_POST['username']; 
		$password=$_POST['password']; 
		//echo $username ." ". $password;
		if(($username=="ritesh")&&($password=="ritesh@01")){
		    $_SESSION['USER_NAME'] = "ritesh srivastava";
			$_SESSION['ROLE_ID']="1";
			echo "testing";
			header("location: patient.php");
		}
		else 
		{
		$msg="Your Login Name or Password is invalid";
		}
}
?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MIS:Appirion Dental Software</title>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">



</head>

<body>
<div id="main_container">
	<div id="header">
    	<div id="logo" style="height: 100px;">
		
			
			<table width="1024px;">
				<tr>
					<td width="15%">	<a href="home.html"><img src="images/jatak.png" alt="" title="" border="0"></a></td>
					<td width="70%" style="font-size: 35px; text-align:left; padding-top:10px; padding-left:-25px;"> <span >Appirion Dental Software </span></td>
                  
					
                 
                                 </tr>
                    
				
                     
			</table>
                     <tr>
                    <td width="40%">
                        <div id="ddd">
                            <span style="font-size:11px;">
				                 every patient is important
			                </span>
                     </div></td></tr>
		
		</div>
		
         <div style="float: right">
            
        </div>
        
        
        <div style="clear:both; width: 100%; border-bottom: 1px solid #000;"> </div>
	        
    </div>
    
   
    
    <div id="main_content" style=" padding-top: 10px; height: 400px;">
<div id="inner" style="border: 1px solid #c1c1c1; height: 200px; width: 500px;">
<center>
	<div class="c1"> 
		   <form method="post" action="" class="login">
		       <h2>Login Form </h2><br/>  <br/> 
		      <input style="width: 60%; margin-top: 10px;" type="text" name="username" id="username" value=""> <br/>    
		      <input  style="width: 60%; margin-top: 10px;" type="password" name="password" id="password" value=""> <br/>    
		      <button style=" margin-top: 10px;"  type="submit" name="submit" class="login-button">Login</button>
		
		  </form>

     </div>
     </center>
</div>
</div>
 

     <div id="footer">
     	<div class="copyright">

        </div>
    	<div class="footer_links"> 
        <a href="#">Technology partner: Appirion Dental Software pvt ltd</a>
        
        </div>
    
    
    </div>  
 
   

</div> <!--end of main container-->


</body></html>