<?php
   include('session.php');
?>

<html>
<head>
        <title>Teachers home page</title>
        
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
         
        .topnav {
            overflow: hidden;
            background-color: #333;
  
        }

        
        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        
        .topnav a:hover {
            background-color: #01FEF2;
            color: black;
        } 
        
       
        
       .left 
       {
            float:left;
            margin-top:20px ;
            width: 22%;
            background-color: #333;
            height: 100%;
            
        }
        
        ul
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            
            background-color: #333;
        }

        li a {
            display: block;
            color: #000;
            padding: 14px 16px;
            text-decoration: none;
            background-color: #333;
            color:white;
        }


        li a:hover{
            background-color:#01FEF2 ;
            color: black;
        }
           
       

        
        .right {
            float: right;
            width: 76%;
            background-color:#333;
            padding : 20px;
            margin-top:20px;
            height:100%
        }    
           
          #iframe1
          {
                 margin:0; padding:0;
          } 
         </style>
</head>
<body>
        <div class="div1">
        <h1> Indira National School </h1>
        </div>
        
        <div class="topnav">
                <a href="home.php" target="iframe1">HOME</a>
                <a href="about.php" target="iframe1" >ABOUT US</a>
                <a href="logout.php" style="float:right">SIGN OUT</a>           
        </div>
        
        
            <div class = "left">
                        <ul>    
                          
                          <li><a href="insert.php" target="iframe1">INSERT</a></li>
                          <li><a href="search.php" target="iframe1">SEARCH</a></li>
                          <li><a href="update.php" target="iframe1">UPDATE</a></li>
                          <li><a href="delete.php" target="iframe1">DELETE</a></li>
                          <li><a href="view.php" target="iframe1">VIEW ALL</a></li>
                        </ul>
               </div> 
                
                <div class = "right">
                        <iframe src="home.php" height=100% width=100% name="iframe1" id="iframe1" scrolling="auto" frameborder="0"></iframe>
                </div>
        
       
        
        
</body>
</html>
