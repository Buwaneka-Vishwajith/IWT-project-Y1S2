<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaymentDashBord</title>
    <link rel="stylesheet" href="./payment.css">
</head>
<body>


    <div class = "add">
        <button class="btn"><a href="payment.php" class="btext">Add Invoice</a>
    </div>
    <div class = "full">
    <center>
        <div class ="table">
            <div class="hbody">
                <table>
                    <thead>  
                        <tr>
                            <th>Invoice_id</th>
                            <th>Customer_name</th>
                            <th>Contact_number</th>
                            <th>Services_id</th>
                            <th>Package_id</th>
                            <th>Total_amount</th>
                            <th>I_Date</th>
                            <th>operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "select * from  `invoice`";

                            $result = mysqli_query($con, $sql);
                            

                            
                            if ($result) {
                                while ($row=mysqli_fetch_assoc($result)){

                                    $id=$row['Invoice_id'];
                                    $name=$row['Customer_name'];
                                    $cNumber=$row['Contact_number'];
                                    $sID=$row['Services_id'];
                                    $pID=$row['Package_id'];
                                    $tAmount=$row['Total_amount'];
                                    $iDate=$row['I_Date'];

                                    echo ' <tr>
                                        <th scope="row">'.$id.'</th>
                                        <td>'.$name.'</td>
                                        <td>'.$cNumber.'</td>
                                        <td>'.$sID .'</td>
                                        <td>'.$pID .'</td>
                                        <td>'.$tAmount.'</td>
                                        <td>'.$iDate.'</td>
                                        <td>
                                        <div class="btnu1">
                                            <a href="update.php?updateid='.$id.'">Update </button></a>
                                        </div>
                                        <br>
                                        <div class="btnu2">
                                            <a href="delete.php?deleteid='.$id.'">Delete</button></a>
                                        </div>
                                        </td>

                                    </tr> ';
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        <div>
    </center> 
    </div>


    

 

<br><br><br><br>
</body>
</html>

