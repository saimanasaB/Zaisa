<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="x-icon" href="logo.jpg">
        <title>Zaisa</title>
        <style>
            a {
                color: inherit;
                text-decoration: none;
            }
            .btn {
                display: inline-block;
                background-color: dodgerblue;
                border-radius: 25px;
                padding: 1.2rem 4rem;
                color: #fff;
                font-weight: 600;
                margin-top: 3rem;
            }
        </style>
    </head>
        <?php 
            echo "<body bgcolor=pink>";
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $sql= "SELECT * FROM shopping";
            $result = mysqli_query($connect,$sql); 
            echo "<br><br><br><br><table border=1 width=50% align=center>
            <tr>
                <caption><h1>Customer Details</h1></caption>
                <th>Name</th>
                <th>Product_Id</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Address</th>
                <th>PhoneNumber</th>
                <th>Email</th>
            </tr>";
            while($row = mysqli_fetch_array($result))
            {  
                echo "<tr>";                        
                echo "<td align=center>".$row['Name']."</td>";
                echo "<td align=center>".$row['ProductId']."</td>";
                echo "<td align=center>".$row['Quantity']."</td>";
                echo "<td align=center>".$row['Amount']."</td>";
                echo "<td align=center>".$row['Address']."</td>";
                echo "<td align=center>".$row['PhoneNumber']."</td>";
                echo "<td align=center>".$row['Email']."</td>";
                echo "</tr>" ;        
            }
            echo "</table>";
            mysqli_close($connect); 
            echo "</body>";         
        ?> 
    <body>
        <center><a href="shipindex.html" class="btn" >BACK</a></center>
    </body>          
</html>
