<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
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
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 20px;
            margin-left: 140px;
            margin-top: 30px;
        }

        .icon {
            padding: 10px;
            background: green;
            color: white;
            min-width: 50px;
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

        .Need {

            position: fixed;
            left: 340px;
            top: 320px;
        }

    </style>

</head>

<body>
    <div class="body">
        <form action="configuration.php" method="post">



            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input type="text" name="user_name" placeholder="user Name" required />
            </div>

            <div class="input-container">
                <i class="fa fa-key icon"></i>

                <input type="password" name="password" placeholder="Password" required />
            </div>

            <input type="submit" class="btn" name="login" value="LOGIN NOW" />




        </form>
    </div>

    <div class="Need">Need an account?<a href="account.php"><input type="button" value="REGISTER" /></a></div>
</body>

</html>
