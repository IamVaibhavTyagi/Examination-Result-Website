<html>
<head>
        <title>view page</title>
        <style type = "text/css">
        * {
         box-sizing: border-box;
                }
                
        body {
                font-family: Arial;
                padding: 10px;
                background: #f1f1f1;    
                }
       .div1{
                padding: 30px;
                text-align: center;
                background: url(student.jpg);
                height:100%;
                width:100%;
       }         
         
       table{
            text-align:center;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            
       }
       
       td,th{
             text-align: left;
            height:50px;
            padding-top: 12px;
            padding-bottom: 12px;
            padding:8px;
            border-bottom: 1px solid black;
       }
       
        th {
            background-color:grey;
            color: white;
           
        }
 
                
        </style>
</head>

<body>
        <div class="div1" overflow-x:auto>
              <h1>Student Details</h1> 
               <table id="table1">
                <tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Physics</th>
                <th>Maths</th>
                <th>Chemistry</th>
                <th>Percentage</th>
                </tr> 
        </div>       

<?php
        include("config.php");
        
        $rollno = $_POST['rollno'];
        
        $result = mysqli_query($db,"SELECT * FROM details where rno='$rollno'");

     

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['rno'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['physics'] . "</td>";
        echo "<td>" . $row['maths'] . "</td>";
        echo "<td>" . $row['chemistry'] . "</td>";
        echo "<td>" . $row['percent'] . "</td>";
        echo "</tr>";
}
echo "</table>";
?>


</body>
</html>
