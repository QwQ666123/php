
<?php
error_reporting(0);
sessiion_start();
if(!$_SESSION["id"]){
    echo"請登入帳號";
    echo"<meta http-equiv=REFRESH content='3,url=login.html'>";

}
else{
    $conn=mysqli_connect("localhost","root","","mydb");
    if(!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{{$_POST['id']}")){
        echo "修改錯誤";
        echo "<<meta http-equiv=REFRESH content='3,url=login.html'>";

    }
    else{
        echo "修改成功，三秒回到網頁";
        echo "<<meta http-equiv=REFRESH content='3,url=login.html'>";
    }


}

   
    ?>


