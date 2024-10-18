<?php
 
$con = new mysqli('localhost','root','','adp');
if(!$con){
    die(mysqli_error("Error"+$conn));
}
else{
    if(isset($_POST['submit'])){
        $datas = $_POST['breakfast'];
        //echo $datas;
        $allData =implode( ",", $datas);
        echo $allData;
        $name = $_POST['name'];
        $sql = "insert into breakfast1 (breakfast,name)
        values('$allData','$name')";
        $result= mysqli_query($con,$sql);
        if($result){
            echo "Inserted Successfully!";
            header("location:Payment.html");
        }
        else{
            die(mysqli_error($con));
        }
    }
}


?>

