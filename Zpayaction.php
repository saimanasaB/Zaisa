<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Zaisa</title>
    </head>
    <body>
        <?php
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $username=$_GET['username'];
            $pass=$_GET['pass'];
            $amount=$_GET['amount'];
            $to=$_GET['to'];
            $mail=$_GET['mail'];
            $query = "SELECT * FROM zpay where AccountHolder='$username'";
            $result = mysqli_query($connect,$query); 
            $row = mysqli_fetch_array($result);  
            if($row["AccountHolder"]==$username && $row["AccountPass"]==$pass)
            {   
                if($row["BalanceAmount"]>500)
                {
                    $sql="INSERT INTO Transaction(FromUser,ToPerson,AmountTransaction) VALUES('$username','$to',$amount)";
                    mysqli_query($connect,$sql); 
                    $db=$row["BalanceAmount"]-$amount;
                    $query1="UPDATE zpay SET BalanceAmount='$db' WHERE AccountHolder='$username' and AccountPass='$pass'";
                    mysqli_query($connect,$query1);
                    $query2 = "SELECT * FROM zpay where AccountHolder='$to'";
                    $result1 = mysqli_query($connect,$query2); 
                    $row1 = mysqli_fetch_array($result1); 
                    $db1=$row1["BalanceAmount"]+$amount;
                    $query1="UPDATE zpay SET BalanceAmount='$db1' WHERE AccountHolder='$to'";
                    mysqli_query($connect,$query1);
                    include("Amount.html");
                    $subject = "Welcome ".$username;
                    $body = "Hi, there..."."\r\n"."Your payment has been successfully transacted to ".$to. "!";
                    $sender = "From: 2033015mdcs@cit.edu.in";
                    mail($mail, $subject, $body, $sender);
                }
                else
                    include("alertpay.html");
            }
            else
            {
                include("accountalert.html");
            }
            mysqli_close($connect);          
        ?>       
    </body>    
</html>
