<div class="form">
    <form action ="configuration.php" method="post">
       <select name="category_name" required>
        <option>SELECT CATEGORY</option>
        <?php $db = mysqli_connect( 'localhost', 'root', '', 'lms' );
$sql = 'SELECT * from `category`';
$data =   mysqli_query( $db, $sql ); while($row= mysqli_fetch_array($data)):;?>
        <option value="<?php echo $row['cid']; ?>"><?php echo $row['category_name'];  ?></option>
        <?php endwhile;?>
    </select> 
<br><br>
        SubCategory Name<br>
		<input type ="text" name="subcategory_name" placeholder="subcategory_name" required >
		<br><br> 
        <input type="submit" name="subcategory" value="Upload">
        <br><br>
    </form>
    </div>

<?php
	$db = mysqli_connect("localhost","root","","lms");
	$sql = "SELECT * from `subcategory`";
$data =   mysqli_query( $db , $sql);
$total = mysqli_num_rows($data);
if ($total!=0) {
	?>
	<table>
	 
	<?php
while ($result = mysqli_fetch_assoc($data)) {
    ?>
    <tr>
        <form action="configuration.php" method="get">
            <td><input type="text" name="sid" value="<?php echo $result['sid']  ?>">

                <input type="text" name="cid" value="<?php echo $result['cid']  ?>">

                <input type="text" name="subcategory_name" value="<?php echo $result['subcategory_name']  ?>">
               <!-- <input type="text" name="status" value="<//?php echo $result['status']  ?>">--->
                
                <input type="submit" name="subcategoryupdate" value="update">

            </td>
        </form>
    </tr>
		
    <?php
   /*echo "
	<tr>
	    <td>".$result['sid']."</td> 
	    <td>".$result['category_name']."</td> 
		<td>".$result['subcategory_name']."</td> 
        <td>".$result['creationDate']."</td> 
		<td><a href='subupdate.php?id=$result[sid]&category_name=$result[category_name] &subcategory_name=$result[subcategory_name]'>&#9998;</a>
		<a href='delete.php?Id=$result[sid]'>&#10006;</a></td>";*/
    }
}
?>