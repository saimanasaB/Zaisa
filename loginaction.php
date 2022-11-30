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
            $query = "SELECT * FROM login where Username='$username'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if($row["Username"]==$username && $row["Password"]==$pass)
                include("loginwelcome.html");
            else
                include("alert.html");                                 
            mysqli_close($connect)            
        ?>            
    </body>    
</html>
