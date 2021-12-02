<?php
$db = mysqli_connect( "localhost", "root", "", "lms" );
?>
<?php
if ( isset( $_POST['category'] ) ) {
    $category_name = $_POST['category_name'];
    $status = $_POST['status'];
    //$category_description = $_POST['category_description'];
    $sql = "INSERT INTO category(category_name,status)
	 VALUES ('$category_name','$status')";
    if ( mysqli_query( $db, $sql ) ) {
        header( "location:category.php" );
    } else {
        echo "Error: " . $sql . " " . mysqli_error( $db );
    }
}
?>
<?php
if ( isset( $_POST['subcategory'] ) ) {
    $category_name = $_POST['category_name'];
    $subcategory_name = $_POST['subcategory_name'];
    $sql = "INSERT INTO subcategory(category_name,subcategory_name)
	 VALUES ('$category_name','$subcategory_name')";
    if ( mysqli_query( $db, $sql ) ) {
        header( "location:subcategory.php" );
    } else {
        echo "Error: " . $sql . " " . mysqli_error( $db );
    }
}
?>
<?php
if ( isset( $_GET['subcategoryupdate'] ) ) {
    $sid = $_GET['sid'];
    $category_name = $_GET['category_name'];
    $subcategory_name = $_GET['subcategory_name'];
    $query = "UPDATE SUBCATEGORY SET           sid='$sid',category_name='$category_name',subcategory_name='$subcategory_name' WHERE sid='$sid'";
    $data = mysqli_query( $db, $query );
    if ( $data ) {
        echo "<script>alert('UPDATE SUCCESSFULLY');window.location='subcategory.php'</script>";
        //header ( "location:subcategory.php" );
    } else {
        echo"DATA DO NOT UPDATE";
    }
}
?>
<?php
if ( isset( $_POST['insert'] ) ) {
    $cid = $_POST['cid'];
    $sid = $_POST['sid'];
    $lid = $_POST['lid'];
    $user_name = $_POST['user_name'];
    $p_NAME = $_POST['p_NAME'];
    $p_SUMMARY = $_POST['p_SUMMARY'];
    $p_FEATURES = $_POST['p_FEATURES'];
    $p_DESCRIPTION = $_POST['p_DESCRIPTION'];
    $P_IMAGE = $_FILES['P_IMAGE']['name'];
    $ptype = $_POST['ptype'];
    $query = "INSERT INTO `insertproperty`(`cid`, `sid`, `lid`, `user_name`, `p_NAME`, `p_SUMMARY`, `p_FEATURES`, `p_DESCRIPTION`, `P_IMAGE`,`ptype`) VALUES ('$cid','$sid','$lid','$user_name','$p_NAME','$p_SUMMARY','$p_FEATURES','$p_DESCRIPTION','$P_IMAGE','$ptype')";
    $data = mysqli_query( $db, $query );
    if ( $data ) {
        echo "<script>alert('UPDATE SUCCESSFULLY');window.location='insert.php'</script>";
        //header ( "location:subcategory.php" );
    } else {
        echo "Error: " . $query . " " . mysqli_error( $db );
    }
}
?>
<?php
if ( isset( $_GET['update'] ) ) {
    $pid = $_GET['pid'];
    $cid = $_GET['cid'];
    $sid = $_GET['sid'];
    $lid = $_GET['lid'];
    //$user_name = $_GET['user_name'];
    $p_NAME = $_GET['p_NAME'];
    $p_SUMMARY = $_GET['p_SUMMARY'];
    $p_FEATURES = $_GET['p_FEATURES'];
    $p_DESCRIPTION = $_GET['p_DESCRIPTION'];
    $ptype = $_GET['ptype'];
    $sql = "UPDATE `insertproperty` SET `cid`='$cid',`sid`='$sid',`lid`='$lid',`p_NAME`='$p_NAME',`p_SUMMARY`='$p_SUMMARY',`p_FEATURES`='$p_FEATURES',`p_DESCRIPTION`='$p_DESCRIPTION',`ptype`='$ptype' WHERE pid = '$pid'";
    $data = mysqli_query( $db, $sql );
    if ( $data ) {
        echo "<script>alert('UPDATE SUCCESSFULLY');window.location='propertymanage.php'</script>";
    } else {
        echo "Error: " . $sql . " " . mysqli_error( $db );
    }
}
?>

<?php

if(isset( $_POST['Individual'])) {

    $accounttype = $_POST['accounttype'] ;
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $contactNo = $_POST['contactNo'] ;
    $user_name = $_POST['user_name'] ;
    $password = $_POST['password'] ;
    
    $sql = "INSERT INTO `oweraccount`(`accounttype`, `name`, `email`, `contactNo`,`user_name`, `password`) VALUES ('$accounttype','$name','$email','$contactNo','$user_name','$password')";
    
     $data = mysqli_query( $db, $sql );
    if ( $data ) {
        echo "<script>alert('REGISTER SUCCESSFULLY');window.location='http://localhost/lms/admin/index.php'</script>";
    } else {
        echo "Error: " . $sql . " " . mysqli_error( $db );
    }

}


?>

<?php

if(isset( $_POST['Companay'])) {

    $accounttype = $_POST['accounttype'] ;
    $CompanyName = $_POST['CompanyName'] ;
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $contactNo = $_POST['contactNo'] ;
    $OfficeAddress = $_POST['OfficeAddress'] ;
    $user_name = $_POST['user_name'] ;
    $password = $_POST['password'] ;
    
    $sql = "INSERT INTO `oweraccount`(`accounttype`,`CompanyName` ,`name`, `email`, `contactNo`,`OfficeAddress`,`user_name`, `password`) VALUES ('$accounttype','$CompanyName','$name','$email','$contactNo','$OfficeAddress','$user_name','$password')";
    
     $data = mysqli_query( $db, $sql );
    if ( $data ) {
        echo "<script>alert('REGISTER SUCCESSFULLY');window.location='http://localhost/lms/admin/index.php'</script>";
    } else {
        echo "Error: " . $sql . " " . mysqli_error( $db );
    }

}


?>

<?php
 
  

    if (isset($_POST ['login'])) {
		$user_name=$_POST['user_name'];
		$password=$_POST['password'];
		
		$q=' SELECT * FROM `oweraccount` where `user_name`="'.$user_name.'" and `password`="'.$password.'"';
		$r = mysqli_query($db, $q);
	    $row = mysqli_num_rows($r);
	
		
		if($row==1){
			echo"LOGIN SUCCESSFUL";
            session_start();
			$_SESSION['user_name']=$user_name;
			header ("location:insert.php");
			
		}
		else{
			echo "<script>alert('LOGIN FAILED!!!!');window.location='http://localhost/lms/admin/index.php'</script>";
		    
			
			
		}
		
	}		
		


?>


