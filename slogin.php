<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['suser']);
      $mypassword = mysqli_real_escape_string($db,$_POST['spass']); 
      
      $sql = "SELECT * FROM student WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: shome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<html>
<head>  
        
        <title>Student login page</title>
        <style type = "text/css">
        * {
         box-sizing: border-box;
                }
       body {
                font-family: Arial;
                padding: 10px;
                background: #f1f1f1;    
                }
        div
        {
         
         color: black; 
         background-color: #01FEF2; 
         width: 100%; 
         
        }
        
        .div1
        {
                padding: 30px;
                text-align: center;
                background: white;
        }
        .div1 h1 
        {
                font-size: 50px;
        }
        
        .div2
        {
                margin-top:20px;
                padding: 30px;
                text-align: center;
                height: 80%;
                background: url(student.jpg);
        }
        
        .div3
        {
                padding:5%;
                height:50%;
                width:50%;
                filter: alpha(opacity=60);
                opacity: 0.6;
                background-color: #ffffff;
                font-weight: bold;
                color: #000000;
        }
        
        
        input:focus
        {
                padding:1px 1px;
                background-color:lightblue;
                border-radius: 5px;
        }
        #btn1{
                
                    background-color:  White;
                    border:#008CBA;
                    border : 2px solid #008CBA;
                    color: Black;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
        }   
        #btn1:hover
        {
                background-color: #008CBA;
                color: white;
        } 
        </style>
        
</head>
        
<body>
        <div class="div1">
        <center>
        <h1> Indira National School </h1>
        </center>
        </div>
        <div class="div2">
        <center>
        <h1>STUDENT CREDENTIALS</h1>
                <div class="div3">
                <form method="POST" action="slogin.php">
                        USERNAME: <input type = "text" name="suser"/><br><br>
                        PASSWORD: <input type = "password" name="spass"/><br><br>
                        <input type="submit" value="login" id="btn1"/>
                </form>
                </div>
        </center>
        </div>
</body>        
</html>
