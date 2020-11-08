<?php
include_once 'dbconnect.php';
if(isset($_POST['submit']))
{    
$firstName = $_POST['firstName'];
$middleName = $_POST['middleName'];
$lastName = $_POST['lastName'];
$admissionNumber = $_POST['admissionNumber'];
$admissionDate = $_POST['admissionDate'];
$form = $_POST['form'];
$birthYear = $_POST['birthYear'];
$number = $_POST['number'];
$resident = $_POST['resident'];
$gender = $_POST['gender'];
$Region = $_POST['Region'];

 $sql = "INSERT INTO registration (firstName, middleName, lastName, admissionNumber, admissionDate, form, birthYear, number, resident, gender, Region)
  VALUES ('$firstName','$middleName','$lastName','$admissionNumber','$admissionDate','$form','$birthYear','$number','$resident','$gender','$Region')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>




