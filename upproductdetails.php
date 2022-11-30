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
        <?php 
            echo "<body bgcolor=pink>";
            $host="localhost";
            $user="root";
            $password="";
            $connect=mysqli_connect($host,$user,$password,"zaisa");
            $sql= "SELECT * FROM productdetails";
            $result = mysqli_query($connect,$sql); 
            echo "<br><br><br><br><table border=1 width=50% align=center>
            <tr>
                <caption><h1>List of products</h1></caption>
                <th>Product_Id</th>
                <th>Product_name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>";
            while($row = mysqli_fetch_array($result))
            {  
                echo "<tr>";                        
                echo "<td align=center>".$row['Product_id']."</td>";
                echo "<td align=center>".$row['Product_name']."</td>";
                echo "<td align=center>".$row['Quantity']."</td>";
                echo "<td align=center>".$row['Price']."</td>";
                echo "</tr>" ;            
            }
            echo "</table>";
            echo "</body>";
            mysqli_close($connect); 
        ?>   
    </head>  
    <body>
        <center><a href="update.html" class="btn" >BACK</a></center>
    </body>      
</html>
