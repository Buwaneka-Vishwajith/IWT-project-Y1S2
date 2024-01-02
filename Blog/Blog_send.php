<?php
require "connection.php";

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $comment = $_POST['comment-text'];

    $add_sql = "INSERT INTO blog_comment(Name,Comment) VALUES ('$name','$comment')";

    if ($con->query($add_sql))
    {
        echo "connection sucessfuly";
        header("Location: Comment_Table.php");
    }
    else
    {
        echo "Error:" .$add_sql."<br>".$con->error;
    }

}
$con->close();
?>

