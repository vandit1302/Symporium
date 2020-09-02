<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
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
<body style="background: #80aaff;" class="box1">
  <div class="header">
                <div class="leftheader"><img src="../../img1.png">
                    
                </div>
                <div class="rightheader"><a class="ex1" style="color:black;background:#c2bc15;" href="login.php">Log in</a><br><a href="register.php" style="color:black;background:#c2bc15;">SignUp</a><br>
                    <a href="index.php?logout='1'" style="color:black;background:#c2bc15;">Logout</a>
                </div>
            </div>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['filename']; ?></td>
      <td><?php echo floor($file['filesize'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>