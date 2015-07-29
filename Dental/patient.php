<?php session_start();?>
<?php require_once("./templates/template_den.php");?>

<?php
//Your post method, variable,declaration goes here
require("/config/config.php");
$role_id=isset($_SESSION['ROLE_ID'])?$_SESSION['ROLE_ID']:'';
if($role_id=="")
{
	$error =  "Please login to upload a article\n";
	//header("Location:dental/index.php");
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
  
  
  
  
  <?php endblock('filter');?>
  
	<?php startblock("content");?>
	<!--Your content goes here-->
	<h2>Patient Details</h2>

	<?php
			echo '<table width="1024px;" border="1px solid #c1c1c1; margin-top: 10px;" cellspacing="0" >
            <thead>
							<tr style="background-color: #c1c1c1;">
                            
								<th width="5%">S.No</th>
								<th width="7%">Patient Name</th>
								<th width="7%">Address</th>
								<th width="7%">House Number</th>
								<th width="7%">Father Name</th>								
								
								<th width="7%">View Detsils</th>
								
							</tr>
							</thead>
                           				 <tbody>';




$query=" SELECT name, address, housenumber, fatehrname from dental order by name desc" ;
$mysqli = new mysqli(SERVER, USER, PASSWORD, DATABASE);



if ($result = $mysqli->query($query)) {
/* fetch associative array */


$count=1;
while ($row = $result->fetch_assoc()) {
					

					echo '	<tr align="center">
								<td width="5%">'.$count.'</td>
								<td width="7%">'.$row["name"].'</td>
								<td width="7%">'.$row["address"].'</td>
								<td width="7%">'.$row["housenumber"].'</td>
								<td width="7%">'.$row["fatehrname"].'</td>								
								
								<th width="7%"><a href="#">View</a></th>							
							</tr>';
							$count= $count+1;


}

/* free result set */
$result->free();
}
/* close connection */
$mysqli->close();






				                     
				        
							
							
							
						echo '</tbody></table>';
			?>
	

	<!--Your content ends here-->
	<?php endblock("content");?>