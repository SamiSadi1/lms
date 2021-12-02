<?php
session_start();
?>
<?php include 'sidenav.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, td, th {
  border: 1px solid black;
}
table {
  width: 80%;
margin: 50px auto;
margin-left: 250px;    
}
  td, th {
  border: 1px solid #999;
  padding: 0.5rem;
}
    </style>
</head>
</html>
<?php
$db = mysqli_connect("localhost","root","","lms");
$user_name = $_SESSION['user_name'];
 $query="SELECT * FROM `insertproperty` where user_name = '$user_name' ";
$data=mysqli_query($db , $query);
$total = mysqli_num_rows($data);
if ($total!=0) {
	?>
	<table>
	  <tr>
          <th>pid</th>
          <th>cid</th>
          <th>sid</th>
          <th>lid</th>
          <th>p_NAME</th>
          <th>p_SUMMARY</th>
          <th>p_FEATURES</th>
          <th>p_DESCRIPTION</th>
          <th>ptype</th>
          <th>OPARATION</th>
	   </tr>
	<?php
while ($result = mysqli_fetch_assoc($data)) {
   echo "
	<tr>
	    <td><a href=''>".$result['pid']."</a></td>
        <td>".$result['cid']."</td> 
        <td>".$result['sid']."</td> 
		<td>".$result['lid']."</td> 
		<td>".$result['p_NAME']."</td>
        <td>".$result['p_SUMMARY']."</td>
        <td>".$result['p_FEATURES']."</td>
        <td>".$result['p_DESCRIPTION']."</td>
        <td>".$result['ptype']."</td>
        <td><a href='update.php?pid=$result[pid]'>&#9998;</a>
        <a href='delete.php?pid=$result[pid]'>&#10006;</a></td>
";
    }
}
?>