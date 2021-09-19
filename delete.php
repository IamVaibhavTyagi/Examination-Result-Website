<?php
        include("config.php");

        if($_SERVER["REQUEST_METHOD"] == "POST") {
        
          $rollno = mysqli_escape_string($db, $_POST['rollno']);
          
          $query = "delete from details where rno='$rollno';";

          mysqli_query($db, $query);
          
          header('location:delete.php');
        }
?>

<html>
<head>  
        
        <title>Delete page</title>
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
                height:50%;
                width:50%;
                filter: alpha(opacity=60);
                opacity: 0.7;
                background-color: #ffffff;
                font-weight: bold;
                color: #000000;
                
        }
        
        label {
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
        #btn1:hover,#btn2:hover
        {
                background-color: #008CBA;
                color: white;
        } 
        </style>
        
</head>
        
<body>
        
        <div class="div2">
        <center>
        <h1>DELETE STUDENT DETAIL</h1>
                <div class="div3">
                <form method="POST" action="delete.php">
                       <label> ROLL NO:</label><input type = "text" name="rollno"/><br><br>
                       
                       
                        
                       <input type="submit" value="Delete" id="btn1"/>
                       <input type="reset" id="btn2">
                </form>
                </div>
        </center>
        </div>
</body>        
</html>
