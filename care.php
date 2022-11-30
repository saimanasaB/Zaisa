<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Zaisa</title>
    </head>
    <body>
        <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $username=$_GET['username'];
            $phone=$_GET['phone'];
            $mail=$_GET['mail'];
            $msg=$_GET['msg'];
            $sql="INSERT INTO care(Username,PhoneNumber,Email, Message) VALUES('$username',$phone,'$mail','$msg')";
            mysqli_query($connect,$sql); 
            $subject = "Welcome ".$username;
            $body = "Hi, there..."."\r\n"."We have received your message";
            $sender = "From: 2033015mdcs@cit.edu.in";
            mail($mail, $subject, $body, $sender); 
            include("index.html");                            
            mysqli_close($connect);          
        ?>
   </body>    
</html>
