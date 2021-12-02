<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
          

        .Register {
            width: 860px;
            margin-top: 5px;
            margin-left: 400px;
        }
        .Register ul {
            list-style: none;
            margin-top: 2%;
        }
        .Register ul li {
            background: #262626;
            width: 170px;
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
        .a {
            position: fixed;
            left: 20px;
            top: 10px;
        }
        .a1 {
            position: fixed;
            left: 1200px
            top: 10px;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        .body {
            position: fixed;
            left: 300px;
            top: 100px;
        }
        .input-container {
            display: -ms-flexbox;
            display: flex;
            width: 100%;
            margin-bottom: 20px;
            margin-left: 140px;
        }
        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 50px;
            text-align: center;
        }
        .input-field {
            width: 80%;
            padding: 10px;
            outline: none;
        }
        .input-field:focus {
            border: 2px solid green;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 60%;
            opacity: 0.9;
            margin-left: 90px;
        }
        .btn:hover {
            opacity: 1;
        }
        .title{
            position: absolute;
            left: 160px;
        }
        
    </style>
</head>
<body>
   
    <div class="Register">
        <ul>
            <div class="a">
                <li class="title">Individual  </li>
                   
                    <form action="configuration.php" method="post">
                        <div class="input-container">
                            <i class="fa fa-home icon"></i>
                            <input type="text" name="accounttype" value="Individual" readonly>
                        </div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="name" placeholder=" NAME">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input type="text" name="email" placeholder=" E-mail">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-mobile icon"></i>
                            <input type="text" name="contactNo" placeholder=" MOBILE NUMBER">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="user_name" placeholder=" USER NAME">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input type="text" name="password" placeholder=" PASSWORD">
                        </div>
                        <input type="submit" class="btn" name="Individual" value="Register">
                    </form>
               
            </div>
            <div class="a1">
                <li class="title"> Companay</li>
                  
                    <form class="f1" action="configuration.php" method="post">
                        <div class="input-container">
                            <i class="fa fa-home icon"></i>
                            <input type="text" name="accounttype" value="Companay" readonly>
                        </div>
                        <div class="input-container">
                            <i class="fa fa-university icon"></i>
                            <input type="text" name="CompanyName" placeholder=" CompanyName">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="name" placeholder=" Company Representator NAME">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input type="text" name="email" placeholder=" E-mail">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-mobile icon"></i>
                            <input type="text" name="contactNo" placeholder=" MOBILE NUMBER">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="OfficeAddress" placeholder=" Office Address">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input type="text" name="user_name" placeholder=" USER NAME">
                        </div>
                        <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input type="text" name="password" placeholder=" PASSWORD">
                        </div>
                            <input type="submit" class="btn" name="Companay" value="Register">
                    </form>
                </div>
            
        </ul>
    </div>
    
</body>
</html>