<?php session_start();?>
<?php require_once("./templates/template_den.php");?>

<?php
//Your post method, variable,declaration goes here
require("config/config.php");
$role_id=isset($_SESSION['ROLE_ID'])?$_SESSION['ROLE_ID']:'';
if($role_id=="")
{
	header("Location: /dental/index.php");
}
//Your post method, variable,declaration ends here
?>

	<?php startblock("metatag");?>
	<!--Your meta content goes here-->
	   <?php
			$meta_title="";
			$meta_author="";
			$meta_description="";
			$meta_keywords="";
			$meta_language="";
			$meta_search="";
			$meta_revisit_after="";
			create_meta_contents($meta_title,$meta_author,$meta_description,$meta_keywords,$meta_language,$meta_search,$meta_revisit_after);
		?>
	<!--Your meta content ends here-->
	<?php endblock("metatag");?>
	<?php startblock('script');?>
     <script type="text/javascript" src="validation.js"></script>
	 
	 <script type="text/javascript">
	
	$(function() {
		$("table").tablesorter({debug: true})
		$("a.append").click(appendData);
		
		
	});
	
	var lastStudent = 23;
	var limit = 500;
	
	function appendData() {
		
		var tdTagStart = '<td>';
		var tdTagEnd = '</td>';
		var sex = ['male','female'];
		var major = ['Mathematics','Languages'];
		
		
		for(var i = 0; i < limit; i++) { 
			var rnd = i % 2;
			var row = '<tr>';	
			row += tdTagStart + 'student' + (lastStudent++) + tdTagEnd;
			row += tdTagStart + major[rnd] + tdTagEnd;
			row += tdTagStart + sex[rnd] + tdTagEnd;
			
			row += tdTagStart +  randomNumber() + tdTagEnd;
			row += tdTagStart +  randomNumber() + tdTagEnd;
			row += tdTagStart +  randomNumber() + tdTagEnd;
			row += tdTagStart +  randomNumber() + tdTagEnd;
			
			row += '</tr>';
			
			$("table/tbody:first").append(row);
			
		};
		
		
		$("table").trigger('update');
		return false;
	}
	
	function randomNumber() {
		return Math.floor(Math.random()*101)
	}
	
	</script>	
	<?php endblock('script');?>
  
  
  <?php startblock("filter");?>
  
  <?php
    $name="";
	$age="";
	$housenumber="";
	$fathername="";
	$address="";
	$contactnumber="";
	$email="";
	
	
	 if(isset($_POST['submit']))
	{
		$name=xss_echo($_POST["txtName"]);
		$age=xss_echo($_POST["txtAge"]);
		$housenumber=xss_echo($_POST["txtNUMBER"]);
		$fathername=xss_echo($_POST["txtFatherName"]);
		$address=xss_echo($_POST["txtAddress"]);
		$contactnumber=xss_echo($_POST["txtCnumber"]);
		$email=xss_echo($_POST["txtEmail"]);
		
		
		$mysqli = new mysqli(SERVER, USER, PASSWORD, DATABASE);
		$query="insert into addpatient (patientname, age, housenumber, fathername, address, contactnumber, email) VALUES ('$name','$age','$housenumber','$fathername','$address','$contactnumber','$email')";
		
		$r= mysqli_query($mysqli,$query);
		header('location: patient.php');
		
		

	}
		
		 
		
  ?>
 
  
  <?php endblock('filter');?>
  
	<?php startblock("content");?>
	<!--Your content goes here-->

	 <form id="myform" class="edaa_form" name="myform" action="" method="post" enctype="multipart/form-data"> 
		 <div style="padding-left:12px;text-align:left;"> 
		     <div> 
             <h2>Patient Form</h2>
             <hr />
		         <div style="font-size:14px;">Patient Name <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtName" name="txtName" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtName_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
                 
                 
                 
                  <div> 
		         <div style="font-size:14px;"> Age  <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtAge" name="txtAge" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtAge_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
                 
                 <div> 
		         <div style="font-size:14px;"> House Number <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtNUMBER" name="txtNUMBER" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtNUMBER_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
				 
				 
				  <div> 
		         <div style="font-size:14px;"> Father Name <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtFatherName" name="txtFatherName" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtFatherName_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
                 
                 <div> 
		        
                 
                 <div> 
		         <div style="font-size:14px;"> Address <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtAddress" name="txtAddress" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtAddress_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
				 
				 
				 <div> 
		         <div style="font-size:14px;"> Contact Number <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtCnumber" name="txtCnumber" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtCnumber_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>
				 
				 <div> 
		         <div style="font-size:14px;"> Email ID <span><?php ?></span><span class="mandatory" style="color:#F00;">*</span> </div> 
		        <div style="height:2px;"></div>
		         <div> 
		             <input type="text" id="txtEmail" name="txtEmail" size="40" value="" required="required"/><br/> 
		 	      <div id="myform_txtEmail_errorloc" class="error_msg"></div> 
		         </div> 
		         <div class="clear"></div> <br/>


                 
                <input  type="submit" name="submit"  value="Save" />
                
		      </div> 
		       
		 </form> 
         
        
	

	<!--Your content ends here-->
	<?php endblock("content");?>