<?php

 require "../script/php/connect.php";
 require "../script/php/core.php";

$active= "login";




if(isset($_POST['email']) && isset($_POST['password']) ){
$email = addslashes(htmlentities($_POST['email']));
$password = addslashes(htmlentities($_POST['password']));

	$adminlogin = new run_query("SELECT * from admin WHERE email ='$email' AND password ='$password'  ");
	if ($adminlogin->num_rows === 1){
		$adminlogin->result();
		 $admin_id = $adminlogin->result['id'];
         $_SESSION['Admin_id'] =$admin_id;
			   echo "<script>alert('Login Successfully');</script>";
          
            echo "<script>window.location.replace(\"admin_dash.php\");</script>"; 
			
	}else{
		
		echo "<script> alert('The Email Or Password Entered Is Incorrect' ); </script>";
	}

}
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
   

   <title> YSFON IMO | ADMIN LOGIN </title>
<style>








</style>
	
	</head>

<body >

    
  
 
 
 
 
 
<br/><br/><br/><br/><br/><br/>
 
   <main>
   <div class="container">
<br/>
     <div class="row">
	
	
		<div class="col m2 l2 s0"></div>
		<div class="col m8 l8 s12">
		<form method="POST" action="index.php">
		 <div class="card z-depth-4 green-text">
            <div class="card-content">
              <h2 align="center">
			  <img class="animated pulse " src="../script/img/logo.png" alt=" icon" width="100px"  />
			  <br/><b>	ADMIN LOG IN </b></h2>
            <div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" required="required" name="email"   />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-envelope"></i> Email </label>
        </div>
      </div>




			<div class="row" style="margin:-5px;">
        <div class="input-field col s12">
          <input id="email" type="password" class="validate" required="required" name="password"  />
            <label for="email" data-error="wrong" data-success="right"><i class="fa fa-lock"></i> Password </label>
        </div>
      </div>
	  <center>
	  <button type="submit" class="btn green"  name="btn_login" >
	  <b>Sign In <i class="fa fa-sign-in"></i> </b></button>
	    </center>
	  </div>
            <div  sytle="font-size:15px;">
            </div> <br/>
          </div>
		</form>
		</div>
		<div class="col m2 l2 s0"></div>


	   
			</div>


   


   </div>


	
	
	
	
	
	
	
	
	
	
	
	
   
   </main>
 
<br/><br/><br/>


<?php     
require "../script/php/footer_home.php";
require "../script/mlc/script_foot.php";
?>


</body>

</html>
 