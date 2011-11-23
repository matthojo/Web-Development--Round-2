<?php

session_start();
### Writing the Session
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
    	### This should return true.
    	if(isset($_SESSION['namegoeshere'])){
    		echo "Session 'namegoeshere' is set.";
    	}else{
    		echo "Session 'namegoeshere' is not set.";
    	}
    	echo "<br />";
    	### This should return false.
    	if(isset($_SESSION['namegoeshere2'])){
    		echo "Session 'namegoeshere2' is set.";
    	}else{
    		echo "Session 'namegoeshere2' is not set.";
    	}
    	
    	
    ?>
  </div>
</body>
</html>