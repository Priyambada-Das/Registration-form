<?php

$fullName=$_POST['firstName'];
$dateofbirth=$_POST['dateofbirth'];
$email=$_POST['email'];
$homeaddress=$_POST['homeaddress'];
$nationality=$_POST['nationality'];
$fatherName=$_POST['fatherName'];
$motherName=$_POST['motherName'];
$phoneHome=$_POST['phoneHome'];
$phoneMobile=$_POST['phoneMobile'];
$gender=$_POST['gender'];
$hscName=$_POST['hscName'];
$hscBoard=$_POST['hscBoard'];
$hscScore=$_POST['hscScore'];
$sscName=$_POST['sscName'];
$sscBoard=$_POST['sscBoard'];
$sscScore=$_POST['sscScore'];
$currentPursuing=$_POST['currentPursuing'];
$CurrentinstituteName=$_POST['CurrentinstituteName'];
$backlog=$_POST['backlog'];
$photo=$_POST['photo'];
$hscphoto=$_POST['hscphoto'];
$sscphoto=$_POST['sscphoto'];
$totalmarksheet=$_POST['totalmarksheet'];


$conn = new mysqli('localhost','root','','test');
if($con->connect_error){
    die('Connection failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(firstName,dateofbirth, email, homeaddress, nationality, fatherName, motherName,
    phoneHome, phoneMobile, gender, hscName, hscBoard, hscScore,sscName, sscBoard, sscScore,currentPursuing, CurrentinstituteName,backlog,
    photo, hscphot, sscphoto, totalmarksheet ) values(?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?; ?;)");
    $stmt->bind_param("sisssssiisssdsssdsssssss",$firstName, $dateofbirth, $email, $homeaddress, $nationality, $fatherName, $motherName,
    $phoneHome, $phoneMobile, $gender, $hscName, $hscBoard, $hscScore, $sscName, $sscBoard, $sscScore, $currentPursuing, $CurrentinstituteName, $backlog,
    $photo, $hscphot, $sscphoto, $totalmarksheet);
    echo "registration succesfully...";
    $stmt->close();
    $conn->close();
}


>?