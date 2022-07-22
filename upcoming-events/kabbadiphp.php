<?php
    $name = $_POST['name'];
    $rno = $_POST['rno'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("insert into kabbadi(name,rno,email,dob,course,branch) values (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$name,$rno,$email,$dob,$course,$branch);
        $stmt->execute();
        echo "Registeration Successfull";
        $stmt->close();
        $conn->close();
    }
?>