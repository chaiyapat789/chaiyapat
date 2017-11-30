<?php
    echo "********egco313 Test Database Connection ******** <br> ";

    $dbconn = pg_connect("host=ec2-107-22-235-167.compute-1.amazonaws.com port=5432 dbname=d8eo2og2d8d8gu user=pevwrriggdfvhx password=aba1477c83f35890f8cdbeea35895438b00db3380f9874428735ca5ffc3d7301");
    
    if($dbconn){
        echo "-- Database connected <br>";

    } else {
        echo "--Database disconnected <br>";
    }

  //  $result = pg_query($dbconn,"SELECT * FROM student where age<60 order by age");
    //var_dump(pg_fetch_all($result));
   // if(pg_num_rows($result)==0){
   //     print("No data in table<br>");
  //  }else{
       
    //    print("===Table in Database===<br>");
     //   echo'<table border=1 >
     //   <tr>
     //       <th>id</th>
     //       <th>name</th>
        //    <th>age</th>
    //    </tr>';
        
     //   while($row = pg_fetch_row($result)){
      //   echo  '
      //          <tr>
       //             <td>'.$row[0].'</td>
       //             <td>'.$row[1].'</td>
        //            <td>'.$row[2].'</td>
       //     </tr> ';
            
        //}
        //echo '</table>';
       // }
////////////////////////////////////////////
       $result = pg_query($dbconn,"SELECT * FROM student where age >20 order by age");
        //var_dump(pg_fetch_all($result));
        if(pg_num_rows($result)==0){
            print("No data in table<br>");
        }else{
           
            print("===Table in Database===<br>");
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