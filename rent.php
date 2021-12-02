


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
       
      
           .sidenav {
            width: 200px;
          position:absolute;
          top: 200px;       
        }
        .style1 {
            background: #262626;
            width: 170px;
            border: 1px solid #fff;
            height: 50px;
            line-height: 50px;
            text-align: center;
            float: left;
            color: #fff;
            font-size: 16px;
            position: relative;
            font-family: poppins;
            text-transform: uppercase;
            font-weight: bold;
        }
        .style1:hover {
            background: crimson;
        }

       

.main {
    
      max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
      
    

        }




.row {
            width: 600px;
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22); 
position: relative;
left: 50px;
top: 200px;    
}
        
        .display{
            
            position: absolute;
            top: 60px;
            left: 260px;
            font-size: 20px;
            
            
            
        } 
        
        .display-1{
            
            position: absolute;
            top: 120px;
            left: 260px;
            font-size: 20px;
            
            
            
        }
        
    
    </style>
</head>
<body>
  
  <div class = "main">
   <?php include 'index.php';?>
    <div class="sidenav">
         <h3>  <b>SUB CATEGORY</b></h3>  
         <?php
    $db = mysqli_connect( 'localhost', 'root', '', 'lms' );
    $cid = $_GET['cid'];
    $query = "SELECT * FROM `subcategory`WHERE cid = '$cid'";
    $data = mysqli_query( $db, $query );
    $total = mysqli_num_rows( $data );
    if ( $total != 0 ) {
        while( $row = mysqli_fetch_array( $data ) ) {
            echo   "<a href = 'rentsubdisplay.php?sid= $row[sid]'><span class = 'style1'> $row[2]</span></a>";
        }
    }
    ?>
        </div>
         
         
         
            <?php
    $db = mysqli_connect( 'localhost', 'root', '', 'lms' );
    $cid = $_GET['cid'];
    $query = "SELECT i.pid, i.p_NAME,i.P_IMAGE,l.l_CITY 
    FROM `insertproperty` as i join location as l  
    ON i.lid = l.lid  
    WHERE i.cid = '$cid' and i.ptype = 'Rent'";
    $data = mysqli_query( $db, $query );
    $total = mysqli_num_rows( $data );
    if ( $total != 0 ) {
        while ( $result = mysqli_fetch_assoc( $data ) ) {
              ?>
              <div class = "row">
         
            
            
            <?php
            
            
            echo"<a href='details.php?pid=$result[pid]'><img src='admin/image/".$result['P_IMAGE']."' width='40%'></a>";
            echo'<span class = "display">'.$result['p_NAME'].'</span>';
            echo'<span class = "display-1">'.$result['l_CITY'].'</span>';
            
         
           ?>
              
               </div>
      
    
          <?php
          
        }
    }
            ?>
            
            </div>
          
            
</body>
</html>


