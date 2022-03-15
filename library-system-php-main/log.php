<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

            body{
                background-image:url("j.jpg");
                background-repeat:no-repeat;
                background-attachment: fixed;
                background-size:cover;
            }

        input[type=text], input[type=password] {           
            width: 100%;
            padding: 12px 12px;
            margin: 8px 0px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 0px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            height:200px;
        }

   
        .container {
            padding: 20px 500px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        p{
            text-align:center;
            font-size:20px;
            height:10px;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    
</style>
</head>
<body>
<form action="action_page.php" method="post"></form>
    <div class="imgcontainer">
        <style>
            img {
              border-radius: 50%;
            }
            </style>
        <img src="n.jpg"  width="200" height="200">
    </div>
    <div class="container">

    <?php

$username = $password  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usernamename = test_input($_POST["name"]);
  $password = test_input($_POST["psw"]);

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  User name <input type="text" name="name">
  <br><br>
  Password <input type="text" name="psw">
  <br><br>
</form>
       
<?php
echo $username;
echo "<br>";
echo $password;
echo "<br>";
?>
        
        <form action="library.html">
            <button type="submit">Login</button>
         </form>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        
    </div>
</body>
</html>