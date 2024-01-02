<?php include_once 'connection.php'; 

if(isset($_GET['id'])){

    $id=$_GET['id']; 
    $delete=mysqli_query($con,"DELETE FROM blog_comment WHERE id='$id'");
    
}

?>



<!DOCTYPE html>
<html>

<head>
    <title>Comment Table</title>
    <link rel="stylesheet" href="./CTables.css">
</head>

<body>
    <h2 class="box1">Comment Table</h2>
    <div class="gg1">
        <table border="1px" cellpadding="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>comment</th>
                <th>Action</th>
            </tr>

            <?php
            $sql = "SELECT * FROM blog_comment;";
            $result = mysqli_query($con, $sql);
            $checkResult = mysqli_num_rows($result);

            if ($checkResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                        <tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Comment'] . "</td>
                            <td>
                                <a href='Comment_Table.php?id=" . $row['id'] . "' class='delete-btn' onclick='confirmDelete(" . $row['id'] . ")'>Delete</a>
                                <a href='Update_comment.php?id=" . $row['id'] . "' class='delete-btn'>Update</a>
                            </td>

                        </tr>
                    ";
                }
            }
            ?>

        </table>
    </div>

    <script>
        function confirmDelete(commentId) {
            if (confirm("Are you sure you want to delete this comment?")) {
                window.location.href = "Comment_Table.php?id=" + commentId;
            }
        }
    </script>
</body>
</html>
