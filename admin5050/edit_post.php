<?php

require "../script/php/connect.php";
require "../script/php/core.php";
$active = "post"

?>



<!doctype html>

<html>
	<head>

<?php     
require "../script/mlc/script_head.php";
?>


 <meta name="viewport" content="width=device-width, initial-scale=1">
	
   

  <meta http-equiv="pragma" content="no-cache" />

   <title> EDIT POST </title>
<style>








</style>
	
	</head>

<body>
	<?php 

@$id_post = $_GET['id_post'];


	$editl_prediction = new run_query("select * from predict  where id ='$id_post' ");
 
	if( $editl_prediction->num_rows >= 1){
		 $editl_prediction->result();
			$id_post = $editl_prediction->result['id'];
			$home_team = $editl_prediction->result['home_team'];
			$home_logo = $editl_prediction->result['home_logo'];
			$home_score = $editl_prediction->result['home_score'];
			
			$away_team = $editl_prediction->result['away_team'];
			$away_logo = $editl_prediction->result['away_logo'];
			$away_score = $editl_prediction->result['away_score'];
			
			$match_date = $editl_prediction->result['match_date'];
			$match_time = $editl_prediction->result['match_time'];
			
			$analysis = $editl_prediction->result['analysis'];

		
		
	}
   
require "../script/php/header_home_ad.php";



 if(isset($_POST['btn_edit']))  { 

	
	 $away_team_name = $_POST['away_team_name'];
	
	 $match_analysis = $_POST['match_analysis'];
	$save_prediction = new run_query("UPDATE predict SET `away_team` ='$away_team_name',`analysis` ='$match_analysis' where id ='$id_post' ");
 
	
 	echo "<script>alert(\" POST EDITED! \");</script>"; 
  echo "<script>window.location.replace(\"view_post.php\");</script>"; 
      
 }
 
 




?>	

 
<div class="container">

	<br/><br/>
	<form method="POST" action="edit_post.php?id_post=<?php echo $id_post; ?>" >
        
	
	<div class="row ">

	
	
	
	
	
	
	<!------AWAY TEAM---------->
	<div class="col l12 m12 s12">
	
	<h2 align="center">EDIT POST </h2>
	
	
	
		
	
		<div class="input-field col s12">
			<input type="text" name="away_team_name" required="required" value="<?php echo $away_team; ?>" >
			 
			<label>TOPIC </label>
		  </div>
		  
		  
	
	</div>
	<!------AWAY TEAM ENDS ---------->
	
	</div>
	
	
	<div class="row">
	
	<h2 align="center">CONTENT</h2>
	
	<textarea name="match_analysis" id="editor">
	 <?php echo $analysis; ?>
	</textarea>

	</div>
	
		  <center>
			<input class="btn blue" type="submit" value="SEND" name="btn_edit"  />
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
















