<?php     
require "../script/php/connect.php";
?>

<!doctype html>

<html>
	<head>

<?php     
require "../script/mlc/script_head.php";
?>


<!-------
	<meta name="viewport" content="width=1024">
   

   <meta name="viewport" content="width=device-width, initial-scale=1">
	
	--->
	
	 <meta name="viewport" content="width=1024">
    <meta name="description" content=" WELCOME TO  YSFON IMO STATE ">
    <meta name="keywords" content=" WELCOME TO  YSFON IMO STATE  ">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    
  <meta http-equiv="pragma" content="no-cache" />

   <title>WELCOME TO  YSFON IMO STATE </title>
<style>








</style>
	
	</head>

<body>
	<?php     
require "../script/php/header_home.php";
?>	

 

<br/><br/><br/><br/>


<div class="row blue-text">


<div class="col l3 m3 s12" >
<img src='../script/img/w<?php echo rand(23,24);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(25,26);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(1,2);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(3,4);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(5,6);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(27,28);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(9,10);?>.jpg' width='250px;'/> <br/>
</div>



<div class="col l6 m6 s12" >
<div style='height:1270px; overflow:auto;'>




<div id="pre1" class="col s12">
<h1 align='center'> WELCOME TO YSFON IMO STATE</h1>
<div>

<h3>
The Youth Sports Federation of Nigeria YSFON, Imo State welcomes you to the official home page.
</h3>
<h4>
We are determined as the mission statement of the body stipulates to work with all relevant persons, groups, 
private and public agencies and the especially the grassroots to promote sport activities and the development of our youth and society.
</h4>
<p>
We therefore urge our dear readers and contributors to always think development of  sports especially at the
 grassroots cos that's where the talents are and there can become stars tomorrow.
</p>


<marquee> The Youth Sports Federation of Nigeria YSFON, Imo State welcomes you to the official website </marquee>
</div>
<h1 align='center'>LATEST POST</h1>
<?php


	//code for today


	$today_prediction = new run_query("select * from predict where del='0' order by id desc limit 5");
	if( $today_prediction->num_rows >= 1){
		while( $today_prediction->result() ){
			
			$away_team = $today_prediction->result['away_team'];
			$away_logo = $today_prediction->result['away_logo'];
			
			$match_date = $today_prediction->result['match_date'];
			
			$analysis = $today_prediction->result['analysis'];
			
			
			echo "<div class=\"row\">
				

			


				

				<div class=\"col l12 m12 s12\">
				 <ul class=\"collapsible popout \" data-collapsible=\"accordion\">
					<li>
					  <div class=\"collapsible-header active green white-text\"><h3>$away_team </h3></div>
					  	<img src='../admin5050/img/$away_logo' style='height:200px; width:100%;'/>
			
					  <div class=\"collapsible-body red-text\">
					  $analysis
					  <hr/>
					   POSTED DATE: <b> $match_date  </b>
					   <br/> <br/> <br/>
					  </div>
					 
					
					</li>
				</ul>
				</div>

				</div><br/><br/><br/><br/>

";
			
			
		}

	}else{
		
		echo "<br/><br/><h2 align='center' class='green white-text' > <br/><br/> No Post... <br/><br/> </h2>";
	}

//code for today


?>
</div>



<div id="pre2" class="col s12">
<?php
echo"	<h1 align='center'>
ALL POST

</h1><hr/>";

	$all_prediction = new run_query("select * from predict where del='0' order by id desc");
	if( $all_prediction->num_rows >= 1){
		while( $all_prediction->result() ){
				
			$away_team = $all_prediction->result['away_team'];
			$away_logo = $all_prediction->result['away_logo'];
			
			$match_date = $all_prediction->result['match_date'];
			
			$analysis = $all_prediction->result['analysis'];
			
			
			echo "<div class=\"row\">
				

			


				

				<div class=\"col l12 m12 s12\">
				 <ul class=\"collapsible popout \" data-collapsible=\"accordion\">
					<li>
					  <div class=\"collapsible-header active green white-text\"><h3>$away_team </h3></div>
					  	<img src='../admin5050/img/$away_logo' style='height:200px; width:100%;'/>
			
					  <div class=\"collapsible-body red-text\">
					  $analysis
					  <hr/>
					   POSTED DATE: <b> $match_date  </b>
					   <br/> <br/> <br/>
					  </div>
					 
					
					</li>
				</ul>
				</div>

				</div><br/><br/><br/><br/>

";
			
			
		}
		
	}else{
		
		echo "<br/><br/><h2 align='center' class='green white-text' > <br/><br/> No Post... <br/><br/> </h2>";
	}
	
  ?>
</div>



<div id="pre3" class="col s12">

