<?php
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['Pincode'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

//Database connection
$conn = mysqli_connect('localhost','root','','adp');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into payment(firstname, email, address, city, state, Pincode, cardname, cardnumber, expmonth, expyear, cvv)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssissiii",$firstname, $email, $address, $city, $state, $pincode, $cardname, $cardnumber, $expmonth, $expyear, $cvv);
    if(!($stmt->execute())){
        echo("Error description: " . $stmt -> error);
    }
    echo "Payment Successful";
   header("location:endon.html");
    

}



?>