<?php
session_start();

include("connect.php");// connect to DB

$patient_id = $_POST['patient_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM patients WHERE patient_id ='".$patient_id."' AND password ='".$password."'";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$_SESSION = $row;

if ($row['patient_id']) {

    #start session
    $_SESSION = $row;
    $_SESSION ['user']='patient';

    header("Location: ../patient.php");

} else {
    echo $conn->error;
    header("Location: http://eliasharoun.com/error/");

}

$conn->close();
?>