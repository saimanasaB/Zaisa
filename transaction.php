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
            $sql= "SELECT * FROM transaction";
            $result = mysqli_query($connect,$sql); 
            echo "<br><br><br><br><table border=1 width=50% align=center>
            <tr>
                <caption><h1>Transaction details</h1></caption>
                <th>From</th>
                <th>To</th>
                <th>Amount</th>
            </tr>";
            while($row = mysqli_fetch_array($result))
            {  
                echo "<tr>";                        
                echo "<td align=center>".$row['FromUser']."</td>";
                echo "<td align=center>".$row['ToPerson']."</td>";
                echo "<td align=center>".$row['AmountTransaction']."</td>";
                echo "</tr>" ;            
            }
            echo "</table>";
            mysqli_close($connect); 
            echo "</body>";         
        ?> 
    <body>
        <center><a href="adminindex.html" class="btn" >BACK</a></center>
    </body>          
</html>
