<?php

session_start();

$_SESSION['namegoeshere'] = "This is some data.";

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Reading and Writing Sessions</title>
  <meta name="author" content="Matthew Harrison-Jones">

</head>
<body>
  <div id="container">
   
    <?php 
    	echo $_SESSION['namegoeshere'];
    ?>
  </div>
</body>
</html>