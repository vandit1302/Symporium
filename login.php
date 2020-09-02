<?php
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
</head>

<body style="background: linear-gradient(to right, #2980b9, #6dd5fa, #ffffff);">
    <div class="container">
        <div class="card" style="width:300px;margin:auto;margin-top:100px; box-shadow: 5px 10px 18px #888888;">
            <div class="card-body">
                <div class="card-title " style="text-align: center;  font-size:25px;">Login</div>
                <form id="form" action="login.php" method="POST">
                    <div class="from-group input-group">
                        <div class="input-group-prepend">


                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control same" id="uname" placeholder="Enter username" required>

                    </div>
                    <br/>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">


                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>

                        <input type="password" name="password" class="form-control same" id="pass" placeholder="Enter Password" required>

                    </div>



                    <button type="submit" class="btn btn-outline-success" name="login"> Submit</button>
                    <br/>
                    <br/>

                    <div style=" border:2px solid coral;border-radius:20px; padding-left:50px;">


                        <a href="register.php" style="text-align:center">Create New account</a>
                    </div>


                </form>

            </div>
        </div>
    </div>

</body>

</html>