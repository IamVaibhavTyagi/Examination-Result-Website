<?php
        include("config.php");

        if($_SERVER["REQUEST_METHOD"] == "POST") {
        
          $rollno = mysqli_escape_string($db, $_POST['rollno']);
          
          $phy = mysqli_escape_string($db, $_POST['phy']);
          $maths = mysqli_escape_string($db, $_POST['maths']);
          $chem = mysqli_escape_string($db, $_POST['chem']);
          
          $percent = (($phy + $maths +$chem)/300)*100;
          
       
          
          
          $query = "update details set physics='$phy',maths='$maths',chemistry='$chem',percent='$percent' where rno='$rollno';";

          mysqli_query($db, $query);
          
          header('location:update.php');
        }
?>




<html>
<head>  
        
        <title>Update page</title>
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
        
        
        .div2
        {
                margin-top:0;
                padding: 10px;
                text-align: center;
                height: 100%;
                background: url(student.jpg);
        }
        
        .div3
        {
                padding:5%;
                height:80%;
                width:50%;
                filter: alpha(opacity=60);
                opacity: 0.7;
                background-color: #ffffff;
                font-weight: bold;
                color: #000000;
                
        }
        
        label,select {
                color: black;
                
                width: 150px;
                float: left;
              }
       
        
        input:focus
        {
                padding:1px 1px;
                background-color:lightblue;
                border-radius: 5px;
                
        }
         
        #btn1,#btn2{
                
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
        #s1
        {
                    background-color:  White;
                    border:#008CBA;
                    border : 2px solid #008CBA;
                    color: Black;
                    text-align: center;
        } 
        #btn1:hover,#btn2:hover,#s1:hover
        {
                background-color: #008CBA;
                color: white;
        } 
        </style>
        
</head>
        
<body>
        
        <div class="div2">
        <center>
        <h1>UPDATE DETAILS</h1>
                <div class="div3">
                <form method="POST" action="">
                       <label> ROLL NO:</label><input type = "text" name="rollno"/><br><br>
                       <label> PHYSICS:</label><input type = "text" name="phy"/><br><br>
                       <label> MATHS:</label> <input type = "text" name="maths"/><br><br>
                       <label> CHEMISTRY:</label> <input type = "text" name="chem"/><br><br>
                       
                       <input type="submit" value="Update" id="btn1"/>
                       <input type="reset" id="btn2">
                </form>
                </div>
        </center>
        </div>
</body>        
</html>
