
<?php
require "connection.php";

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $comment = $_POST['comment-text'];

    $add_sql = "INSERT INTO blog_comment(Name,Comment) VALUES ('$name','$comment')";

    if ($con->query($add_sql))
    {
        echo "connection sucessfully";
        header("Location: Comment_Table.php");
    }
    else
    {
        echo "Error:" .$add_sql."<br>".$con->error;
    }

}
$con->close();
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
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li>
                <li class="Hlist"><a href="../News/News.php"> News</a></li>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Contact Us Page/contact.php">Contact us</a></li>
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
        <form id="comment-form" action="Blog_send.php" method="post">
            <div class="colour">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="colour">
                <label for="comment-text">Comment:</label>
                <textarea id="comment-text" name="comment-text" required></textarea>
            </div>
            <div>
                <button type="submit" name="submit">Submit Comment</button>
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
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li><br>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li><br>
                <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li><br>
                <li class="Hlist"><a href="../News/News.php"> News</a></li><br>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li><br>
                <li class="Hlist"><a href="../Contact Us Page/contact.php">Contact us</a></li><br> 
                </ul>
            </div>
        </div>
        <br>
        <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>
</body>
</html>

