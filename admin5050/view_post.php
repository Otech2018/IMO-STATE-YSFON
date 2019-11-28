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
	
   

    <meta name="description" content="HOTTEST GIST">
    <meta name="keywords" content="HYIP">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title> VIEW POST </title>
<style>








</style>
	
	</head>

<body>
	<?php     
require "../script/php/header_home_ad.php";
require "../script/php/add_ad.php";
?>	

 
<div class="container">

	<br/><br/>
	 <main>
   <div class="container">
<br/>
     <div class="row blue-text" >
	
	<h1 class="animated flip">ALL POST  </h1><hr/>
	
	
		<div class="col m12 l12 s12" >
		
	
<div><b>POST DETAILS</b></div>
	 <ul class="collapsible popout" data-collapsible="accordion">
      
  <?php	

  $all_prediction = new run_query("select * from predict where del='0' order by id desc");
  $no =1;
	if( $all_prediction->num_rows >= 1){
		while( $all_prediction->result() ){
			$id_post = $all_prediction->result['id'];
			$home_team = $all_prediction->result['home_team'];
			$home_logo = $all_prediction->result['home_logo'];
			$home_score = $all_prediction->result['home_score'];
			
			$away_team = $all_prediction->result['away_team'];
			$away_logo = $all_prediction->result['away_logo'];
			$away_score = $all_prediction->result['away_score'];
			
			$match_date = $all_prediction->result['match_date'];
			$match_time = $all_prediction->result['match_time'];
			
			$analysis = $all_prediction->result['analysis'];


echo "<li>
      <div class=\"collapsible-header\" >$no  $away_team </div>
     <div class=\"collapsible-body\" style=\"color:black; font-size:12px;\"> 
				

				<div class=\"row\">
				
				<img src='../admin5050/img/$away_logo' style='height:200px; width:100%;'/>
			

				<div class=\"col l12 m12 s12\">
				  
					  $analysis
					 
					 <hr/>
					   POSTED DATE: <b> $match_date  </b>
					   <br/> <br/> <br/>
				</div>
				
				</div>
				
				
				
			
			<br/><br/>
			<form action=\"view_post.php\" method=\"POST\">
			<input type=\"submit\" value=\"Delete\" class=\"btn red\" name=\"del_post$id_post\" />
			<a class=\"btn blue\" href=\"edit_post.php?id_post=$id_post\">EDIT</a>
			</form>
	</div>
    
	</li>
    ";


	$no ++;
	
	
	
	
	 if(isset($_POST['del_post'.$id_post]))  { 
  $delete_prediction = new run_query("UPDATE `predict` SET `del` ='delete'  where id='$id_post' ");
	echo "<script>alert(\"  DELETED! \");</script>"; 
  echo "<script>window.location.replace(\"view_post.php\");</script>"; 
      
 }
 

}


}
?>
  
  </ul>
                                 




		
		
		</div>
		
	



	
	
			</div>


   


   </div>

 
   </main>
  

<br/><br/><br/><br/>
</div>

<?php     
require "../script/php/footer_home.php";
require "../script/mlc/script_foot.php";
?>


</body>

</html>
















