<?php

    $name= $_POST['studentName'];
    $dob = $_POST['dob'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $email = $_POST['emailClient'];
    $number = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $textarea = $_POST['txtarea'];

    $email_to = "720819104112@hit.edu.in";
    $subject = "mail from Sudharsan";
    $txt = "Name of Student = ". $name . "\r\n Student Date of Birth =". $dob . "\r\n Father's Name = ".$father. "\r\n Mother Name = ".$mother. "\r\n Mobile Number = ". $number . "\r\n E-mail = "
    .$email. "\r\n Permanent Address = ". $address. "\r\n Who Sugguest you!" . $textarea ;

    $headder = "From:school@antonyschool.edu \r\n";
    if (mail($email_to , $subject , $txt , $headder)== true){
        header("Location: thankpage.php");
        
    } else{
        echo"Error: try again Later!";
    }

    
?>