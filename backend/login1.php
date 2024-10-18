<?php
$email = $_POST['email'];
$password = $_POST['password'];
echo $email;
//Database connection here
$con = new mysqli("localhost", "root", "", "adp");
if($con->connect_error){
    die("Failed to connect: " .$con->connect_error);

}else{
    $stmt = $con->prepare("select * from registration where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
       $data = $stmt_result->fetch_assoc();
       if($data['password'] === $password){
        echo "<h2>Login Successfull</h2>";
        header("location:Home.html");
       }
    }else{
        echo"<h2>Invalid Email or password</h2>";
    }
}




?>