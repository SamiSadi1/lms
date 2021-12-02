<div class="form">
    <form action="configuration.php" method="post">
        Category Name<br>
        <input type="text" name="category_name" placeholder="category_name" required>
        <br><br>

        <select name="status">
            <option>SELECT OPTION</option>
            <option>For Sale</option>
            <option>For Rent</option>


        </select>

        <br><br>

        <input type="submit" name="category" value="Upload">
    </form>
</div>



<?php

	$db = mysqli_connect("localhost","root","","lms");
	$sql = "SELECT * from `category`";

$data =   mysqli_query( $db , $sql);
$total = mysqli_num_rows($data);

if ($total!=0) {
	?>
<table>
    <tr>
        <th>ID_NO</th>
        <th>CATEGORY_NAME</th>
        <th>CREATIONDATE</th>

        <th>OPERATIONS</th>

    </tr>
    <?php
while ($result = mysqli_fetch_assoc($data)) {
   echo "
	<tr>
	    <td>".$result['cid']."</td> 
	    <td>".$result['category_name']."</td> 
		<td>".$result['creationDate']."</td>
        
        <td><a href='update.php?Id=$result[cid]&category_name=$result[category_name] '>&#9998;</a>
		<a href='delete.php?Id=$result[cid]'>&#10006;</a></td>";
    }
}
	  

?>