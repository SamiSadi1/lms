
<?php
$db = mysqli_connect( "localhost", "root", "", "lms" );
?>


<?php

if(isset($_POST['send'])){
    
    $pid = $_POST['pid'];
    $user_name = $_POST['user_name'];
    $cname = $_POST['cname'];
    $cContactNo = $_POST['cContactNo'];
    $cemail = $_POST['cemail'];
    $massage = $_POST['massage'];
    
    $sql="INSERT INTO `contact`(`pid`, `user_name`, `cname`, `cContactNo`, `cemail`, `massage`) VALUES ('$pid','$user_name','$cname','$cContactNo','$cemail','$massage')";
    
         $data = mysqli_query( $db, $sql );
    if ( $data ) {
        echo "<script>alert('MASSAGE SEND SUCCESSFULLY');window.location='index.php'</script>";

        //header ( "location:subcategory.php" );
    } else {
        echo "Error: " . $sql . " " . mysqli_error($db);
    }
    
    
    
    
    
}





?>