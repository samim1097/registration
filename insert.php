
<?php
$FIRSTNAME=$_POST['firstName'];
$LASTNAME=$_POST['lastName'];
$EMAIL=$_POST['email'];
$AGE=$_POST['age'];
$GENDER=$_POST['gender'];
$CAST=$_POST['cast'];
$PH=$_POST['ph'];
$MOBILE=$_POST['mobile'];
$CLASS=$_POST['class'];
$ADDRESS=$_POST[address];
$host = "localhost";
$dbusername = "root";
$dbpassword ="";
$dbname ="registration";
// echo($FIRSTNAME);
$conn =new mysqli($host, $dbusername, $dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo($_POST["firstName"]);
}




// {
// // $select = "select email from register where email =? limit 1";
// $insert ="insert into student (firstName, lastName, email, age, gender, cast, ph, mobile, class, address) values("$FIRSTNAME", "$LASTNAME", "$EMAIL","$AGE", "$GENDER", "$CAST", "$PH", "$MOBILE","$CLASS","$ADDRESS")";
// $stmt +$conn->prepare($select);
// $stmt->$stmn->num_row;

// }
// if($rnum==0){
// $stmt->close();
// $stmt =$conn->prepare($insert);
// $stmt->bind_param("ssssssssssii",$firstName, $lastName, $email, $age, $gender, $cast, $ph, $mobile, $class, $address);
// $stmt->execute();
// echo "new record inserted sucessfully";
// }
// $stmt->closer();
// $conn->close();
?>