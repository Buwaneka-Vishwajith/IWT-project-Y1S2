<?php

include 'connect.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./admindb.css">

    <!-- A bootstrap table is included in the code -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"       
  rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Admin DB</title>
</head>

<body>

  <!-- Nav bar-->
  <div class="top">
    <div class="logo">
      <img src="./logos/logo.png" alt="logo" width="100px" height="35px">
    </div>
    <nav>
      <ul>
        <li class="Hlist"><a href="../Home/home.html">Home</a></li>
        <li class="Hlist"><a href="../DesignerCRUD/display.php">Designers</a></li>
        <li class="Hlist"><a href="../payment page/paymentdashbord.php">Payments</a></li>
        <li class="Hlist"><a href="../login/log.php">Log out</a></li>
      </ul>
    </nav>
  </div>

  <script>
    // logout process

function logout() {
    var confirmLogout = confirm("Are you sure you want to log out?");
    if (confirmLogout) {
        // Redirect to the login page
        window.location.href = "../login Us/log.php";
    }
}

  </script>


  <!--admin dashboard-->


  <!-- <div class="dashboard">
    <div class="section inbox">
      <h2 class="some">Inbox</h2>
      <ul class="messages">
        <li class="message">New message from Client A</li>
        <br>
        <li class="message">New message from Client B</li>
        <br>
        <li class="message">New message from Client B</li>
        <br>
      </ul>
    </div> -->


    <!--jjjjjjjjjj-->

    <div class="msgs">
    <h2 id="inb">Inbox</h2>
  </div>
  <!-- BOOTSTRAP table-->

  <div class="table-responsive small">
    <table class="table table-striped table-sm" style="border: 5px rounded-circle #ccc;">
      <thead>
        <tr>
          <th scope="col">Email </th>
          <th scope="col">Name </th>
          <th scope="col">Telephone </th>
          <th scope="col">Contact Number</th>
          <th>Operation </th>
        </tr>
      </thead>
      <tbody>

        <?php

        $sql = "Select * from contact_us";

        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {

            $emailC = $row['Email'];
            $nameC = $row['Name'];
            $teleC = $row['Telephone'];
            $msg = $row['Comment'];

            echo ' <tr>
                  <td>' . $emailC . '</td>
                  <td>' . $nameC . '</td>
                  <td>' . $teleC . '</td>
                  <td>' . $msg . '</td>
                  <td>
                  <a href="delete.php?deletemail='.$emailC.'"><button class="btn btn-success">Solved </button></a>
                </td>
        
                </tr> ';
          }
        }
        ?>



      </tbody>
    </table>
  </div>
    

    <!-- <div class="section ongoing-projects">
                <h2 class="some">Ongoing Projects</h2>
                <ul class="projects">
                    <li class="project">Project X - Status: In Progress</li><br>
                    <li class="project">Project Y - Status: In Progress</li><br>
          
                </ul>
            </div>
    
            <div class="section completed-projects">
                <h2 class="some">Completed Projects</h2>
                <ul class="projects">
                    <li class="project">Project Z - Status: Completed</li><br>
                    <li class="project">Project W - Status: Completed</li><br>

                </ul>
            </div> -->
  </div>

  <div class="status">
    <h2 id="ru">Registered Users</h2>
  </div>
  <!-- BOOTSTRAP table-->

  <div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">CLIENT ID </th>
          <th scope="col">First Name </th>
          <th scope="col">Last Name</th>
          <th scope="col">Contact Number</th>
          <th>NIC</th>
          <th>Operation </th>
        </tr>
      </thead>
      <tbody>

        <?php

        $sql = "Select * from client";

        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {

            $ClientId = $row['Client_id'];
            $Fname = $row['First_Name'];
            $Lname = $row['Last_Name'];
            $number = $row['Contact_number'];
            $nic = $row['nic'];

            echo ' <tr>
                  <td>' . $ClientId . '</td>
                  <td>' . $Fname . '</td>
                  <td>' . $Lname . '</td>
                  <td>' . $number . '</td>
                  <td>' . $nic . '</td>
                  <td>
                  <a href="update.php?updateid='.$ClientId.'"><button class="btn btn-primary">Update </button></a>
                  <a href="delete.php?deleteid='.$ClientId.'"><button class="btn btn-danger">Delete</button></a>
                </td>
        
                </tr> ';
          }
        }
        ?>



      </tbody>
    </table>
  </div>
  <!--Footer-->

  <footer class="footer">
    <div id="upper">
      <img src="./logos/logo.png" alt="logo" width="150px" height="40px">
    </div>

    <br>
    <br>
    <hr>

    <div class="list">
      <div class="row123">

        <ul class="left1">
          <li class="Flist2">
            <img src="./logos/email.png" alt="email" width="30px" height="30px">
            <p class="icon">abcd@gmail.com</p>
          </li><br>
          <li class="Flist2">
            <img src="./logos/pin.png" alt="email" width="30px" height="30px">
            <p class="icon">1234 Elm Street, Springfield, USA</p>
          </li><br>
          <li class="Flist2">
            <img src="./logos/phonew.png" alt="email" width="30px" height="30px">
            <p class="icon">555-555-5555</p>
          </li>

        </ul>

        <div class="Fend"></div>
        <ul class="right1">
          <li class="Flist2"><a class="ad" href="../Service page/service.html">Services</a></li><br>
          <li class="Flist2"><a class="ad" href="../About Us/about.html">About</a></li><br>
          <li class="Hlist"><a href="../Blog/Blog.php"> Blog</a></li><br>
          <li class="Hlist"><a href="../Advertiser support/Advertiser support.html"> Support</a></li><br>
          <li class="Flist2"><a class="ad" href="../Our work page/Our work page.php">Projects</a></li><br>
          <li class="Flist2"><a class="ad" href="../Contact Us Page/contact.php">Contact us</a></li>
        </ul>
      </div>
    </div>

    <br>

    <p id="cop">2023 X Media. All Rights Reserved</p>
  </footer>

  <script src="./admin.js"></script>
</body>

</html>