<?php
include_once 'connection.php'; 

$id = "";
$Name = "";
$Comment = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM blog_comment WHERE id = '$id'";
    $result = mysqli_query($con, $sql);

    if ($result && $commentdata = mysqli_fetch_assoc($result)) {
        $Name = isset($commentdata['Name']) ? $commentdata['Name'] : "";
        $Comment = isset($commentdata['Comment']) ? $commentdata['Comment'] : "";
    }
}

if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $Name = $_POST['Name'];
    $Comment = $_POST['Comment-text'];

    $sql = "UPDATE `blog_comment` SET `Name`='$Name', `Comment`='$Comment' WHERE id='$id'";
    $Update = mysqli_query($con, $sql);

    if ($Update) {
        echo '<script type="text/javascript">
            window.onload = function () { alert("Comment Updated!"); 
            window.location.href = "Comment_Table.php";}
        </script>';
        exit();
    } else {
        echo "Error updating comment: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog - Online Shopping</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./Blogs.css">
    <style>
        
        .blog-article:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="top">
        <div class="logo">
            <img src="./photos/logos/logo.png" alt="logo" width="100px" height="35px">
        </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="">Services</a></li>
                <li class="Hlist"><a href="">About</a></li>
                <li class="Hlist"><a href=""> Blog</a></li>
                <li class="Hlist"><a href="">Projects</a></li>
                <li class="Hlist"><a href="">Contact us</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <div class="blog-article">
            <img src="./photos/1.jpeg" alt="Article 2 Image">
            <h2>BLOG 1</h2>
            <p>blog 1 content goes here...</p>
        </div>

        <div class="blog-article">
            <img src="./photos/2.png" alt="Article 3 Image">
            <h2>BLOG 2</h2>
            <p>blog 2 content goes here...</p>
        </div>

        <div class="blog-article">
            <img src="./photos/3.jpeg" alt="Article 4 Image">
            <h2>BLOG 3</h2>
            <p>blog 3 content goes here...</p>
        </div>

        <div class="blog-article">
            <img src="./photos/5.png" alt="Article 5 Image">
            <h2>BLOG 4</h2>
            <p>blog 4 content goes here...</p>
        </div>

        <div class="blog-article">
            <img src="./photos/4.png" alt="Article 6 Image">
            <h2>BLOG 5</h2>
            <p>blog 5 content goes here...</p>
        </div>

       

    </div>

    <div class="comment">
        <h3>Add a Comment</h3>
        <form id="comment-form" action="Update_comment.php" method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="Name" required value="<?php echo $Name; ?>">
            </div>
            <div>
                <label for="Comment-text">Comment:</label>
                <textarea id="Comment-text" name="Comment-text" required><?php echo $Comment; ?></textarea>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="Submit">Submit Comment</button>
            </div>
        </form>
    </div>

    <footer class="footer">
        <div id="upper">
            <img src="./photos/logos/logo.png" alt="logo" width="150px" height="40px">
        </div>
        <br>
        <br>
        <hr>
        <div class="list">
            <div class="row">
                <ul>
                    <li class="Flist2">
                        <img src="./photos/logos/email.png" alt="email" width="30px" height="30px">
                        <p class="icon">abcd@gmail.com</p>
                    </li><br>
                    <li class="Flist2">
                        <img src="./photos/logos/pin.png" alt="email" width="30px" height="30px">
                        <p class="icon">1234 Elm Street, Springfield, USA</p>
                    </li><br>
                    <li class="Flist2">
                        <img src="./photos/logos/phonew.png" alt="email" width="30px" height="30px">
                        <p class="icon">555-555-5555</p>
                    </li>
                </ul>
                <div class="Fend"></div>
                <ul>
                    <li class="Flist2"><a href="">Services</a></li><br>
                    <li class="Flist2"><a href="">About</a></li><br>
                    <li class="Flist2"><a href=""> Blog</a></li><br>
                    <li class="Flist2"><a href="">Projects</a></li><br>
                    <li class="Flist2"><a href="">Contact us</a></li>       
                </ul>
            </div>
        </div>
        <br>
        <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>
</body>
</html>

