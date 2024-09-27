<?php
    include("conn.php");

    if(isset($_POST["save"])){
        $user = $_POST["student"];
        $sem = $_POST["semester"];
        $result = $_POST["result"];
        $rollno = $_POST["rollno"];


        $myq = "insert into result (name,semester,result,rollno) values('$user','$sem','$result', '$rollno')";
        mysqli_query($con,$myq);

        echo "<script>'Data Saved.'</script>";

        // header("location:admin.html");

    }


?>
