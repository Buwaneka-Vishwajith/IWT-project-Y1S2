<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="./validation.js"></script>

    
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="./News.css">
    <script src="./validation.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    <!-- Nav bar-->
    <div class="top">
        <div class="logo">
            <img src="./photos/logo.png" alt="logo" width="100px" height="35px">
            </div>
        <nav>
            <ul>
                <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Advertiser support/Advertiser support.html">Support</a></li>
            </ul>
        </nav>
    </div>
    <header>
        <h1>News</h1>
    </header>
    
    <div class="container">
        <div class="news-item" onmouseover="highlightItem(this)" onmouseout="resetItem(this)">
            <a href="https://www.thecut.com/2023/10/sale-hanna-andersson-nest-levis-2023.html" target="_blank">
                <img class="img_deg" src="./photos/1.1.png" alt="News 1 Image">
                <p style="color: #000000;text-align: center;">October Prime Day is next Tuesday, October 10, but there are plenty of other discounts to keep us busy in the meanwhile.</p>
            </a>
        </div>
        <div class="news-item" onmouseover="highlightItem(this)" onmouseout="resetItem(this)">
            <a href="https://www.buzzfeed.com/hbraga/fall-closet-upgrade" target="_blank">
                <img class="img_deg" src="./photos/2.png" alt="News 2 Image">
                <p style="color: #000000;text-align: center;">far surpassed my expectations." It's adorable and fashionable. The only problem is that the arms are too short! But it's not all horrible. Overall, a great attractive shirt; I ordered more in different colors!" —Taylor</p>
            </a>
        </div>
        <div class="news-item" onmouseover="highlightItem(this)" onmouseout="resetItem(this)">
            <a href="https://www.purewow.com/fashion/jenni-kayne-fall-collection" target="_blank">
                <img class="img_deg" src="./photos/3.1.jpg" alt="News 3 Image">
                <p style="color: #000000;text-align: center;">The Jenni Kayne fall collection has done it again, with new pieces that adroitly evolve the coastal grandma aesthetic.</p>
            </a>
        </div>
        <div class="news-item" onmouseover="highlightItem(this)" onmouseout="resetItem(this)">
            <a href="https://www.ablogtowatch.com/new-release-seiko-prospex-landmaster-30th-anniversary-sla071-watch/" target="_blank">
                <img class="img_deg" src="./photos/4.jpg" alt="News 4 Image">
                <p style="color: #000000;text-align: center;">Seiko Landmaster, first presented in 1993, is a durable adventure watch designed for mountaineers and explorers.</p>
            </a>
        </div>
    </div>
    

    <!--Footer-->

    <footer class="footer">
        <div id="upper">
            <img src="./logo.png" alt="logo" width="150px" height="40px">
        </div>

        <br>
        <br>
        <hr>

        <div class="list">
            <div class="row">
            
            <ul>
                <li class="Flist2">
                    <img src="./photos/email.png" alt="email" width="30px" height="30px">
                    <p class="icon">abcd@gmail.com</p>
                </li><br>
                <li class="Flist2">
                    <img src="./photos/pin.png" alt="email" width="30px" height="30px">
                    <p class="icon">1234 Elm Street, Springfield, USA</p>
                </li><br>
                <li class="Flist2">
                    <img src="./photos/phonew.png" alt="email" width="30px" height="30px">
                    <p class="icon">555-555-5555</p>
                </li>
  
            </ul>

            <div class="Fend"></div>
            <ul>
            <li class="Hlist"><a href="../Service page/service.html">Services</a></li>
                <li class="Hlist"><a href="../About Us/about.html">About</a></li>
                <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li>
                <li class="Hlist"><a href="../News/News.php"> News</a></li>
                <li class="Hlist"><a href="../Our work page/Our work page.php">Projects</a></li>
                <li class="Hlist"><a href="../Contact Us Page/contact.php">Contact us</a></li>       
            </ul>
        </div>  
        </div>

        <br>

        <p id="cop">2023 X Media. All Rights Reserved</p>
    </footer>

    
    <script>
        
        function highlightItem(item) {
            item.style.backgroundColor = "#FFFF00"; 
        }

        
        function resetItem(item) {
            item.style.backgroundColor = "#609ead"; 
        }
    </script>
</body>
</html>
