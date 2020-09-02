<?php

include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup page</title>
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
                <div class="card-title " style="text-align: center;  font-size:25px;">SignUp</div>
                <form id="form" action="register.php" method="POST" class="needs-validation" novalidate>
                    <div class="from-group input-group">
                        <div class="input-group-prepend">


                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <label for="username"></label>
                        <input type="text" name="username" class="form-control same" id="uname" placeholder="Enter username" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Please Enter valid data</div>

                    </div>
                    <br/>
                    <br/>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">


                            <span class="input-group-text"><i class="fa fa-key"></i></span>

                        </div>
                        <label for="password"></label>
                        <input type="password" name="password" class="form-control same" id="pass" placeholder="Enter Password" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Please Enter valid data</div>


                    </div>
                    <br/>
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Please Enter valid data</div>


                    </div>
                    <div class="form-group">
                        <label>ReEnter Email Address</label>
                        <input type="email" name="email2" class="form-control" required>
                        <div class="valid-feedback">Valid</div>
                        <div class="invalid-feedback">Please Enter valid data</div>

                    </div>


                    <button type="submit" class="btn btn-outline-success" value="submit"> 
                        <span class="ha"></span>
                        Submit</button>

                </form>

            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        var form = $('#form');
        var d = $('#form')[0].length;
        console.log(d);
        form.on('submit', function() {
            $('.ha').addClass('spinner-border');
            for (var i = 0; i < d - 1; i++) {
                if (form[0][i].checkValidity() == false) {
                    event.preventDefault();
                    event.stopPropagation();


                }

                $('#form').addClass('was-validated');
                setTimeout(function() {
                    $('.ha').removeClass('spinner-border');
                }, 1000);
                console.log(form[0][2].value);

            }
            if (form[0][2].value != form[0][3].value) {
                event.preventDefault();
                event.stopPropagation();
                alert('Emails do no match');

            }

        });
    });
</script>


</html>