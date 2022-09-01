<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
        <title>Login Page</title>
    </head>

    <style> /*Style codes For design*/
        body {
            background: #f7f7f7; 
        }

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #f1f1f1;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #ffffff;
            width: 100%;
            border: 0;
            border-radius: 10px;
            margin: 0 0 25px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.1);
            transition: 0.3s;

        }

        .form input:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.15);
        }


        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #0c8610;
            width: 100%;
            border: 0;
            padding: 15px;
            border-radius: 10px;
            color: #FFFFFF;
            font-size: 18px;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #06720b;
        }
    </style>


    <body>

    <div class="login-page">
        <div class="form">

            <form class="login-form" action = "loginHandler.php" method = "POST">     
                <input type="text" name  = "ssn" placeholder="ssn"/>
                <input type="password" name="pwd" placeholder="password"/>
                <button type="submit" name="submit">log in</button> 
            </form>
          
        </div>
    </div>

</body>
</html>
