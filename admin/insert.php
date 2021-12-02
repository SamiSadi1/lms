<?php
session_start();
?>




<?php include 'sidenav.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>INSERT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .form {

            font-family: 'Open Sans Condensed', arial, sans;
            width: 500px;
            padding: 30px;
            background: #FFFFFF;
            margin: 50px auto;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
            -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
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
            info margin-left: 140px;
        }

        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 10px;
            text-align: center;
        }

        .input-field {
            width: 100%;
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
            width: 40%;
            opacity: 0.9;
            margin-left: 90px;
        }

        .btn:hover {
            opacity: 1;
        }

    </style>
</head>

<body>
    <div class="form">
        <form action="configuration.php" method="post" enctype="multipart/form-data">
            <div class="input-container">
                <i class="fa fa-check-circle-o"></i> <select name="cid" required>
                    <?php
$db = mysqli_connect( 'localhost', 'root', '', 'lms' );
$sql = 'SELECT * from `category`';
$data =   mysqli_query( $db, $sql );
?>
                    <option>SELECT CATEGORY</option>
                    <?php while($row= mysqli_fetch_array($data)):;?>
                    <option value="<?php echo $row['cid']; ?>"><?php echo $row['category_name'];  ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            <br><br>
            <div class="input-container">
                <i class="fa fa-check-circle-o"></i> <select name="sid" required>
                    <?php
$db = mysqli_connect( 'localhost', 'root', '', 'lms' );
$sql = 'SELECT * from `subcategory`';
$result =   mysqli_query( $db, $sql );
?>
                    <option>SELECT SUBCATEGORY</option>
                    <?php while($row= mysqli_fetch_array($result)):;?>
                    <option value="<?php echo $row['sid']; ?>"><?php echo $row['subcategory_name'];  ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            <br><br>
            <div class="input-container">
                <i class="fa fa-check-circle-o"></i> <select name="lid" required>
                    <?php
$db = mysqli_connect( 'localhost', 'root', '', 'lms' );
$sql = 'SELECT * from `location`';
$result =   mysqli_query( $db, $sql );
?>
                    <option>SELECT LOCATION</option>
                    <?php while($row= mysqli_fetch_array($result)):;?>
                    <option value="<?php echo $row['lid']; ?>"><?php echo $row[1];  ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            <br><br><br>
            <div class="input-container">
                <i class="fa fa-check-circle-o"></i> <select name="ptype" required>
                    <option>SELECT TYPE</option>
                    <option>Rent</option>
                    <option>Sale</option>
                </select>
            </div>
            <br><br>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" name="user_name" value="<?php echo $_SESSION['user_name']  ?>"  readonly>
            </div>
            <br><br>
            <div class="input-container">
                <i class="fa fa-industry icon"></i><input type="text" name="p_NAME" placeholder="PROPERTY NAME" required>
            </div>
            <br><br><br>
            <div class="input-container">
                <i class="fa fa-info icon"></i><textarea name="p_SUMMARY" cols="50" rows="05" placeholder="PROPERTY SUMMARY "></textarea>
            </div>
            <br><br><br>
            <div class="input-container">
                <i class="fa fa-info icon"></i><textarea name="p_FEATURES" cols="50" rows="5" placeholder="PROPERTY FEATURES"></textarea>
            </div>
            <br><br><br>
            <div class="input-container">
                <i class="fa fa-info icon"></i><textarea name="p_DESCRIPTION" cols="50" rows="05" placeholder="PROPERTY DESCRIPTION"></textarea>
            </div>
            <br><br><br>
            <input type="file" name="P_IMAGE" >
            <br><br><br>
            <input type="submit" name="insert" value="UPLOAD">
        </form>
    </div>
</body>

</html>
