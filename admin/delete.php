<?php

$db = mysqli_connect("localhost","root","","lms"); 
$pid = $_GET['pid'];
 $query="DELETE  FROM contact  
   WHERE pid= '$pid'  ";

$data=mysqli_query($db , $query);
  
if($data){
	
		$pid = $_GET['pid'];
 $query="DELETE  FROM insertproperty  
   WHERE pid= '$pid'  ";
    $data=mysqli_query($db , $query);
    
    if($data){
        
        header("location:propertymanage.php");
    }
    
}
else {
        echo "Error: " . $query . " " . mysqli_error( $db );
    }

?>