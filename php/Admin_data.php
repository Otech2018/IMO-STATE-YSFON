<?php



    $Admin_data_id = $_SESSION['Admin_id'];
	
    $admin_data = new run_query( "select * from admin where id = '$Admin_data_id' ");
	if($admin_data->num_rows == 1){
		
		$admin_data->result();
		$admin_email = $admin_data->result[email]
		$admin_name = $admin_data->result[name]
	}
}




?>