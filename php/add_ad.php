<?php



		
		
		
		if(isset($_POST['btn_send'])  ){
					
					$away_team_name = $_POST['away_team_name'];
				
				
					$match_analysis = $_POST['match_analysis'];
					
					           
                
					 $tmp_name1 = $_FILES['away_team_logo']['tmp_name'];
					$pix_name1 = date('YmdHis').$_FILES['away_team_logo']['name'];
                      
                   $match_date = date('d-m-Y');
					$location ='img/';
					move_uploaded_file($tmp_name1, $location.$pix_name1);
					
					
					 $query = "INSERT into predict values ('0','0','0','0','$away_team_name','$pix_name1','0','0','$match_date','0','$match_analysis','0','0','0','0')";
                     $send_prediction = new run_query($query);
					 
					if($send_prediction ->query_run ){
						echo "<script>
							alert(' POSTED Successfully!!');
							window.location.replace(\"admin_dash.php\");
						</script>"; 
	
						
						
					}
	
		}
		
	

?>