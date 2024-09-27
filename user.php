<?php
        include("conn.php");

        if(isset($_POST["save"])){
            $course = $_POST["course"];
            $cls = $_POST["cls"];
            $sem = $_POST["sem"];
            $roll = $_POST["roll"];
    
    
            // $myq = "insert into result (name,semester,result) values('$user','$sem','$result')";

            $myq = "select * from result where semester = '$sem' and rollno = '$roll'"; 
            $kyamila = mysqli_query($con,$myq);
            $milgaya = mysqli_num_rows($kyamila);

            if($milgaya==1){
                $data = mysqli_fetch_array($kyamila);
            }
    
            // echo "<script>alert('Data Saved.')</script>";
    
        }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="father">
        <div class="son">
            <h2>Name</h2>
            <h2>Semester</h2>
            <h2>Result</h2>
        </div>
    </div>
</body>
</html>
