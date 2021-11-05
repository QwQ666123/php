<?php
  #mysqli_connect()  建立資料庫連結
  $conn=mysqli_connect("localhost","root","","mydb");  

  #mysqli_query()    從資料庫查詢資料
  $result=mysqli_query($conn,"select * from user");

  #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
  $row=mysqli_fetch_array($result);
  echo $row["id"]."".$row["pwd"];
  echo "<br>";
  
  $row=mysqli_fetch_array($result);
  echo $row["id"]."".$row["pwd"];

  ?>  <!--mysqli_connect() 函数打开一个到 MySQL 服务器的新的连接。--> 
      <!--mysqli_query() 函数执行某个针对数据库的查询。-->    
      <!--mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有。--> 
      