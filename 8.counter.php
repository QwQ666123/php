<?php
   session_start();
   if(isset($_SESSION["counter"]))
   $_SESSION["counter"]++;
   else
   $_SESSION["counter"]=1;

   echo "次數"$_SESSION["counter"];
   echo"<br>"."<a href=reset_counter.php>次數歸零</a>";

   
   ?> 
   <!--顯示出 PHP 資訊-->