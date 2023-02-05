<!DOCTYPE html>
<html>
<head>
    <title>Halaman Dashboard</title>
</head>
<body>
    <?php
       session_start();
       if(!isset($_SESSION["nama"]))
       {
            header("location: loging.php");
       }
?>
          <center><h2>20192205145 Muhammad Riyaldi</h2></center>
          <center><a href="logout.php">logout</a></center>
</body>

</html>