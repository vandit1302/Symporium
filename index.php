<?php
session_start();
//$_SESSION["logged"] = false;
if(isset($_SESSION["username"]))
{
    $_SESSION["sucess"] = "Not logged in";
    //header('location: login.php');
}

if(isset($_GET["logout"]))
{
    $_SESSION["logged"] = false;
}
?>


<!DOCTYPE HTML>
<html>
    <head>
        <title>Conference Management System</title>
        <style>
            .box1
            {
                background: #d9d9d9;
	            border-radius: 25px;
                width:90%;
                height:90%;
                margin:0 auto 0 auto;
            }
            .header
            {
                background: #f2f2f2;
                width:95%;
                height:95%;
                margin:0 auto 0 auto;
            }
            .heading
            {
                font-size:30px;
                font-family: inherit;
                padding:10px;
            }
            .leftheader
            {
                width:70%;
                display:inline-block;
            }
            .rightheader
            {
                display: inline-block;
                float:right;
                padding: 25px;
            }
            .navbar
            {
                background:#333;
            }
            table 
            {
                border-spacing: 5px;
            }
            th
            {
                padding:10px;
                font-size:20px;
                //border: 2px solid grey;
                //color:white;
            }
            .extras
            {
                background-color: #f2f2f2;
                width:100%;
                text-align: right;
            }
            .one
            {
                padding:10px;
                font-size:20px;
                border: 2px solid grey;
                color:white;
                background: #737373;
            }
            .two
            {
                padding:10px;
                font-size:16px;
                color:red;
                padding-right:30px;
            }
            a.ex1
            {
                color: #ffffff;
                text-decoration: none;
                font-size:16px;
            }
            th.one:hover
            {
                background-color:#cccccc;
            }
            .mainbox
            {
                background-color: #f2f2f2;
                width:95%;
                height:95%;
                margin:0 auto 0 auto;
            }
            .tabbox
            {
                background-color: #f1f1f1;
                border: 1px solid red;
                border-radius:25px;
                width:300px;
                height:100px;
            }
            table.tab2
            {
                width:1200px;
                //table-layout: fixed;
                border-spacing: 15px;
            }
            .tab2 td
            {
                height:20px;
            }
            
        </style>
    </head>
    <body style="background: #80aaff;">
        <div class="box1">
            <div class="header">
                <div class="leftheader"><img src="img1.png">
                    <?php if($_SESSION["logged"] == true): ?>
                        <p style="font-size:20px;color:#ed861f"><b>Welcome <?php echo $_SESSION["username"]?></b></p>
                    <?php endif; ?>
                </div>
                <div class="rightheader"><a class="ex1" style="color:black;background:#c2bc15;" href="login.php">Log in</a><br><a href="register.php" style="color:black;background:#c2bc15;">SignUp</a><br>
                    <a href="index.php?logout='1'" style="color:black;background:#c2bc15;">Logout</a>
                </div>
            </div>
            <div class="navbar">
                <table style="margin:0 auto 0 auto;">
                    <tr>
                        <th class="one"><a class="ex1" href="#">Home</a></th>
                        <th class="one"><a class="ex1" href="FAQ.htm">Overview</a></th>
                        <th class="one"><a class="ex1" href="installation.htm">Installation</a></th>
                        <th class="one"><a class="ex1" href="news.htm">News</a></th>
                        <th class="one"><a class="ex1" href="">Publications</a></th>
                        <th class="one"><a class="ex1" href="./files/uploads/index.php">Upload Paper</a></th>
                        <th class="one"><a class="ex1" href="./files/downloads/downloads.php">Download Paper</a></th>
                    </tr>
                </table>
            </div>
            <div class="extras">
                <table align="right">
                    <tr>
                        <th class="two">Contact</th>
                        <th class="two">Policy</th>
                        <th class="two">Privacy</th>
                        <th class="two">Terms</th>
                        <th class="two">Installation</th>
                    </tr>
                </table>
            </div>
            <br><br>
            <div class="mainbox">
                <table class="tab2" style="margin:0 auto 0 auto;">
                    <tr class="t2r1">
                        <td class="tabbox">
                            <p style="font-size:20px;text-align: center;">Since</p><p style="font-size:40px;text-align: center;">2019</p>
                        </td>
                        <td class="tabbox">
                            <p style="font-size:40px;text-align: center;">10,00,0000</p><p style="font-size:20px;text-align: center;">Users</p>
                        </td>
                        <td class="tabbox">
                            <p style="font-size:40px;text-align: center;">20,000</p><p style="font-size:20px;text-align: center;">Conferences served</p>
                        </td>
                        <td class="tabbox">
                            <p style="font-size:20px;text-align: center;">Web traffic</p><p style="font-size:40px;text-align: center;">20M+</p>
                            <p style="font-size:20px;text-align: center;">pages processed per month</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:40px;text-align: center;">Services:</p>
                            <ul>
                                <li style="font-size: 20px;">Conference Management</li>
                                <li style="font-size: 20px;">Smart Program</li>
                                <li style="font-size: 20px;">Publishing</li>
                                <li style="font-size: 20px;">Smart CRP</li>
                            </ul>
                        </td>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:40px;text-align: center;">How to:</p>
                            <ul>
                                <li style="font-size: 20px;">Create Acoount</li>
                                <li style="font-size: 20px;">Create Conference</li>
                                <li style="font-size: 20px;">Publish volumes</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:25px;text-align: center;"><strong>What is EasyChair:</strong></p>
                            <p style="font-size:20px;text-align: center;">EasyChair is a conference management system used by VIT Chennai.</p>
                        </td>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:25px;text-align: center;"><strong>Some of our Conferences: </strong></p>
                            <p style="font-size:20px;text-align: center;"><a href="">All India paper summit 2018.</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:25px;text-align: center;"><strong>Our creators: </strong></p>
                            <p style="font-size:20px;text-align: center;">VIT Chennai</p>
                        </td>
                        <td colspan="2" class="tabbox">
                            <p style="font-size:25px;text-align: center;"><strong>Testimonials: </strong></p>
                            <p style="font-size:20px;text-align: center;"><a href="">Our testimonials</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" class="tabbox">
                            <p style="font-size:25px;text-align: center;"><strong>News:</strong></p>
                            <p style="font-size:20px;text-align: center;">10/02/2020: Site created</p>
                            <p style="font-size:20px;text-align: center;">11/02/2020: Site launched</p>
                            <p style="font-size:20px;text-align: center;">12/02/2020: First paper published</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>