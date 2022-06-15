





<?php

/* 


header('Access-Control-Allow-Origin:*');
date_default_timezone_set ("Asia/Shanghai");
echo '当前时间是：'.date('Y-m-d H:i:s');
*/


?>






<br/><br/><br/>







<?php



header("content-type:text/html;charset=utf-8");



header("content-type:text/html;charset=utf-8");
 //$count=0;
  if(file_exists("tongji.txt"))   //判断是否存在tongji.txt文件
  {
    echo "存在";
    while($count<1)
   {
    $count=file_get_contents("tongji.txt");  //取出文件tongji.txt中的内容
   }
 file_put_contents("tongji.txt",1);  //讲$count的值写入tongji.txt文件中
  }
  
  $count= $count+1;
  echo "php".$count;
  

   //打开关闭txt操作，以前的必须手动打开txt，删除内容
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $fp = fopen("$DOCUMENT_ROOT/tongji.txt",'w+');


  fclose($fp);
  
  unlink("tongji.txt");
  file_put_contents("tongji.txt",$count);  //讲$count的值写入tongji.txt文件中

  
  
?>