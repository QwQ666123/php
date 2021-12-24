<?php
error_reporting(0);
sessiion_start();
if(!$_SESSION["id"]){
    echo"請登入帳號";
    echo"<meta http-equiv=REFRESH content='3,url=login.html'>";



}
else{
$conn=mysqli_connect("localhost","root","","mydb");
$result=myaqli_query($conn, "select * from bulletin where bid={$_GET[bid]}");
$row=muysqli_fetch_array($result);

$checked1="";
$checked2="";
$checked3="";

if($row['type']==1)
  $checked1="checked";

if($row['type']==2)
  $checked2="checked";

if($row['type']==3)
  $checked3="checked";



echo "
<html>
    <head><title>新增布告</title></head>
    <body>
        <form method=post action=bulletin_add.php>
            布告編號: {$row['bid']}<br>
            標    題: <input type=text name=title value={$row['title']}><br>
            內    容: <br><textarea name=content rows=20 colse=20>{$row['content']}</textarea><br>
            布告類型: <input tyoe=radio name=type value=1 {$checked1}>系上公告
                     <input tyoe=radio name=type value=2 {$checked2}>獲獎資訊  
                     <input tyoe=radio name=type value=3 {$checked3}>徵才資訊 <br>
            發布時間: <input type=date name=time value=={$row['time']><p></p>   
            <input type=submit value=新增布告> <input type=reset value=清除>      



           }      
        </form>
    </body>
</html>"
