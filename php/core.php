<?php



function AdminLoggedin(){
    if(isset($_SESSION['Admin_id'])){
        if(!empty($_SESSION['Admin_id']) ){
             return true;
        }else{
     return false;}
}
}


  

?>