<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Zaisa</title>
    </head>
        <?php
            // Connect to the database
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $username=$_GET['username'];
            $pass=$_GET['pass'];
            $mail=$_GET['mail'];
            $query = "SELECT * FROM login where Username='$username'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if($row["Username"]==$username && $row["Password"]==$pass)
                include("already.php");
            else
            {                
                $sql="INSERT INTO login(Username,Password,Email) VALUES('$username',$pass,'$mail')";
                if (mysqli_query($connect,$sql))
                    include("welcome.php");
                $to=$_GET['mail'];
                $subject = "Welcome ".$username;
                $body = "Hi, there..."."\r\n"."Welcome to Zaisa"."\r\n"."Signed in successfully";
                $sender = "From: 2033015mdcs@cit.edu.in";
                mail($to, $subject, $body, $sender);                           
            }   
            mysqli_close($connect);          
        ?>            
        
    </body>    
</html>
