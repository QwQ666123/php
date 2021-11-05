<?php
    錯誤報告（0）；
    $ conn = mysqli_connect ( "localhost" , "root" , "" , "mydb" );
    $ result = mysqli_query ( $ conn , "select * from bulletin" );
    echo  "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發布時間</td></tr>" ;
    while ( $ row = mysqli_fetch_array ( $ result )){
        echo  "<tr><td>" ;
        迴聲 $行[ “出價” ];
        echo  "</td><td>" ;
        迴聲 $行[ “類型” ];
        echo  "</td><td>" ;
        迴聲 $行[ “標題” ];
        echo  "</td><td>" ;
        迴聲 $行[ “內容” ];
        echo  "</td><td>" ;
        迴聲 $行[ “時間” ];
        echo  "</td></tr>" ;
    }
    迴聲 “</table>”
?>  <!--顯示出 PHP 資訊-->