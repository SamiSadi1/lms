


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

         
         
         
            <?php
    $db = mysqli_connect( 'localhost', 'root', '', 'lms' );
   
    $query = "SELECT * 
    FROM `oweraccount`
    
    WHERE CompanyName IS NOT NULL";
    $data = mysqli_query( $db, $query );
    $total = mysqli_num_rows( $data );
    if ( $total != 0 ) {
        while ( $result = mysqli_fetch_assoc( $data ) ) {
              ?>
              <div class = "row">
         
            
            
            <?php
            
            
            echo"<a href='details.php?user_name =$result[user_name]'>".$result['CompanyName']."</a>";
          

            
         
           ?>
              
               </div>
      
    
          <?php
          
        }
    }
            ?>
            
            </div>
          
            
</body>
</html>


