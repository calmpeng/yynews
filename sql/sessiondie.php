<?php 
session_start();
session_destroy();
session_unset();

if(isset($_SESSIOIN['username'])){
	echo 'false';
}else{
	echo'true';
	
}



 ?>