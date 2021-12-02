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
        .sidenav ul {
            list-style: none;
            margin-top: 2%;
            
        }
        .sidenav ul li {
            background: #262626;
            width: 200px;
            border: 1px solid #fff;
            height: 50px;
            line-height: 50px;
            text-align: center;
            float: left;
            color: #fff;
            font-size: 13px;
            position: relative;
            font-family: poppins;
            text-transform: uppercase;
            font-weight: bold;
        }
        .sidenav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .sidenav ul li:hover {
            background: crimson;
        }
       
            </style>
    </head>
    <body>
  
       
       <div class="sidenav">
        
        <ul>
          
           
            <li><a href="insert.php">INSERT INFORMATION</a></li>
            <li><a href="propertymanage.php">CUSTOMIZE INFORMATION</a></li> 
            <li><a href="category.php">INSERT CATEGORY</a></li>
            <li><a href="subcategory.php">SUB CATEGORY</a></li>
            <li><a href="logout.php">LOG OUT</a></li>
            
            
        </ul>
    </div>
    
   </body>
    </html>