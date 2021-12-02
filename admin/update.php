
<?php
session_start();
?>


<?php
$db = mysqli_connect("localhost","root","","lms"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UPDATE CATEGORY</title>
</head>
<body>
   
   <?php
   $db = mysqli_connect("localhost","root","","lms");
$pid = $_GET['pid'];
 $query="SELECT * FROM `insertproperty` where pid = '$pid ' ";
$data=mysqli_query($db , $query);
$total = mysqli_num_rows($data);
if ($total!=0) {

while ($result = mysqli_fetch_assoc($data)) {
    ?>
    <form action="configuration.php" method="GET">
        <input type="text" name="pid" value="<?php echo $result['pid'];  ?> " readonly>
        <br><br>
        <input type="text" name="cid" value="<?php echo $result['cid'];  ?>">
        <br><br>
        <input type="text" name="sid" value="<?php echo $result['sid'];  ?>">
        <br><br>
        <input type="text" name="lid" value="<?php echo $result['lid'];  ?>">
        <br><br>
        <input type="text" name="p_NAME" value="<?php echo $result['p_NAME'];  ?>">
        <br><br><br>
        <textarea name="p_SUMMARY" cols="50" rows="05"><?php echo $result['p_SUMMARY'];  ?></textarea>
        <br><br><br>
        <textarea name=" p_FEATURES" cols="50" rows="05"><?php echo $result['p_FEATURES'];  ?></textarea>
        <br><br><br>
        <textarea name="p_DESCRIPTION" cols="50" rows="05"><?php echo $result['p_DESCRIPTION'];  ?></textarea>
        <br><br><br>
        <input type="text" name="ptype" value="<?php echo $result['ptype']; ?>">
        <br><br>
        <input type="submit" name="update" value="Update" />
    </form>
    <?php
    
}
}
    ?>
    
</body>
</html>
