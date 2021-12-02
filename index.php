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
        
        .header {
            width: 860px;
           margin-top: 50px;
            margin-left: 220px;
            
            
            
        
        }
        .header ul {
            list-style: none;
            margin-top: 2%;
            
        }
        .header ul li {
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
        .header ul li a {
            color: #fff;
            text-decoration: none;
        }
        .header ul li:hover {
            background: crimson;
        }
        .header ul ul {
            display: none;
        }
        .style {
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
        .style:hover {
            background: crimson;
        }
        .header ul li:hover>ul {
            display: block;
        }
  
        

    </style>
</head>
<body>
  
    <div class="header">
        
        <ul>
          
            <li><a href="index.php">home</a></li>
            <li><a href="rent.php"> for rent</a>
                <ul>
                    <li><a href="rent.php"><?php
$db = mysqli_connect("localhost","root","","lms"); 
 $query="SELECT * FROM `category`";
$data=mysqli_query($db , $query);
$total = mysqli_num_rows($data);
 if ($total!=0) {
     while( $row = mysqli_fetch_array( $data ) ) { 
   echo   "<a href = 'rent.php?cid= $row[cid]'><span class = 'style'> $row[1]</span></a>"; }}?></a>
              
              
              
              
              
              </li>
            
                </ul>
            </li>
            <li><a href="">For sale</a>
                <ul>
                    <li><a href="sale.php"><?php
$db = mysqli_connect("localhost","root","","lms"); 
 $query="SELECT * FROM `category` ";
$data=mysqli_query($db , $query);
$total = mysqli_num_rows($data);
 if ($total!=0) {
     while( $row = mysqli_fetch_array( $data ) ) { 
         echo   "<a href = 'sale.php?cid= $row[cid]'><span class = 'style'> $row[1]</span></a>"; }}?></a></li>
                </ul>
            </li>
            <li><a href="developer.php">developers</a></li>
            <li><a href="http://localhost/lms/admin/index.php">owner account</a></li>
        </ul>
    </div>
    
    

</body>
</html>


