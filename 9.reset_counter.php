<?php
   session_start();
   unset($_SESSION["counter"]);
   echo"<meta http-equiv=REFRESH content='0, ur1=counter.php'>";

?>