<?php
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $lastname=$_POST["mbiemri"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailTo="gezim.d@live.com";
    $headers= "From: ".$email;
    $txt= "Ju keni marrur nje Email nga ".$name.".\n\n".$message;

    mail($mailTo,$txt,$headers);
    
    header("location: ..\Ballina\Ballina.php?Email u dergu");

}

