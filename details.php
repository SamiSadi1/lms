<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
              box-sizing: border-box;
        }
   
.card {
  font-family: 'Open Sans Condensed', arial, sans;
            width: 600px;
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
}
       input[type=text], select, textarea {
  width: 100%; 
  padding: 12px;  
  border: 1px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical ;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.form {
  font-family: 'Open Sans Condensed', arial, sans;
            width: 350px;
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
              position:fixed;
            top: 50px;
             left: 980px;
}
        .display{
            position: absolute;
            top: 220px;
            left: 150px;
        }
    </style>
</head>
<body>
<?php include 'index.php';?>
    
     <?php
    $db = mysqli_connect( 'localhost', 'root', '', 'lms' );
    $pid = $_GET['pid'];
    $query = "SELECT i.pid, i.lid,i.p_NAME, i.p_SUMMARY, i.p_FEATURES,i.P_IMAGE, i.p_DESCRIPTION,i.user_name,o.name,o.contactNo FROM `insertproperty`as i join oweraccount as o ON i.user_name=o.user_name WHERE i.pid = '$pid'";
    $data = mysqli_query( $db, $query );
    $total = mysqli_num_rows( $data );
    if ( $total != 0 ) {
        while ( $result = mysqli_fetch_assoc( $data ) ) {
            ?>
            <div class="display">
            
            <?php
            echo '<div class="card">';
            echo "<img src='admin/image/".$result['P_IMAGE']."' width='100%'></a>";
            echo'</div>'; 
            echo '<div class="card">';
            echo "<u><h2>PROPERTY NAME</h2></u> <br><br>";
            echo  $result['p_NAME'];
            echo'</div>';
            echo '<div class="card">';
             echo "<u><h2>PROPERTY SUMMARY</h2></u> <br><br>";
            echo  $result['p_SUMMARY'];
            echo'</div>'; 
            echo '<div class="card">';
             echo "<u><h2>PROPERTY FEATURES</h2></u> <br><br>";
            echo  $result['p_FEATURES'];
            echo'</div>'; 
            echo '<div class="card">';
             echo "<u><h2>PROPERTY DESCRIPTION</h2></u> <br><br>";
            echo  $result['p_DESCRIPTION'];
            echo'</div>'; 
            ?>
            </div>
    
            <form class="form" action="configuration.php" method="post">
                <input type="hidden" name="pid" value="<?php echo $result['pid'];  ?>">
                <input type="hidden" name="user_name" value="<?php echo $result['user_name'];  ?>">
                <input type="text" name="name" value="<?php echo $result['name'];  ?>" readonly>
                <input type="text" name="contactNo" value="<?php echo $result['contactNo'];  ?>" readonly>
                <input type="text" name="cname" placeholder="Enter Your Name ">
                <input type="text" name="cContactNo" placeholder="Enter Your Contact Number ">
                <input type="text" name="cemail" placeholder="Enter Your E-mail ">
                <textarea name="massage" cols="50" rows="5" placeholder="Please type Your massage"></textarea>
                <input type="submit" name="send" value="Send Massage">
            </form>
           
      <?php
        }
    }
            ?>
</body>
</html>
