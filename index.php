<?php $link = mysql_connect('localhost', 'root'); ?>
<html>
<head>
        <title>Hello world!</title>
        <style>
        body {
                background-color: white;
                text-align: center;
                padding: 50px;
                font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
        }

        #logo {
                margin-bottom: 40px;
        }
        </style>
</head>
<body>
        <img id="logo" src="logo.png" />
        <h1><?php echo "Hello world!"; ?></h1>
        <?php if(!$link) { ?>
                <h2>Can't connect to local MySQL Server!</h2>
        <?php } else { ?>
                <h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
        <?php } ?>
      
      <?php
    echo "********egco313 Test Database Connection ******** <br> ";
    $dbconn = pg_connect("host=ec2-107-22-235-167.compute-1.amazonaws.com port=5432 dbname=d8eo2o$
      
    
    if($dbconn){
        echo "-- Database connected <br>";

    } else {
        echo "--Database disconnected <br>";
    }
$result = pg_query($dbconn,"SELECT * FROM student where age>20 order by age");
    var_dump(pg_fetch_all($result));
   if(pg_num_rows($result)==0){
       print("No data in table<br>");
   }else{
       
       print("<br>===Table in Database===<br>");
       echo'<table border=1 >
       <tr>
           <th>id</th>
            <th>name</th>
           <th>age</th>
       </tr>';
        
       while($row = pg_fetch_row($result)){
        echo  '
               <tr>
                   <td>'.$row[0].'</td>
                   <td>'.$row[1].'</td>
                   <td>'.$row[2].'</td>
                  </tr> ';
            
        }
        echo '</table>';
       }
       ?>

</body>
</html>