<h1 align='center' >Mission/Vision Statement </h1>


 <h3>Youth Sport Federation of Nigeria (YSFON) is an affiliate body of National Sports Commission...</h3>
<h4>
To use Sport as an impetus for socio-economic development of our state and nation and, to arouse the youths
 in participation to enable the athletes, the opportunity by being recognized especially the values of the game and
 good community relationships and rural development.

</h4>



<h1 align='center'>LATEST POST</h1>
<?php


	//code for today


	$today_prediction1 = new run_query("select * from predict where del='0' order by id desc limit 5");
	if( $today_prediction1->num_rows >= 1){
		while( $today_prediction1->result() ){
			
			$away_team = $today_prediction1->result['away_team'];
			$away_logo = $today_prediction1->result['away_logo'];
			
			$match_date = $today_prediction1->result['match_date'];
			
			$analysis = $today_prediction1->result['analysis'];
			
			
			echo "<div class=\"row\">
				

			


				

				<div class=\"col l12 m12 s12\">
				 <ul class=\"collapsible popout \" data-collapsible=\"accordion\">
					<li>
					  <div class=\"collapsible-header active green white-text\"><h3>$away_team </h3></div>
					  	<img src='../admin5050/img/$away_logo' style='height:200px; width:100%;'/>
			
					  <div class=\"collapsible-body red-text\">
					  $analysis
					  <hr/>
					   POSTED DATE: <b> $match_date  </b>
					   <br/> <br/> <br/>
					  </div>
					 
					
					</li>
				</ul>
				</div>

				</div><br/><br/><br/><br/>

";
			
			
		}

	}else{
		
		echo "<br/><br/><h2 align='center' class='green white-text' > <br/><br/> No Post... <br/><br/> </h2>";
	}

//code for today


?>
</div>





<div id="pre4" class="col s12">

<h1 align='center' >OUR SPONSORS </h1>


<h2 align='center'>
<hr/>
<img src='../script/img/imo_state.jpg'  alt='IMO STATE GOVT' width='50%'   /><img src='../script/img/navy.jpg'  alt='NIGERIAN NAVY' width='50%'   /> <br/>
 IMO STATE GOVERNMENT    &amp; NIGERIAN NAVY
</h2>
 <br/>  <br/>

<h2 align='center'>
<hr/>
<img src='../script/img/cowbell2.png'  alt='COW BELL LOGO' width='50%'   /><img src='../script/img/cowbell.png'  alt='COW BELL' width='50%'   />  <br/>
COW BELL
</h2>

 <br/>  <br/>


<h2 align='center'>
<hr/>
<img src='../script/img/coke.jpg'  alt='COCA COLA LOGO' width='50%'   /><img src='../script/img/coke2.jpg'  alt='COCACOLA ' width='50%'   />  <br/>
COCA COLA
</h2>

  <br/>  <br/>  <br/>  <br/>  <br/>
<h1 align='center'>LATEST POST</h1>
<?php


	//code for today


	$today_prediction1 = new run_query("select * from predict where del='0' order by id desc limit 5");
	if( $today_prediction1->num_rows >= 1){
		while( $today_prediction1->result() ){
			
			$away_team = $today_prediction1->result['away_team'];
			$away_logo = $today_prediction1->result['away_logo'];
			
			$match_date = $today_prediction1->result['match_date'];
			
			$analysis = $today_prediction1->result['analysis'];
			
			
			echo "<div class=\"row\">
				

			


				

				<div class=\"col l12 m12 s12\">
				 <ul class=\"collapsible popout \" data-collapsible=\"accordion\">
					<li>
					  <div class=\"collapsible-header active green white-text\"><h3>$away_team </h3></div>
					  	<img src='../admin5050/img/$away_logo' style='height:200px; width:100%;'/>
			
					  <div class=\"collapsible-body red-text\">
					  $analysis
					  <hr/>
					   POSTED DATE: <b> $match_date  </b>
					   <br/> <br/> <br/>
					  </div>
					 
					
					</li>
				</ul>
				</div>

				</div><br/><br/><br/><br/>

";
			
			
		}

	}else{
		
		echo "<br/><br/><h2 align='center' class='green white-text' > <br/><br/> No Post... <br/><br/> </h2>";
	}

//code for today


?>
</div>




</div>


</div>



<div class="col l3 m3 s12" >
<img src='../script/img/w<?php echo rand(27,28);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(11,12);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(13,14);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(15,16);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(17,18);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(19,20);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(27,28);?>.jpg' width='250px;'/> <br/>
<img src='../script/img/w<?php echo rand(21,22);?>.jpg' width='250px;'/> <br/>
</div>




</div>


<?php     
require "../script/php/footer_home.php";
require "../script/mlc/script_foot.php";
?>


</body>

</html>
















