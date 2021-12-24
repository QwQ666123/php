<?php
error_reporting(0);
sessiion_start();
if(!$_SESSION["id"]){
    echo"請登入帳號";
    echo"<meta http-equiv=REFRESH content='3,url=login.html'>";

}
else{


    $conn=mysqli_connect("localhost","root","","mydb");
    $sql="insert into bulletin(title,content,type,time)
    values('{$_POST['title']}','{$_POST['content']}',{$_POST['type']},'{$_POST['time']}')";
    if (!mysqli_query($conn,$sql))
    {
        echo "新增命令錯誤";

    }
    else
    {
        echo "新增布告成功，三秒回到網頁";
        echo "<<meta http-equiv=REFRESH content='3,url=login.html'>";

    }

}

