<?php
   include  'connect.php';
    if(isset($_GET['deleteid'])){
        $ClientId = $_GET['deleteid'];

        echo '<script>
        alert("id : " + $ClientId);
    </script>';

        $sql = "DELETE FROM client WHERE Client_id = '$ClientId' "; // Removed single quotes around table name
        $result = mysqli_query($con, $sql);
        if($result){
            header('location:admindb.php');
        } 
        else{
            die(mysqli_error($con));
        }
    }
?>


<?php
   include  'connect.php';
    if(isset($_GET['deletemail'])){
        $emailC = $_GET['deletemail'];

        echo '<script>
        alert("id : " + $emailC);
    </script>';

        $sql = "DELETE FROM contact_us
                 WHERE Email = '$emailC' "; // Removed single quotes around table name

        $result = mysqli_query($con, $sql);
        if($result){
            header('location:admindb.php');
        } 
        else{
            die(mysqli_error($con));
        }
    }
?>

