<?php
include 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Admins</title>
    <link rel="stylesheet" href="./Add _ Update _ Display.css">
</head>
<body>
    <div class="btn">
        <button><a href="Add User.php">Add Admin</a> 
        <button><a href="../Admin_Dashboard/admindb.php">Admin Dashbord</a> <!--link to Admin DashBord PHP File-->
        <button><a href="../Blog/Comment_Table.php">Blog comments Section</a>
        <button><a href="../Blog/Update_comment.php">Blog comments  - update</a>
    </div>
    

<h1><Center>All Admins</center></h1>

<table id="customers">
    <thead>
        <tr>
            <th>sl no</th>
            <th>Admins</th>
            <th>Password</th>
            <th>Operation</th>
        </tr>
    </thead> 
    <tbody>
        <?php
                    $sql="Select * from `management`";
                    $result=mysqli_query($con, $sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){    
                            $id=$row['id'];
                            $name=$row['Admin_id'];
                            $password=$row['Password'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$password.'</td>
                            <td>
                                <button><a href="Update.php? updateid='.$id.'" class="text-light">Update</a></button>
                                <button><a href="Delete Admin.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                            </td>
                            </tr>';
                        }
                    }
                
        ?>
        
    </tbody>
</table>

</body>
</html>