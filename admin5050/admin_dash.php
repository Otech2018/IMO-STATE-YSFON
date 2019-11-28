<?php

require "../script/php/connect.php";
require "../script/php/core.php";
$active = "home"

?>



<!doctype html>

<html>
	<head>

<?php     
require "../script/mlc/script_head.php";
?>


 <meta name="viewport" content="width=device-width, initial-scale=1">
	
   
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> ADMIN DASH </title>
<style>








</style>
	
	</head>

<body>
	<?php     
require "../script/php/header_home_ad.php";
require "../script/php/add_ad.php";
?>	

 
<div class="container green-text">

	<br/><br/>
	<form method="POST" action="admin_dash.php" enctype="multipart/form-data">
	
	<div class="row ">

	
	
	
	
	
	
	<!------AWAY TEAM---------->
	<div class="col l12 m12 s12">
	
	
	<div class="file-field input-field">
		  <div class="btn green">
			<span>UPLOAD IMAGE </span>
			<input type="file" name="away_team_logo" required="required" >
		  </div>
		  <div class="file-path-wrapper">
			<input class="file-path validate" type="text">
		  </div>
		</div>
		
	
		<div class="input-field col s12">
			<input type="text" name="away_team_name" required="required">
			 
			<label>TOPIC </label>
		  </div>
		  
		  
		
	
	</div>
	<!------AWAY TEAM ENDS ---------->
	
	
	</div>
	

	
	<div class="row">
	
	<h2 align="center">CONTENT</h2>
	
	<textarea name="match_analysis" id="editor"></textarea>

	</div>
	
		  <center>
			<input class="btn green" type="submit" value="SEND" name="btn_send"  />
		  </center>
		<br/><br/>

	</form>
			
<br/><br/><br/><br/>
</div>

<?php     
require "../script/php/footer_home.php";
require "../script/mlc/script_foot.php";
?>


</body>

</html>
















