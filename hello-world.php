<?php include "connect.php"; 
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cwid = $_POST["cwid"];
    $phone = $_POST["phone"];
    //$formcontent = "From: $name \n Email is: $email";
    //echo "Thank you $name";
    
    if(empty($name)||empty($email)) {
        echo "Name and email are mandatory";
        exit;
    }

    echo $phone;
    mysqli_query($conn, "INSERT INTO users VALUES ('$name', '$cwid', '$phone', '$email')");
    echo $phone;

        if(mysqli_affected_rows($conn) > 0) {
        echo "<p> New Employee added</p>";
        //echo "<a href="hello.html">Go back</a>";
    } else {
        echo "Employee not added!";
        echo mysqli_error($conn);
    }
    
    $email_from = "vishalinvincible21@gmail.com";
    $email_subject = "New Sample form";
    $email_body = "You've recieved an email from $name".
        "email address: $email".
    $to = "vishalinvincible21@gmail.com";
    $headers = "from: $email_from";
    
    $status = mail($to,$email_subject,$email_body,$headers);
    
    if($status) {
        echo "email on the way...";
    }
?>